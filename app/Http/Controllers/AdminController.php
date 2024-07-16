<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Markaz;
use App\Models\User;
use App\Models\Kassa;
use App\Models\Role;
use App\Models\MarkazSmsPaket;
use App\Models\MarkazOgohlik;
use App\Models\MarkazLessenTime;
use App\Models\MarkazBalans;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller{

    public function index(){
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
            'image' => 'mycrm.png',
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
        $file = $request->file('logotip');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('public/assets/img/logos/', $fileName);
        $Markaz = Markaz::find($request->markaz_id);
        $Markaz->image = $fileName;
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
        return view('admin.index_show_setting',compact('id','response'));
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

    public function show_statistik($id){
        return view('admin.index_show_statistik',compact('id'));
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
}
