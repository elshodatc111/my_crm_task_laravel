<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Markaz;
use App\Models\User;
use App\Models\Kassa;
use App\Models\DamOlish;
use App\Models\Role;
use App\Models\UserGroup;
use App\Models\UserPaymart;
use App\Models\MarkazSmsPaket;
use App\Models\MarkazOgohlik;
use App\Models\MarkazLessenTime;
use App\Models\MarkazBalans;
use App\Models\MarkazSmsSetting;
use App\Models\File;
use App\Models\MarkazHodimStatistka;
use Illuminate\Support\Facades\Hash;
use App\Models\Grops;
use DateTime;
use App\Models\MarkazAddres;
use App\Models\MarkazSmm;
use App\Jobs\SendMessage;




class AdminController extends Controller{
    public function index(){
        if(auth()->user()->role->name=='Admin'){
            return redirect()->route('meneger.home');
        }elseif(auth()->user()->role->name=='MenegerAdmin'){
            return redirect()->route('meneger.home');
        }elseif(auth()->user()->role->name=='Meneger'){
            return redirect()->route('meneger.home');
        }elseif(auth()->user()->role->name=='Techer'){
            return redirect()->route('techer.index');
        }elseif(auth()->user()->role->name=='User'){
            return redirect()->route('user.index');
        }
        $Markaz = Markaz::get();
        return view('admin.index',compact('Markaz'));
    }
    public function create(){
        $Markaz = Markaz::get();
        return view('admin.create_index');
    }
    public function create_story(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'drektor' => 'required',
            'phone' => 'required',
            'addres' => 'required',
            'payme_id' => 'required',
            'lessen_time' => 'required',
            'paymart' => 'required',
        ]);
        $Markaz = Markaz::create([
            'name' => $request->name,
            'drektor' => $request->drektor,
            'phone' => $request->phone,
            'addres' => $request->addres,
            'payme_id' => $request->payme_id,
            'lessen_time' => $request->lessen_time,
            'image' => 'mycrm.jpg',
            'paymart' => $request->paymart,
        ]);
        Kassa::create([
            'markaz_id' => $Markaz->id,
            'kassa_naqt' => 0,
            'kassa_naqt_chiqim_pedding' => 0,
            'kassa_naqt_xarajat_pedding' => 0,
            'kassa_naqt_ish_haqi_pedding' => 0,
            'kassa_plastik' => 0,
            'kassa_plastik_chiqim_pedding' => 0,
            'kassa_plastik_xarajat_pedding' => 0,
            'kassa_plastik_ish_haqi_pedding' => 0,
        ]);
        MarkazBalans::create([
            'markaz_id' => $Markaz->id,
            'balans_naqt' => 0,
            'balans_naqt_chiqim' => 0,
            'kassa_naqt_xarajat' => 0,
            'balans_plastik' => 0,
            'balans_plastik_chiqim' => 0,
            'kassa_plastik_xarajat' => 0,
            'balans_payme' => 0,
            'balans_payme_chiqim' => 0,
        ]);
        MarkazSmsSetting::create([
            'markaz_id' => $Markaz->id,
        ]);
        return redirect()->route('admin.index')->with('success', 'Yangi o`quv markaz yaratildi.');
    }
    public function show($id){
        $response = array();
        $response['markaz'] = Markaz::find($id);
        $response['markazOgoh'] = MarkazOgohlik::where('markaz_id',$id)->get();
        return view('admin.index_show',compact('id','response'));
    }
    // Logotipni yangilash   php artisan storage:link  fayl papkasini pablikga joylashtirish
    public function updatelogo(Request $request){     
        $request->validate([
            'logotip' => 'required|mimes:jpg,png',
        ]);
        $Markaz = Markaz::find($request->markaz_id);
        $imageName = time().'.'.$request->logotip->extension();
        $request->logotip->move(public_path('images'), $imageName);
        $Markaz->image = 'images/'.$imageName;
        $Markaz->save();



        return redirect()->back()->with('success', 'Logo yangilandi.');
    } 
    // Ogohlantirish
    public function postogoh(Request $request){
        $validated = $request->validate([
            'markaz_id' => 'required',
            'data' => 'required',
            'description' => 'required',
        ]);
        MarkazOgohlik::create([
            'markaz_id' => $request['markaz_id'],
            'data' => $request['data'],
            'description' => $request['description'],
            'meneger' => Auth::user()->email,
            'status' => 'true',
        ]);
        return redirect()->back()->with('success', 'Yangi ogohlanitish yaratildi.');
    }
    public function postogohdelete($id){
        $MarkazOgohlik = MarkazOgohlik::find($id);
        $MarkazOgohlik->status = 'false';
        $MarkazOgohlik->save();
        return redirect()->back()->with('success', 'Ogohlantirish bekor qilindi.');
    }
    public function generator(Request $request){
        $count = count(MarkazLessenTime::where('markaz_id',$request->id)->get());
        if($count==0){
            $lessen_time = Markaz::find($request->id)->lessen_time;
            $start_time = Carbon::createFromTime(8, 0);
            $end_time = Carbon::createFromTime(20, 0);
            $interval = $lessen_time; 
            $times = [];
            $current_time = $start_time->copy();
            while ($current_time->lessThanOrEqualTo($end_time)) {
                $times[] = $current_time->format('H:i');
                $current_time->addMinutes($interval);
            }
            foreach($times as $item){
                MarkazLessenTime::create([
                    'markaz_id' => $request->id,
                    'time' => $item,
                ]);
            }
            return redirect()->back()->with('success', 'Dars vaqtlari generatsiya qilindi.');
        }else{
            return redirect()->back()->with('success', 'Dars vaqtlari generatsiya qilingan.');
        }
    }
    public function show_setting($id){
        $response = array();
        $response['markaz'] = Markaz::find($id);
        $response['generatsiya'] = MarkazLessenTime::where('markaz_id',$id)->get();
        $response['kassa'] = Kassa::where('markaz_id',$id)->first();
        $response['balans'] = MarkazBalans::where('markaz_id',$id)->first();
        $MarkazAddres = MarkazAddres::where('markaz_id',$id)->get();
        $MarkazSmm = MarkazSmm::where('markaz_id',$id)->get();
        $User = User::where('markaz_id',$id)->where('role_id', 2)->get();
        return view('admin.index_show_setting',compact('id','response','MarkazSmm','MarkazAddres','User'));
    }
    public function show_update(Request $request, $id){
        $validate = $request->validate([
            'name' => 'required',
            'drektor' => 'required',
            'phone' => 'required',
            'addres' => 'required',
            'payme_id' => 'required',
            'lessen_time' => 'required',
            'paymart' => 'required',
        ]);
        $Markaz = Markaz::find($id);
        $Markaz->name = $request->name;
        $Markaz->drektor = $request->drektor;
        $Markaz->phone = $request->phone;
        $Markaz->addres = $request->addres;
        $Markaz->payme_id = $request->payme_id;
        $Markaz->lessen_time = $request->lessen_time;
        $Markaz->paymart = $request->paymart;
        $Markaz->save(); 
        return redirect()->back()->with('success', 'Markaz malumotlari yangilandi.');
    }
    public function createDrektor(Request $request){
        $validate = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $User = User::create([
            'markaz_id' => $request->id,
            'role_id' => 2,
            'name' => $request->name,
            'addres' => "Kiritilmagan",
            'tkun' => "2000-01-01",
            'about' => "Drektor",
            'phone1' => "",
            'phone2' => "",
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        MarkazHodimStatistka::create([
            'markaz_id'=>$request->id,
            'user_id'=>$User->id,
            'naqt'=>0,
            'plastik'=>0,
            'chegirma'=>0,
            'qaytarildi'=>0,
            'tashrif'=>0,
        ]);
        $Markaz_ID = $request->id;
        $Phone = str_replace(" ","",$request->phone1);
        $Url = "https://atko.uz";
        $Text = "Hurmatli ".$request->name." siz ".Markaz::find($request->id)->name." o'quv markaziga ishga olindingiz. Sizning login: ".$request->email." parol: ".$request->password." websayt: ".$Url;

        SendMessage::dispatch($Markaz_ID, $Phone, $Text);
        
        return redirect()->back()->with('success', 'Yangi drektor qo`shildi.');
    }
    public function show_update_lock(Request $request){
        $Markaz = Markaz::find($request->id);
        $Markaz->status = 'false';
        $Markaz->save(); 
        return redirect()->back()->with('success', 'Markaz bloklandi.');
    }
    public function show_update_lock_block(Request $request){
        $Markaz = Markaz::find($request->id);
        $Markaz->status = 'true';
        $Markaz->save(); 
        return redirect()->back()->with('success', 'Markaz aktivlashtirildi.');
    }
    public function kassaUpdate(Request $request){
        $validated = $request->validate([
            'kassa_naqt' => 'required',
            'kassa_naqt_chiqim_pedding' => 'required',
            'kassa_naqt_xarajat_pedding' => 'required',
            'kassa_naqt_ish_haqi_pedding' => 'required',
            'kassa_plastik' => 'required',
            'kassa_plastik_chiqim_pedding' => 'required',
            'kassa_plastik_xarajat_pedding' => 'required',
            'kassa_plastik_ish_haqi_pedding' => 'required',
        ]);
        $Kassa = Kassa::where('markaz_id',$request->id)->first();
        $Kassa->kassa_naqt = $request->kassa_naqt;
        $Kassa->kassa_naqt_chiqim_pedding = $request->kassa_naqt_chiqim_pedding;
        $Kassa->kassa_naqt_xarajat_pedding = $request->kassa_naqt_xarajat_pedding;
        $Kassa->kassa_naqt_ish_haqi_pedding = $request->kassa_naqt_ish_haqi_pedding;
        $Kassa->kassa_plastik = $request->kassa_plastik;
        $Kassa->kassa_plastik_chiqim_pedding = $request->kassa_plastik_chiqim_pedding;
        $Kassa->kassa_plastik_xarajat_pedding = $request->kassa_plastik_xarajat_pedding;
        $Kassa->kassa_plastik_ish_haqi_pedding = $request->kassa_plastik_ish_haqi_pedding;
        $Kassa->save(); 
        return redirect()->back()->with('success', 'Kassa malumotlari yangilandi.');
    }
    public function balansUpdate(Request $request){
        $validated = $request->validate([
            'balans_naqt' => 'required',
            'balans_naqt_chiqim' => 'required',
            'kassa_naqt_xarajat' => 'required',
            'balans_plastik' => 'required',
            'balans_plastik_chiqim' => 'required',
            'kassa_plastik_xarajat' => 'required',
            'balans_payme' => 'required',
            'balans_payme_chiqim' => 'required',
        ]);
        $MarkazBalans = MarkazBalans::where('markaz_id',$request->id)->first();
        $MarkazBalans->balans_naqt = $request->balans_naqt;
        $MarkazBalans->balans_naqt_chiqim = $request->balans_naqt_chiqim;
        $MarkazBalans->kassa_naqt_xarajat = $request->kassa_naqt_xarajat;
        $MarkazBalans->balans_plastik = $request->balans_plastik;
        $MarkazBalans->balans_plastik_chiqim = $request->balans_plastik_chiqim;
        $MarkazBalans->kassa_plastik_xarajat = $request->kassa_plastik_xarajat;
        $MarkazBalans->balans_payme = $request->balans_payme;
        $MarkazBalans->balans_payme_chiqim = $request->balans_payme_chiqim;
        $MarkazBalans->save(); 
        return redirect()->back()->with('success', 'Balans malumotlari yangilandi.');
    }

    public function show_sms($id){
        $response = array();
        $response['markaz'] = Markaz::find($id);
        $response['SmsPaket'] = MarkazSmsPaket::where('markaz_id',$id)->get();
        return view('admin.index_show_sms',compact('id','response'));
    }
    public function addSmsPaket(Request $request){
        $validate = $request->validate([
            'markaz_id' => 'required',
            'paket_soni' => 'required',
            'description' => 'required',
            'tulov' => 'required',
        ]);
        $Markaz = Markaz::find($request->markaz_id);
        $Markaz->mavjud_sms = $Markaz->mavjud_sms + $request->paket_soni;
        $Markaz->save();
        MarkazSmsPaket::create([
            'markaz_id' => $request->markaz_id,
            'paket_soni' => $request->paket_soni,
            'description' => $request->description,
            'tulov' => $request->tulov,
            'meneger' => Auth::user()->email
        ]);
        return redirect()->back()->with('success', 'Yangi sms paketi saqlandi.');
    }
    // Administrator
    public function adminPerson(){
        $User = User::where('role_id',1)->get();
        return view('admin.admin',compact('User'));
    }
    public function adminPersonBlok(Request $request){
        $User = User::find($request->id);
        $User->status='false';
        $User->save();
        return redirect()->back()->with('success', 'Administrator bloklandi.');
    }
    public function adminPersonOpen(Request $request){
        $User = User::find($request->id);
        $User->status='true';
        $User->save();
        return redirect()->back()->with('success', 'Administrator aktivlashtirildi.');
    }
    public function adminPersonCreate(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'phone1' => 'required',
            'addres' => 'required',
            'email' => ['required', 'string', 'max:255', 'unique:users'],
        ]);
        User::create([
            'markaz_id' => 1,
            'role_id' => 1,
            'name' => $request->name,
            'phone1' => $request->phone1,
            'addres' => $request->addres,
            'email' => $request->email,
            'phone2' => '',
            'tkun' => '',
            'about' => '',
            'smm' => '',
            'status' => 'true',
            'balans' => 0,
            'password' => Hash::make('12345678'),
        ]);
        return redirect()->back()->with('success', 'Yangi administrator qo`shildi.');
    }
    //Profel
    public function adminProfel(){
        return view('admin.profel');
    }
    public function adminProfelUpdate(Request $request){
        $validate = $request->validate([
            'password' => 'required|min:8',
        ]);
        $User = User::find(auth()->user()->id);
        $User->password = Hash::make($request->password);
        $User->save();
        return redirect()->back()->with('success', 'Parol yangilandi.');
    }
    // Dam olish kunlari
    public function datadays(){
        $DamOlish = DamOlish::orderby('data','asc')->get();
        return view('admin.datadays',compact('DamOlish'));
    }
    public function datadaysCreate(Request $request){
        $validate = $request->validate([
            'data' => ['required','unique:dam_olishes'],
            'description' => 'required',
        ]);
        $Now = date("Y-m-d");
        if($Now>=$request->data){
            return redirect()->back()->with('success', 'Bayram kuni eskirgan.');
        }
        $DamOlish = DamOlish::create([
            'data'=>$request->data,
            'description'=>$request->description,
        ]);
        return redirect()->back()->with('success', 'Yangi bayram kuni qo`shildi.');
    }
    public function datadaysDelete(Request $request){
        $DamOlish = DamOlish::find($request->id)->delete();
        return redirect()->back()->with('success', 'Bayram kuni o`chirildi.');
    }
    public function datadaysYearsCreate(Request $request){
        $now = date("Y-m-d");
        $start = new DateTime($request->years.'-01-01');
        $end = new DateTime($request->years.'-12-31');
        $sundays = [];
        while ($start <= $end) {
            if ($start->format('N') == 7) {
                $sundays[] = $start->format('Y-m-d');
            }
            $start->modify('+1 day');
        }
        $i=0;
        foreach($sundays as $item){
            if($item>=$now){
                $DamOlish = count(DamOlish::where('data',$item)->get());
                if($DamOlish<1){
                    $i++;
                    DamOlish::create([
                        'data'=>$item,
                        'description'=>"Yakshanba Dam olish kuni"
                    ]);
                }
            }
        }
        return redirect()->back()->with('success', $i.' ta bayram kuni qo`shildi.');
    }
    public function datadaysYearsDelete(){
        $now = date("Y-m-d");
        $k = 0;
        $array = DamOlish::where('data','<',$now)->get();
        foreach ($array as $value) {
            $value->delete();
            $k++;
        }
        return redirect()->back()->with('success', $k.' ta bayram kuni o`childi.');
    }
    // Manzil sozlamalari
    public function manzilCreate(Request $request){
        $validate = $request->validate([
            'markaz_id' => ['required'],
            'addres' => 'required',
        ]);
        MarkazAddres::create([
            'markaz_id' => $request->markaz_id,
            'addres' => $request->addres,
        ]);
        return redirect()->back()->with('success', 'Yangi manzil qo`shildi.');
    }
    public function manzilDelete(Request $request){
        MarkazAddres::find($request->id)->delete();
        return redirect()->back()->with('success', 'Manzil o`chirildi.');
    }
    // SMM sozlamalari
    public function smmCreate(Request $request){
        $validate = $request->validate([
            'markaz_id' => ['required'],
            'smm' => 'required',
        ]);
        MarkazSmm::create([
            'markaz_id' => $request->markaz_id,
            'smm' => $request->smm,
        ]);
        return redirect()->back()->with('success', 'Yangi smm qo`shildi.');
    }
    public function smmDelete(Request $request){
        MarkazSmm::find($request->id)->delete();
        return redirect()->back()->with('success', 'SMM o`chirildi.');
    }
    //Aktiv talabalar
    protected function Months(){
        $months = collect();
        for ($i = 0; $i < 12; $i++) {
            $date = Carbon::now()->subMonths($i);
            $months->push([
                'Y-m' => $date->format('Y-m'),
                'M-Y' => $date->format('M-Y'),
            ]);
        }
        $months = $months->reverse()->values();
        return $months;
    }
    public function show_statistik($id){

        $Months = $this->Months();
        $Markaz = array();

        foreach (Markaz::get() as $keyw => $items) {
            $Active = array();
            foreach ($Months as $key => $value) {
                $Start = $value['Y-m']."-01";
                $End = $value['Y-m']."-31";
                $Grops = Grops::where('guruh_end','>=',$Start)->where('guruh_start','<=',$End)->get();
                $Users = array();
                foreach ($Grops as $key2 => $value2) {
                    foreach (UserGroup::where('grops_id',$value2->id)->where('markaz_id',$items->id)->where('status','true')->get() as $key3 => $value3) {
                        array_push($Users,$value3['user_id']);
                    }
                }
                $user3 = array_unique($Users);
                $Active[$key]['user'] = count($user3);
                $Active[$key]['markaz'] = $items->name;
            }
            $Markaz[$keyw] = $Active;
        }
        //dd($Markaz);
        return view('admin.index_show_statistik',compact('id','Markaz','Months'));
    }
    // Upload Users
    public function uploadUsers(){
        $File = File::orderby('id','desc')->get();
        $flies =array();
        foreach ($File as $key => $value) {
            $flies[$key]['id'] = $value->id;
            $flies[$key]['markaz'] = Markaz::find($value->markaz_id)->name;
            $flies[$key]['file_name'] = $value->file_name;
            $flies[$key]['count'] = $value->count;
            $flies[$key]['succes'] = $value->succes;
            $flies[$key]['error'] = $value->error;
            $flies[$key]['status'] = $value->status;
            $flies[$key]['meneger'] = $value->meneger;
            $flies[$key]['created_at'] = $value->created_at;
        }
        return view('admin.upload_user',compact('flies'));
    }
    public function uploadUsersPost(Request $request){
        $request->validate([
            'markaz_id' => 'required',
            'file' => 'required|mimes:xlsx|max:1024',
        ]);
        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('file'), $fileName);
        File::create([
            'markaz_id' => $request->markaz_id,
            'file_name' => $fileName,
            'count' => 0,
            'succes' => 0,
            'error' => 0,
            'status' => "false",
            'meneger' => auth()->user()->email,
        ]);
        return back()->with('success', 'Excel fayl yuklandi.');
    }
    public function uploadPlayPost(Request $request){
        dd($request);


    }



}
