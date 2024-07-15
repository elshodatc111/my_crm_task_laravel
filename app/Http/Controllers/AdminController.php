<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Markaz;
use App\Models\Kassa;
use App\Models\MarkazSmsPaket;
use App\Models\MarkazOgohlik;
use App\Models\MarkazLessenTime;

class AdminController extends Controller{

    public function index(){
        $Markaz = Markaz::get();
        return view('admin.index',compact('Markaz'));
    }


    public function create(){
        $Markaz = Markaz::get();
        return view('admin.create_index');
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
}
