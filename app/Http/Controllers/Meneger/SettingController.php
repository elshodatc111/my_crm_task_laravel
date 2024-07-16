<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MarkazRoom;
use App\Models\MarkazPaymart;
use App\Models\Markaz;
use App\Models\MarkazSmsSetting;
use App\Models\MarkazSmsPaket;

class SettingController extends Controller
{
    // Room Setting
    public function rooms(){
        $MarkazRoom = MarkazRoom::where('markaz_id',auth()->user()->markaz_id)->get();
        return view('meneger.setting.rooms',compact('MarkazRoom'));
    }
    public function roomsCreate(Request $request){
        $validate = $request->validate([
            'room_name' => 'required',
        ]);
        $markaz_id = auth()->user()->markaz_id;
        $email =  auth()->user()->email;
        MarkazRoom::create([
            'markaz_id' => $markaz_id,
            'room_name' => $request->room_name,
            'status' => 'true',
            'meneger' => $email,
        ]);
        return redirect()->back()->with('success', 'Yangi xona qo`shildi.');
    }
    public function roomsBlock(Request $request){
        $MarkazRoom = MarkazRoom::where('id',$request->room_id)->first();
        if($MarkazRoom->status=='true'){
            $MarkazRoom->status = 'false';
            $Text = "Xona bloklandi.";
        }else{
            $MarkazRoom->status = 'true';
            $Text = "Xona aktivlashtirildi.";
        }
        $MarkazRoom->save();
        return redirect()->back()->with('success', $Text);
    }
    // Paymart Setting
    public function paymart(){
        $MarkazPaymart = MarkazPaymart::where('markaz_id',auth()->user()->markaz_id)->get();
        return view('meneger.setting.paymart',compact('MarkazPaymart'));
    }
    public function paymartCreate(Request $request){
        $validate = $request->validate([
            'summa' => 'required',
            'chegirma' => 'required',
            'admin_chegirma' => 'required',
            'chegirma_time' => 'required',
        ]);
        MarkazPaymart::create([
            'markaz_id'=>auth()->user()->markaz_id,
            'summa' => intval(preg_replace('/\D/','',$request->summa)),
            'chegirma' => preg_replace('/\D/','',$request->chegirma),
            'admin_chegirma' => preg_replace('/\D/','',$request->admin_chegirma),
            'chegirma_time' => $request->chegirma_time,
            'meneger' => auth()->user()->email,
        ]);
        return redirect()->back()->with('success', 'Yangi to`lov qo`shildi.');
    }
    public function paymartDelete(Request $request){
        $MarkazPaymart = MarkazPaymart::find($request->id)->delete();
        return redirect()->back()->with('success', 'To`lov summasi o`chirildi.');
    }
    // Message Setting
    public function message(){
        $return = array();
        $return['markaz'] = Markaz::find(auth()->user()->markaz_id);
        $return['setting'] = MarkazSmsSetting::where('markaz_id',auth()->user()->markaz_id)->first();
        $return['paket'] = MarkazSmsPaket::where('markaz_id',auth()->user()->markaz_id)->get();
        return view('meneger.setting.message',compact('return'));
    }
    public function messageUpdate(Request $request){
        if($request->new_user){
            $new_user = 'true';
        }else{
            $new_user = 'false';
        }
        if($request->tkun){
            $tkun = 'true';
        }else{
            $tkun = 'false';
        }
        if($request->new_pay){
            $new_pay = 'true';
        }else{
            $new_pay = 'false';
        }
        $MarkazSmsSetting = MarkazSmsSetting::where('markaz_id',auth()->user()->markaz_id)->first();
        $MarkazSmsSetting->new_user = $new_user;
        $MarkazSmsSetting->tkun = $tkun;
        $MarkazSmsSetting->new_pay = $new_pay;
        $MarkazSmsSetting->save();
        return redirect()->back()->with('success', 'To`lov sozlamalari saqlandi.');
    }

}
