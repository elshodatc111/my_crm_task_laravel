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
use App\Models\UserEslatma;
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
            'name' => $request->name,
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
    public function allShow($id){
        $User = User::find($id);
        $UserBalans = UserBalans::where('user_id',$id)->first();
        $UserHistory = UserHistory::where('user_id',$id)->orderby('id','desc')->get();
        return view('meneger.students.show',compact('User','UserBalans','UserHistory'));
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
    
}
