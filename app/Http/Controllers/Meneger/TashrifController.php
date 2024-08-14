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
use App\Models\UserPaymart;
use App\Models\Grops;
use App\Models\UserGroup;
use App\Models\Kassa;
use Illuminate\Support\Facades\Hash;
use App\Jobs\SendMessage;
use Carbon\Carbon;

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
                                  ->orWhere('phone1', 'LIKE', "%{$query}%");
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
        $Phone = str_replace(" ", "", $User->phone1);
        $Text = "Hurmatli ".$User->name." siz ".Markaz::find(auth()->user()->markaz_id)->name." o'quv markaziga tashrifingizdan mamnunmiz. Sizning login: ".$User->email." parol: 12345678 ";
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
        $Paymart = Markaz::find(auth()->user()->markaz_id)->paymart;
        $UserGuruh = $this->UserAllGroups($id);
        $UserPayGroupOne = UserGroup::where('user_groups.user_id',$id)
            ->where('user_groups.status','true')
            ->join('grops','grops.id','user_groups.grops_id')
            ->get();
        $ChegirmaliGuruh = array();
        $ChegirmaAdmin = array();
        foreach ($UserPayGroupOne as $key => $value) {
            $MarkazPaymart = MarkazPaymart::find($value->tulov_id);
            $BugungiKun = Carbon::now()->format('Y-m-d');
            if($MarkazPaymart->chegirma_time>0 AND $MarkazPaymart->status == 'true' AND $MarkazPaymart->chegirma>0){
                $ChegirmaOxirgiKuni = Carbon::createFromFormat('Y-m-d', $value->guruh_start)->addDays(3)->format('Y-m-d');
                if($ChegirmaOxirgiKuni>=$BugungiKun){
                    $UserPaymart = count(
                        UserPaymart::where('user_id',$id)
                        ->where('tulov_type','Chegirma')
                        ->where('tulov_type','Chegirma')
                        ->where('guruh',$value->grops_id)
                        ->get());
                    if($UserPaymart==0){
                        $ChegirmaliGuruh[$key]['grops_id'] = $value->grops_id;
                        $ChegirmaliGuruh[$key]['guruh_name'] = $value->guruh_name;
                        $ChegirmaliGuruh[$key]['tulovsumma'] = $MarkazPaymart->summa-$MarkazPaymart->chegirma;
                        $ChegirmaliGuruh[$key]['chegirma'] = $MarkazPaymart->chegirma;
                    }
                }
            }
            $UserPaymart2 = count(UserPaymart::where('user_id',$id)->where('tulov_type','Chegirma')->where('tulov_type','Chegirma')->where('guruh',$value->grops_id)->get());
            if($UserPaymart2==0){  
                $ChegirmaAdmin[$key]['grops_id'] = $value->grops_id;
                $ChegirmaAdmin[$key]['guruh_name'] = $value->guruh_name;
                $ChegirmaAdmin[$key]['admin_chegirma'] = $MarkazPaymart->admin_chegirma;
            }
        }
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        $ArxivGuruhlar = array();
        $Arxiv = UserPaymart::where('user_id',$id)->orderby('created_at','desc')->get();
        foreach ($Arxiv as $key => $value) {
            $ArxivGuruhlar[$key]['summa'] = $value->summa;
            $ArxivGuruhlar[$key]['type'] = $value->tulov_type;
            $ArxivGuruhlar[$key]['comment'] = $value->comment;
            $ArxivGuruhlar[$key]['created_at'] = $value->created_at;
            $ArxivGuruhlar[$key]['meneger'] = $value->meneger;
        }  
        return view('meneger.students.show',compact(
            'User',
            'UserBalans',
            'Paymart',
            'UserHistory',
            'GropsNew',
            'UserGuruh',
            'UserPayGroupOne',
            'ChegirmaliGuruh',
            'Kassa',
            'ChegirmaAdmin',
            'ArxivGuruhlar'
        ));
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
        $UserBalans = UserBalans::where('user_id',$request->user_id)->first();
        $UserBalans->jarima = $UserBalans->jarima + preg_replace('/\D/','',$request->jarima);
        $UserBalans->save();
        return redirect()->back()->with('success', "Talaba guruhdan o'chirildi.");
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
        $Phone = str_replace(" ", "",$User->phone1);
        $Text = $User->name." Sizning parolingiz yangilandi. Yangi parol 12345678";
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
    protected function paymarts($user_id, $summa, $tulov_type, $guruh, $comment){
        UserPaymart::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $user_id,
            'summa' => $summa,
            'tulov_type' => $tulov_type,
            'guruh' => $guruh,
            'comment' => $comment,
            'meneger' => auth()->user()->email,
        ]);
    }
    protected function payHistory($User_id,$Status,$Guruh_Name,$Summa,$TulovType,$Comment,$Xisob,$Balans){
        UserHistory::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $User_id,
            'status' => $Status,
            'guruh' => $Guruh_Name,
            'summa' => number_format($Summa, 0, '.', ' '),
            'tulov_type' => $TulovType,
            'comment' => $Comment,
            'xisoblash' => $Xisob,
            'balans' => number_format($Balans, 0, '.', ' '),
            'meneger' => auth()->user()->email,
        ]);
    }
    public function UserPaymarts(Request $request){
        $validated = $request->validate([
            'user_id' => 'required',
            'paymart' => 'required',
            'summaNaqt' => 'required',
            'summaPlastik' => 'required',
            'guruh_id' => 'required',
            'comment' => 'required',
        ]);
        $MarkazHodimStatistka = MarkazHodimStatistka::find(auth()->user()->id);
        $MarkazHodimStatistka->naqt = $MarkazHodimStatistka->naqt + preg_replace('/\D/','',$request->summaNaqt);
        $MarkazHodimStatistka->plastik = $MarkazHodimStatistka->plastik + preg_replace('/\D/','',$request->summaPlastik);
        if($request->guruh_id != 'NULL'){
            $GURUHNAME = Grops::find($request->guruh_id)->guruh_name;
        }else{
            $GURUHNAME = "";
        }
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        $Kassa->kassa_naqt = preg_replace('/\D/','',$Kassa->kassa_naqt) + preg_replace('/\D/','',$request->summaNaqt);
        $Kassa->kassa_plastik = preg_replace('/\D/','',$Kassa->kassa_plastik) + preg_replace('/\D/','',$request->summaPlastik);
        $Kassa->save();
        $User = User::find($request->user_id);
        $UserBalans = UserBalans::where('user_id',$request->user_id)->first();
        if(preg_replace('/\D/','',$request->summaNaqt) != 0){
            $this->paymarts($request->user_id, preg_replace('/\D/','',$request->summaNaqt), 'Naqt', $request->guruh_id, $request->comment);
            $UserBalans->naqt = $UserBalans->naqt + preg_replace('/\D/','',$request->summaNaqt);
            $this->payHistory(
                $request->user_id,
                "To'lov",
                $GURUHNAME ,
                preg_replace('/\D/','',$request->summaNaqt),
                'Naqt',
                $request->comment,
                number_format($User->balans, 0, '.', ' ')." + ".number_format(preg_replace('/\D/','',$request->summaNaqt), 0, '.', ' ')." = ".number_format($User->balans+preg_replace('/\D/','',$request->summaNaqt), 0, '.', ' '),
                $User->balans + preg_replace('/\D/','',$request->summaNaqt)
            );
            $User->balans = $User->balans + preg_replace('/\D/','',$request->summaNaqt);
        }
        if(preg_replace('/\D/','',$request->summaPlastik) != 0){
            $this->paymarts($request->user_id, preg_replace('/\D/','',$request->summaPlastik), 'Plastik', $request->guruh_id, $request->comment);
            $UserBalans->plastik = $UserBalans->plastik + preg_replace('/\D/','',$request->summaPlastik);
            $this->payHistory(
                $request->user_id,
                "To'lov",
                $GURUHNAME,
                preg_replace('/\D/','',$request->summaPlastik),
                'Plastik',
                $request->comment,
                number_format($User->balans, 0, '.', ' ')." + ".number_format(preg_replace('/\D/','',$request->summaPlastik), 0, '.', ' ')." = ".number_format($User->balans+preg_replace('/\D/','',$request->summaPlastik), 0, '.', ' '),
                $User->balans + preg_replace('/\D/','',$request->summaPlastik)
            );
            $User->balans = $User->balans + preg_replace('/\D/','',$request->summaPlastik);
        }
        if($request->paymart==3 AND $request->guruh_id != 'NULL'){
            $Grops = Grops::find($request->guruh_id)->tulov_id;
            $MarkazPaymart = MarkazPaymart::find($Grops);
            $Tulov = intval($MarkazPaymart->summa - $MarkazPaymart->chegirma);
            $Chegirma = $MarkazPaymart->chegirma;
            $AllTul = intval(preg_replace('/\D/','',$request->summaNaqt) + preg_replace('/\D/','',$request->summaPlastik));
            if($AllTul == $Tulov){
                $this->paymarts($request->user_id, $Chegirma, 'Chegirma', $request->guruh_id, $request->comment);
                $UserBalans->chegirma = $UserBalans->chegirma + preg_replace('/\D/','',$MarkazPaymart->chegirma);
                $this->payHistory(
                    $request->user_id,
                    "Chegirma",
                    $GURUHNAME,
                    preg_replace('/\D/','',$Chegirma),
                    'Chegirma',
                    $request->comment,
                    number_format($User->balans, 0, '.', ' ')." + ".number_format(preg_replace('/\D/','',$Chegirma), 0, '.', ' ')." = ".number_format($User->balans+preg_replace('/\D/','',$Chegirma), 0, '.', ' '),
                    $User->balans + preg_replace('/\D/','',$Chegirma)
                );
                $User->balans = $User->balans + preg_replace('/\D/','',$Chegirma);
                $MarkazHodimStatistka->chegirma = $MarkazHodimStatistka->chegirma + preg_replace('/\D/','',$Chegirma);
            }
        }
        $User->save();
        $UserBalans->save();
        $MarkazHodimStatistka->save();
        $tulovlar = preg_replace('/\D/','',$request->summaNaqt)+preg_replace('/\D/','',$request->summaPlastik);
        $Phone = str_replace(" ", "", $User->phone1);
        $Text = strval("Hurmatli ".$User->name." siz ".Markaz::find(auth()->user()->markaz_id)->name." o'quv markazi kurslari uchun ".$tulovlar." so'm to'lov qabul qilindi.");
        if(MarkazSmsSetting::where('markaz_id',auth()->user()->markaz_id)->first()->new_pay == 'true'){
            SendMessage::dispatch(auth()->user()->markaz_id, $Phone, $Text);
        }
        return redirect()->back()->with('success', "To'lov qabul qilindi.");
    }
    protected function QaytarHistory($User_id,$Summa,$TulovType,$Comment,$Xisob,$Balans){
        UserHistory::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $User_id,
            'status' => 'Qaytarildi',
            'guruh' => '',
            'summa' => preg_replace('/\D/','',$Summa),
            'tulov_type' => $TulovType,
            'comment' => $Comment,
            'xisoblash' => $Xisob,
            'balans' => number_format($Balans, 0, '.', ' '),
            'meneger' => auth()->user()->email,
        ]);
    }
    public function UserRepertPaymarts(Request $request){
        $validated = $request->validate([
            'user_id' => 'required',
            'paymart' => 'required',
            'kassa_naqt' => 'required',
            'kassa_plastik' => 'required',
            'summa' => 'required',
            'type' => 'required',
            'comment' => 'required',
        ]);
        $QAYTARILADI = preg_replace('/\D/','',$request->summa);
        $TULOVTYPE = $request->type;
        if($TULOVTYPE=='Naqt' AND $QAYTARILADI>$request->kassa_naqt){
            return redirect()->back()->with('success', "Kassada mablag' yetarli emas.");
        }
        if($TULOVTYPE=='Plastik' AND $QAYTARILADI>$request->kassa_plastik){
            return redirect()->back()->with('success', "Kassada mablag' yetarli emas.");
        }
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        $MarkazHodimStatistka = MarkazHodimStatistka::find(auth()->user()->id);
        $MarkazHodimStatistka->qaytarildi = $MarkazHodimStatistka->qaytarildi + preg_replace('/\D/','',$request->summa);
        if($TULOVTYPE=='Naqt'){
            $Kassa->kassa_naqt = $Kassa->kassa_naqt - preg_replace('/\D/','',$request->summa);
        }else{
            $Kassa->kassa_plastik = $Kassa->kassa_plastik - preg_replace('/\D/','',$request->summa);
        }
        $MarkazHodimStatistka->save();
        $Kassa->save();
        $this->paymarts($request->user_id, preg_replace('/\D/','',$request->summa), 'Qaytarildi'," ", $request->comment);
        $User = User::find($request->user_id);
        $Balans = $User->balans-preg_replace('/\D/','',$request->summa);
        $Xisob = $User->balans." - ".preg_replace('/\D/','',$request->summa)." = ".$Balans;
        $this->QaytarHistory($request->user_id,$request->summa,$request->type,$request->comment,$Xisob,$Balans);
        $User->balans = $User->balans - preg_replace('/\D/','',$request->summa);
        $User->save();
        $UserBalans = UserBalans::where('user_id',$request->user_id)->first();
        $UserBalans->qaytarildi = $UserBalans->qaytarildi + preg_replace('/\D/','',$request->summa);
        $UserBalans->save();
        return redirect()->back()->with('success', "To'lov qaytarildi.");
    }
    public function UserChegirmaPaymarts(Request $request){
        $validated = $request->validate([
            'user_id' => 'required',
            'paymart' => 'required',
            'summa' => 'required',
            'guruh_id' => 'required',
            'comment' => 'required',
        ]);
        if($request->guruh_id != 'NULL'){
            $GURUHNAME = Grops::find($request->guruh_id)->guruh_name;
        }else{
            $GURUHNAME = "";
        }
        $User = User::find($request->user_id);
        $UserBalans = UserBalans::where('user_id',$request->user_id)->first();
        $this->paymarts($request->user_id, preg_replace('/\D/','',$request->summa), 'Chegirma', $request->guruh_id, $request->comment);
        $UserBalans->chegirma = $UserBalans->chegirma + preg_replace('/\D/','',$request->summa);
        $this->payHistory(
            $request->user_id,
            "Chegirma",
            $GURUHNAME ,
            preg_replace('/\D/','',$request->summa),
            ' ',
            $request->comment,
            number_format($User->balans, 0, '.', ' ')." + ".number_format(preg_replace('/\D/','',$request->summa), 0, '.', ' ')." = ".number_format($User->balans+preg_replace('/\D/','',$request->summa), 0, '.', ' '),
            $User->balans + preg_replace('/\D/','',$request->summa)
        );
        $User->balans = $User->balans + preg_replace('/\D/','',$request->summa);
        $MarkazHodimStatistka = MarkazHodimStatistka::find(auth()->user()->id);
        $MarkazHodimStatistka->chegirma = $MarkazHodimStatistka->chegirma + preg_replace('/\D/','',$request->summa);
        $User->save();
        $UserBalans->save();
        $MarkazHodimStatistka->save();
        return redirect()->back()->with('success', "Talabaga chegirma berildi.");
    }

    
}
