<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Markaz;
use App\Models\Kassa;
use App\Models\MarkazOgohlik;

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

    public function show_setting($id){
        $response = array();
        $response['markaz'] = Markaz::find($id);
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
        return view('admin.index_show_sms',compact('id'));
    }

    public function show_statistik($id){
        return view('admin.index_show_statistik',compact('id'));
    }
}
