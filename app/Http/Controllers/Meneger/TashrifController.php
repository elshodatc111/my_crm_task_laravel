<?php

namespace App\Http\Controllers\Meneger;
use Illuminate\Validation\Rule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarkazAddres;
use App\Models\MarkazSmm;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Models\UserBalans;
use App\Models\UserHistory;
use App\Models\MarkazSmsSetting;
use App\Models\MarkazHodimStatistka;
use App\Models\Markaz;
use App\Models\MarkazPaymart;
use App\Models\UserEslatma;
use App\Models\Grops;
use App\Models\UserGroup;
use Illuminate\Support\Facades\Hash;
use App\Jobs\SendMessage;

class TashrifController extends Controller
{
    public function allTashrif(){
        $users = User::where('markaz_id',auth()->user()->markaz_id)->where('role_id',6)->orderby('created_at','desc')->paginate(15);
        return view('meneger.students.index',compact('users'));
    }
    public function TashrifSearch(Request $request){
        $query = $request->get('query');
        $users = User::where('markaz_id', auth()->user()->markaz_id)
                 ->where('role_id', 6)
                 ->when($query, function($queryBuilder) use ($query) {
                     $queryBuilder->where(function($subQuery) use ($query) {
                         $subQuery->where('name', 'LIKE', "%{$query}%")
                                  ->orWhere('email', 'LIKE', "%{$query}%");
                     });
                 })->paginate(10);

        return view('meneger.students.pagination_data', compact('users'))->render();
    }
    public function allDebet(){
        $users = User::where('markaz_id',auth()->user()->markaz_id)
            ->where('role_id',6)
            ->where('balans','<',0)
            ->orderby('created_at','desc')
            ->paginate(15);
        return view('meneger.students.debet', compact('users'));
    }
    public function TashrifDebitSearch(Request $request){
        $query = $request->get('query');
        $users = User::where('markaz_id', auth()->user()->markaz_id)
                 ->where('role_id', 6)->where('balans','<',0)
                 ->when($query, function($queryBuilder) use ($query) {
                     $queryBuilder->where(function($subQuery) use ($query) {
                         $subQuery->where('name', 'LIKE', "%{$query}%")
                                  ->orWhere('email', 'LIKE', "%{$query}%");
                     });
                 })->paginate(10);

        return view('meneger.students.pagination_data', compact('users'))->render();
    }
    public function allCreate(){
        $MarkazAddres = MarkazAddres::where('markaz_id',auth()->user()->markaz_id)->get();
        $MarkazSmm = MarkazSmm::where('markaz_id',auth()->user()->markaz_id)->get();
        return view('meneger.students.create',compact('MarkazAddres','MarkazSmm'));
    }
    public function allCreateStory(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'phone2' => 'required|string',
            'addres' => 'required|string|max:255',
            'tkun' => ['required', 'date', 'before_or_equal:' . now()->subYears(7)->toDateString(), 'after_or_equal:' . now()->subYears(65)->toDateString()],
            'about' => 'required|string|max:255',
            'smm' => 'required|string|max:255',
            'phone1' => [
                'required',
                'string',
                Rule::unique('users')->where(function ($query) use ($request) {
                    return $query->where('role_id', 6)
                                 ->where('markaz_id', auth()->user()->markaz_id);
                }),
            ],
        ]);
        $User = User::create([
            'markaz_id' => auth()->user()->markaz_id,
            'role_id' => 6,
            'name' => strtoupper($request->name),
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'addres' => $request->addres,
            'tkun' => $request->tkun,
            'about' => $request->about,
            'smm' => $request->smm,
            'status' => 'true',
            'balans' => 0,
            'email' => "S".time(),
            'password' => Hash::make('12345678'),
        ]);
        UserHistory::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $User->id,
            'status' => 'Markazga tashrif',
            'guruh' => '-',
            'summa' => '-',
            'tulov_type' => '-',
            'comment' => '-',
            'xisoblash' => '-',
            'balans' => 0,
            'meneger' => auth()->user()->email,
        ]);
        UserBalans::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $User->id,
            'naqt' => 0,
            'plastik' => 0,
            'payme' => 0,
            'qaytarildi' => 0,
            'chegirma' => 0,
            'jarima' => 0,
        ]);
        $Phone = str_replace($request->phone1," ", "");
        $Url = "https://atko.uz";
        $Text = "Hurmatli ".$request->name." siz ".Markaz::find(auth()->user()->markaz_id)->name." o'quv markaziga tashrifingizdan mamnunmiz. Sizning login: ".$request->email." parol: 12345678 websayt: ".$Url;
        if(MarkazSmsSetting::where('markaz_id',auth()->user()->markaz_id)->first()->new_user == 'true'){
            SendMessage::dispatch(auth()->user()->markaz_id, $Phone, $Text);
        }
        $MarkazHodimStatistka = MarkazHodimStatistka::where('user_id',auth()->user()->id)->first();
        $MarkazHodimStatistka->tashrif = $MarkazHodimStatistka->tashrif + 1;
        $MarkazHodimStatistka->save();
        return redirect()->route('meneger.all_show', $User->id )->with('success', "Yangi tashrif qo'shildi.");
    }
    protected function UserAllGroups($id){
        $UserGuruh = UserGroup::where('user_id',$id)->get();
        $Guruhlar = array();
        foreach ($UserGuruh as $key => $value) {
            $Guruhlar[$key]['about'] = $value;
            $Guruhlar[$key]['guruh'] = Grops::find($value->grops_id)->guruh_name;
        }
        return $Guruhlar;
    }
    public function allShow($id){
        $User = User::find($id);
        $UserBalans = UserBalans::where('user_id',$id)->first();
        $UserHistory = UserHistory::where('user_id',$id)->orderby('id','desc')->get();
        $Guruhlar = Grops::where('markaz_id',auth()->user()->markaz_id)->where('guruh_end','>=',date('Y-m-d'))->get();
        $GropsNew = array();
        foreach ($Guruhlar as $key => $value) {
            $UserGroup = count(UserGroup::where('user_id',$id)->where('grops_id',$value->id)->where('status','true')->get());
            if($UserGroup==0){
                $GropsNew[$key]['id'] = $value->id;
                $GropsNew[$key]['guruh_name'] = $value->guruh_name;
                $GropsNew[$key]['guruh_price'] = MarkazPaymart::find($value->tulov_id)->summa;
            }
        }
        $UserGuruh = $this->UserAllGroups($id);
        return view('meneger.students.show',compact('User','UserBalans','UserHistory','GropsNew','UserGuruh'));
    }
    public function userAddGroup(Request $request){
        $validated = $request->validate([
            'user_id' => 'required',
            'grops_id' => 'required',
            'grops_start_comment' => 'required',
        ]);
        $User = User::find($request->user_id);
        $Guruh = Grops::find($request->grops_id);
        UserGroup::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $request->user_id,
            'grops_id' => $request->grops_id,
            'grops_start_data' => date('Y-m-d'),
            'grops_end_data' => '...',
            'grops_start_comment' => $request->grops_start_comment,
            'grops_start_meneger' => auth()->user()->email,
        ]);
        UserHistory::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $User->id,
            'status' => "Guruhga qo'shildi",
            'guruh' => $Guruh->guruh_name,
            'summa' => number_format(MarkazPaymart::find($Guruh->tulov_id)->summa, 0, '.', ' '),
            'tulov_type' => '-',
            'comment' => $request->grops_start_comment,
            'xisoblash' => number_format($User->balans, 0, '.', ' ')." - ".number_format(MarkazPaymart::find($Guruh->tulov_id)->summa, 0, '.', ' ')." = ".number_format($User->balans - MarkazPaymart::find($Guruh->tulov_id)->summa, 0, '.', ' '),
            'balans' => number_format($User->balans - MarkazPaymart::find($Guruh->tulov_id)->summa, 0, '.', ' '),
            'meneger' => auth()->user()->email,
        ]);
        $User->balans = $User->balans - MarkazPaymart::find($Guruh->tulov_id)->summa;
        $User->save();
        return redirect()->back()->with('success', "Talaba yangi guruhga qo'shildi.");
    }
    public function userDeleteGroup(Request $request){
        $validated = $request->validate([
            'guruh_id' => 'required',
            'user_id' => 'required',
            'jarima' => 'required',
            'grops_end_comment' => 'required',
            'guruh_price' => 'required',
        ]);
        $User = User::find($request->user_id);
        $Guruh = Grops::find($request->guruh_id);
        $UserGroup = UserGroup::where('user_id',$request->user_id)->where('grops_id',$request->guruh_id)->where('status','true')->first();
        $UserGroup->grops_end_data = date("Y-m-d");
        $UserGroup->grops_end_comment = $request->grops_end_comment;
        $UserGroup->grops_end_meneger =auth()->user()->email;
        $UserGroup->jarima = number_format($request->jarima, 0, '.', ' ');
        $UserGroup->status = 'false';
        $UserGroup->save();
        UserHistory::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $User->id,
            'status' => "Guruhdan o'chirildi",
            'guruh' => $Guruh->guruh_name,
            'summa' => number_format($request->guruh_price, 0, '.', ' '),
            'tulov_type' => '-',
            'comment' => $request->grops_end_comment,
            'xisoblash' => number_format($User->balans, 0, '.', ' ')." + ".number_format($request->guruh_price, 0, '.', ' ')." = ".number_format($User->balans + $request->guruh_price, 0, '.', ' '),
            'balans' => number_format($User->balans + $request->guruh_price, 0, '.', ' '),
            'meneger' => auth()->user()->email,
        ]);
        UserHistory::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $User->id,
            'status' => "Jarima",
            'guruh' => $Guruh->guruh_name,
            'summa' => number_format($request->jarima, 0, '.', ' '),
            'tulov_type' => '-',
            'comment' => "Guruhdan o'chirilganlik uchun jarima",
            'xisoblash' => number_format($User->balans + $request->guruh_price, 0, '.', ' ')." - ".number_format($request->jarima, 0, '.', ' ')." = ".number_format($User->balans + $request->guruh_price - $request->jarima, 0, '.', ' '),
            'balans' => number_format($User->balans + $request->guruh_price - $request->jarima, 0, '.', ' '),
            'meneger' => auth()->user()->email,
        ]);
        $User->balans = $User->balans + $request->guruh_price - $request->jarima;
        $User->save();
        return redirect()->back()->with('success', "Talaba yangi guruhga o'chirildi.");
    }
    public function allPasswordUpdate(Request $request){
        $User = User::find($request->user_id);
        $User->password = Hash::make('12345678');
        $User->save();
        UserHistory::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $request->user_id,
            'status' => 'Parol yangilandi',
            'guruh' => '-',
            'summa' => '-',
            'tulov_type' => '-',
            'comment' => '-',
            'xisoblash' => '-',
            'balans' => '-',
            'meneger' => auth()->user()->email,
        ]);
        $Phone = str_replace($User->phone1," ", "");
        $Url = "https://atko.uz";
        $Text = $User->name." Sizning parolingiz yangilandi. Yangi parol 12345678 websayt: ".$Url;
        SendMessage::dispatch(auth()->user()->markaz_id, $Phone, $Text);
        return redirect()->back()->with('success', "Talaba paroli yangilandi.");
    }
    public function studentUpdate(Request $request){
        $validated = $request->validate([
            'id' => 'required',
            'name' => 'required|string',
            'phone1' => ['required','string',],
            'phone2' => 'required|string',
            'addres' => 'required|string|max:255',
            'tkun' => ['required', 'date'],
            'about' => 'required|string|max:255',
        ]);
        $User = User::find($request->id);
        $User->name = $request->name;
        $User->phone1 = $request->phone1;
        $User->phone2 = $request->phone2;
        $User->tkun = $request->tkun;
        $User->about = $request->about;
        $User->save();
        UserHistory::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $request->id,
            'status' => 'Ma`lumotlar yangilandi',
            'guruh' => '-',
            'summa' => '-',
            'tulov_type' => '-',
            'comment' => '-',
            'xisoblash' => '-',
            'balans' => '-',
            'meneger' => auth()->user()->email,
        ]);
        return redirect()->back()->with('success', "Talaba ma`lumotlari yangilandi.");
    }
    public function studentCreatEslatma(Request $request){
        $validated = $request->validate([
            'id' => 'required',
            'comment' => 'required|string',
        ]);
        $User = User::find($request->id);
        UserHistory::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $request->id,
            'status' => 'Eslatma qoldirildi',
            'guruh' => '-',
            'summa' => '-',
            'tulov_type' => '-',
            'comment' => $request->comment,
            'xisoblash' => '-',
            'balans' => '-',
            'meneger' => auth()->user()->email,
        ]);
        UserEslatma::create([
            'markaz_id'=>auth()->user()->markaz_id,
            'user_id'=>$request->id,
            'comment'=>$request->comment,
            'meneger'=>auth()->user()->email,
            'status'=>'true',
        ]);
        return redirect()->back()->with('success', "Eslatma saqlandi.");
    }
    public function darsJadvali(){
        return view('meneger.table.lessen_table');
    }
    
}
