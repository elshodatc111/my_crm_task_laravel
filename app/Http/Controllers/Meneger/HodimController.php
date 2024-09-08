<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Markaz;
use App\Models\User;
use App\Models\Grops;
use App\Models\Role;
use App\Models\Kassa;
use Illuminate\Support\Facades\Log;
use App\Jobs\SendMessage;
use App\Models\MarkazIshHaqi;
use App\Models\MarkazAddres;
use App\Models\UserGroup;
use App\Models\UserPaymart;
use App\Models\Davomat;
use App\Models\MarkazHodimStatistka;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class HodimController extends Controller
{
    public function hodim(){
        $User = User::where('markaz_id',auth()->user()->markaz_id)->whereIn('role_id', [2, 3, 4])->where('id','!=',auth()->user()->id)->get();
        return view('meneger.hodim.hodim',compact('User'));
    }
    public function hodimUnlock(Request $request){
        $User = User::find($request->id);
        if($User->status=='true'){
            $User->status = 'false';
            $User->save();
            if($User->role_id==5){
                return redirect()->back()->with('success', "O'qiuvchi bloklandi.");
            }else{
                return redirect()->back()->with('success', "Hodim bloklandi.");
            }
        }else{
            $User->status = 'true';
            $User->save();
            if($User->role_id==5){
                return redirect()->back()->with('success', "O'qituvchi aktivlashtirildi.");
            }else{
                return redirect()->back()->with('success', "Hodim aktivlashtirildi.");
            }
            
        }
    }
    public function hodimCreate(){
        $MarkazAddres = MarkazAddres::where('markaz_id',auth()->user()->markaz_id)->get();
        return view('meneger.hodim.hodim_create',compact('MarkazAddres'));
    }
    public function hodimCreateStore(Request $request){ 
        $validate = $request->validate([
            'role_id' => 'required',
            'name' => 'required',
            'addres' => 'required',
            'tkun' => ['required', 'date', 'before_or_equal:' . now()->subYears(16)->toDateString(), 'after_or_equal:' . now()->subYears(65)->toDateString()],
            'about' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'email' => ['required','unique:users'],
        ]);
        $User = User::create([
            'markaz_id' => auth()->user()->markaz_id,
            'role_id' => $request->role_id,
            'name' => $request->name,
            'addres' => $request->addres,
            'tkun' => $request->tkun,
            'about' => $request->about,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'email' => $request->email,
            'password' => Hash::make('12345678'),
        ]);
        MarkazHodimStatistka::create([
            'markaz_id'=>auth()->user()->markaz_id,
            'user_id'=>$User->id,
            'naqt'=>0,
            'plastik'=>0,
            'chegirma'=>0,
            'qaytarildi'=>0,
            'tashrif'=>0,
        ]);
        $Markaz_ID = auth()->user()->markaz_id;
        $Phone = str_replace(" ","",$request->phone1);
        $Text = "Hurmatli ".$request->name." siz ".Markaz::find(auth()->user()->markaz_id)->name." o'quv markaziga ishga olindingiz. Sizning login: ".$request->email." parol: 12345678";

        SendMessage::dispatch($Markaz_ID, $Phone, $Text);

        return redirect()->route('meneger.hodim')->with('success', "Yangi hodim qo'shildi.");
    }
    public function hodimUpdateStore(Request $request){
        $validate = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'addres' => 'required',
            'tkun' => 'required',
            'role_id' => 'required',
            'about' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
        ]);
        $User = User::find($request->id);
        $User->name = $request->name;
        $User->addres = $request->addres;
        $User->role_id = $request->role_id;
        $User->about = $request->about;
        $User->phone1 = $request->phone1;
        $User->phone2 = $request->phone2;
        $User->save();
        return redirect()->back()->with('success', "Hodim malumotlari yangilandi.");
    }
    public function hodimShow($id){
        $User = User::find($id);
        $Statistik = MarkazHodimStatistka::where('user_id',$id)->first();
        $MarkazAddres = MarkazAddres::where('markaz_id',auth()->user()->markaz_id)->get();
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        $MarkazIshHaqi = MarkazIshHaqi::where('user_id',$id)->orderby('id','desc')->get();
        return view('meneger.hodim.hodim_show',compact('User','Statistik','MarkazAddres','Kassa','MarkazIshHaqi'));
    }
    public function paymartHodim(Request $request){
        $validate = $request->validate([
            'user_id' => 'required',
            'Naqt' => 'required',
            'Plastik' => 'required',
            'summa' => 'required',
            'type' => 'required',
            'comment' => 'required',
        ]);
        $Naqt = $request->Naqt;
        $Plastik = $request->Plastik;
        $summa = preg_replace('/\D/','',$request->summa);
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        if($request->type == "Naqt"){
            if($Naqt<$summa){
                return redirect()->back()->with('error', "Kassada yetarli mablag' mavjud emas.");
            }
            $Kassa->kassa_naqt_ish_haqi_pedding = $Kassa->kassa_naqt_ish_haqi_pedding - $summa;
        }
        if($request->type == "Plastik"){
            if($Plastik<$summa){
                return redirect()->back()->with('error', "Kassada yetarli mablag' mavjud emas.");
            }
            $Kassa->kassa_plastik_ish_haqi_pedding = $Kassa->kassa_plastik_ish_haqi_pedding - $summa;
        }
        MarkazIshHaqi::create([
            'markaz_id'=>auth()->user()->markaz_id,
            'user_id'=>$request->user_id,
            'summa'=>$summa,
            'typing'=>'Hodim',
            'type'=>$request->type,
            'guruh'=> " ",
            'guruh_name' => " ",
            'comment'=>$request->comment,
            'meneger'=>auth()->user()->email,
        ]);
        $Kassa->save();
        return redirect()->back()->with('success', "Ish haqi to'lovi amalga oshirildi.");
    }
    public function hodimUpdatePassword(Request $request){
        $User = User::find($request->id);
        $User->password = Hash::make('12345678');
        $User->save();
        $Phone = str_replace(" ","",$User->phone1); 
        Log::info("Phone: ".$Phone);
        $Markaz_ID = auth()->user()->markaz_id;
        $password = '12345678';
        $Url = "https://atko.uz";
        $Text = $User->name." Sizning parolingiz yangilandi. Yangi parol ".$password;
        SendMessage::dispatch($Markaz_ID, $Phone, $Text);
        return redirect()->back()->with('success', "Hodim paroli yangilandi.");
    }
    public function hodimStatistikClear(Request $request){
        $MarkazHodimStatistka = MarkazHodimStatistka::where('user_id',$request->id)->first();
        $MarkazHodimStatistka->naqt = 0;
        $MarkazHodimStatistka->plastik = 0;
        $MarkazHodimStatistka->chegirma = 0;
        $MarkazHodimStatistka->qaytarildi = 0;
        $MarkazHodimStatistka->tashrif = 0;
        $MarkazHodimStatistka->save();
        return redirect()->back()->with('success', "Hodim statistikasi tozalandi.");
    }
    public function techer(){
        $User = User::where('markaz_id',auth()->user()->markaz_id)->where('role_id',5)->where('id','!=',auth()->user()->id)->get();
        return view('meneger.hodim.techer',compact('User'));
    }
    public function techerCreate(){
        $MarkazAddres = MarkazAddres::where('markaz_id',auth()->user()->markaz_id)->get();
        return view('meneger.hodim.techer_create',compact('MarkazAddres'));
    }
    public function techerCreateStore(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'addres' => 'required',
            'tkun' => ['required', 'date', 'before_or_equal:' . now()->subYears(16)->toDateString(), 'after_or_equal:' . now()->subYears(65)->toDateString()],
            'about' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'email' => ['required','unique:users'],
        ]);
        User::create([
            'markaz_id' => auth()->user()->markaz_id,
            'role_id' => 5,
            'name' => $request->name,
            'addres' => $request->addres,
            'tkun' => $request->tkun,
            'about' => $request->about,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'email' => $request->email,
            'password' => Hash::make('12345678'),
        ]);
        $Markaz_ID = auth()->user()->markaz_id;
        $Phone = str_replace(" ","",$request->phone1);
        $Text = "Hurmatli ".$request->name." siz ".Markaz::find(auth()->user()->markaz_id)->name." o'quv markaziga o'qituvchi lovozimiga ishga olindingiz. Sizning login: ".$request->email." parol: 12345678";
        
        SendMessage::dispatch($Markaz_ID, $Phone, $Text);
        return redirect()->route('meneger.techer')->with('success', "Yangi o'qituvchi qo'shildi.");
    }
    protected function userBonus($guruh_id,$data){
        $UserGroup = UserGroup::where('grops_id',$guruh_id)->where('status','true')->get();
        $count = 0;
        $array = array();
        foreach ($UserGroup as $key => $value) {
            $UserGroup2 = count(UserGroup::where('grops_start_data',$data)->where('user_id',$value->user_id)->where('status','true')->get());
            if($UserGroup2>1){
                $count = $count + 1;
            }
        }
        return $count;
    }
    protected function userPaymarts($guruh_id){
        $summa = 0;
        $UserPaymart = UserPaymart::where('guruh',$guruh_id)->get();
        foreach($UserPaymart as $item){
            if($item->tulov_type=='Naqt'){
                $summa = $item->summa + $summa;
            }elseif($item->tulov_type=='Plastik'){
                $summa = $item->summa + $summa;
            }elseif($item->tulov_type=='Payme'){
                $summa = $item->summa + $summa;
            }
        }
        return $summa;
    }
    protected function techerHisob($guruh_id){
        $Guruh =  Grops::find($guruh_id);
        $TulovType = Markaz::find(auth::user()->markaz_id)->paymart;
        $JamiTulovlar = $this->userPaymarts($guruh_id);
        $JamiTalabalar = count(UserGroup::where('grops_id',$guruh_id)->where('status','true')->get());
        $JamiBonusTalabalar = $this->userBonus($guruh_id,$Guruh->guruh_start);
        if($TulovType==1){
            return $Guruh->techer_foiz * $JamiTulovlar/100;
        }elseif($TulovType==2){
            return $Guruh->techer_paymart * $JamiTalabalar;
        }elseif($TulovType==3){
            return $Guruh->techer_paymart * $JamiTalabalar + $Guruh->techer_bonus * $JamiBonusTalabalar;
        }else{
            return 0;
        }
    }
    protected function techerPay($guruh_id){
        $Guruh =  Grops::find($guruh_id);
        $MarkazIshHaqi = MarkazIshHaqi::where('guruh',$guruh_id)->get();
        $Tulovlar = 0;
        foreach ($MarkazIshHaqi as $key => $value) {
            $Tulovlar = $Tulovlar + $value->summa;
        }
        return $Tulovlar;
    }
    protected function userDavomat($guruh_id){
        //Davomat
        $array = array();
        $Davomat = Davomat::where('guruh_id',$guruh_id)->get();
        foreach ($Davomat as $key => $value) {
            array_push($array,$value->data);
        }
        $array2 = array_unique($array);
        return count($array2);
    }
    public function techerShow($id){
        $sevenDaysAgo = Carbon::now()->subDays(45)->format('Y-m-d');
        $User = User::find($id);
        $MarkazAddres = MarkazAddres::where('markaz_id',auth()->user()->markaz_id)->get();
        $MarkazIshHaqi = MarkazIshHaqi::where('user_id',$id)->where('created_at','>=',$sevenDaysAgo.' 00:00:00')->orderby('id','desc')->get();
        $TecherGrops = array();
        $Grops = Grops::where('techer_id',$id)->where('guruh_end','>=',$sevenDaysAgo." 00:00:00")->get();
        foreach ($Grops as $key => $value) {
            $TecherGrops[$key]['guruh_id'] = $value->id;
            $TecherGrops[$key]['guruh_name'] = $value->guruh_name;
            if($value->guruh_start>date('Y-m-d')){
                $status = "Yangi";
            }elseif($value->guruh_end<date('Y-m-d')){
                $status = "Yakunlangan";
            }else{
                $status = "Activ";
            }
            $TecherGrops[$key]['guruh_status'] = $status;
            $TecherGrops[$key]['user_groups'] = count(UserGroup::where('grops_id',$value->id)->where('status','true')->get());
            $TecherGrops[$key]['user_bonus'] = $this->userBonus($value->id,$value->guruh_start);
            $TecherGrops[$key]['user_davomat'] = $this->userDavomat($value->id);
            $TecherGrops[$key]['user_paymart'] = $this->userPaymarts($value->id);
            $TecherGrops[$key]['techer_hisob'] = $this->techerHisob($value->id);
            $TecherGrops[$key]['techer_tulandi'] = $this->techerPay($value->id);
            $TecherGrops[$key]['qoldiq'] = $TecherGrops[$key]['techer_hisob']-$TecherGrops[$key]['techer_tulandi'];
        }
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        return view('meneger.hodim.techer_show',compact('User','MarkazAddres','MarkazIshHaqi','TecherGrops','Kassa'));
    }
    public function techerUpdatePassword(Request $request){
        $User = User::find($request->id);
        $User->password = Hash::make('12345678');
        $User->save();
        $Phone = str_replace(" ","",$User->phone1); 
        $Markaz_ID = auth()->user()->markaz_id;
        $password = '12345678';
        Log::info("Phone:".$Phone);
        $Text = $User->name." Sizning parolingiz yangilandi. Yangi parol ".$password;
        SendMessage::dispatch($Markaz_ID, $Phone, $Text);
        return redirect()->back()->with('success', "O'qituvchi paroli yangilandi.");
    }
    public function techerUpdateStore(Request $request){
        $validate = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'addres' => 'required',
            'tkun' => 'required',
            'about' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
        ]);
        $User = User::find($request->id);
        $User->name = $request->name;
        $User->addres = $request->addres;
        $User->about = $request->about;
        $User->phone1 = $request->phone1;
        $User->phone2 = $request->phone2;
        $User->save();
        return redirect()->back()->with('success', "O'qituvchi ma`lumotlari yangilandi.");
    }
    public function paymartTecher(Request $request){
        $validate = $request->validate([
            'user_id' => 'required',
            'Naqt' => 'required',
            'Plastik' => 'required',
            'summa' => 'required',
            'type' => 'required',
            'guruh_id' => 'required',
            'comment' => 'required',
        ]);
        $Techer = User::find($request->user_id);
        $Guruh = Grops::find($request->guruh_id);
        $summa = preg_replace('/\D/','',$request->summa);

        $Naqt = $request->Naqt;
        $Plastik = $request->Plastik;
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        if($request->type == "Naqt"){
            if($Naqt<$summa){
                return redirect()->back()->with('error', "Kassada yetarli mablag' mavjud emas.");
            }
            $Kassa->kassa_naqt_ish_haqi_pedding = $Kassa->kassa_naqt_ish_haqi_pedding - $summa;
        }
        if($request->type == "Plastik"){
            if($Plastik<$summa){
                return redirect()->back()->with('error', "Kassada yetarli mablag' mavjud emas.");
            }
            $Kassa->kassa_plastik_ish_haqi_pedding = $Kassa->kassa_plastik_ish_haqi_pedding - $summa;
        }
        MarkazIshHaqi::create([
            'markaz_id'=>auth()->user()->markaz_id,
            'user_id'=>$request->user_id,
            'summa'=>$summa,
            'typing'=>'Techer',
            'type'=>$request->type,
            'guruh'=> $request->guruh_id,
            'guruh_name' => $Guruh->guruh_name,
            'comment'=>$request->comment,
            'meneger'=>auth()->user()->email,
        ]);
        $Kassa->save();
        return redirect()->back()->with('success', "Ish haqi to'lovi amalga oshirildi.");
    }
}