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
        return view('admin.index_show_setting',compact('id'));
    }

    public function show_sms($id){
        return view('admin.index_show_sms',compact('id'));
    }

    public function show_statistik($id){
        return view('admin.index_show_statistik',compact('id'));
    }
}
