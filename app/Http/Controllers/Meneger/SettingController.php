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
use App\Models\MarkazCours;
use App\Models\MarkazCoursVideo;
use App\Models\MarkazSendMessage;
use App\Models\MarkazCoursTest;


class SettingController extends Controller{
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
        $MarkazPaymart = MarkazPaymart::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->get();
        $Markaz = Markaz::find(auth()->user()->markaz_id);
        return view('meneger.setting.paymart',compact('MarkazPaymart','Markaz'));
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
        $MarkazPaymart = MarkazPaymart::find($request->id);
        $MarkazPaymart->status = 'false';
        $MarkazPaymart->save();
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
    public function messageShow(){
        $messege = MarkazSendMessage::where('markaz_id',auth()->user()->markaz_id)->orderby('id','desc')->get();
        //dd($messege);
        return view('meneger.setting.message_show',compact('messege'));
    }
    public function cours(){
        $respons = array();
        $cours = MarkazCours::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->get();
        //dd($cours);
        foreach ($cours as $key => $value) {
            $respons[$key]['id'] = $value->id;
            $respons[$key]['cours_name'] = $value->cours_name;
            $respons[$key]['meneger'] = $value->meneger;
            $respons[$key]['count'] = count(MarkazCoursTest::where('cours_id',$value->id)->get());
        }
        //dd($respons);
        return view('meneger.setting.cours',compact('respons')); 
    }
    public function courscreate(Request $request){
        $validate = $request->validate([
            'cours_name' => 'required',
        ]);
        MarkazCours::create([
            'markaz_id' => auth()->user()->markaz_id,
            'cours_name' => $request->cours_name,
            'meneger' => auth()->user()->email,
            'status' => 'true',
        ]);
        return redirect()->back()->with('success', "Yangi kurs qo'shildi");
    }
    public function coursdelete(Request $request){
        $MarkazCours = MarkazCours::find($request->cours_id);
        $MarkazCours->status = 'false';
        $MarkazCours->save();
        MarkazCoursVideo::where('cours_id',$request->cours_id)->delete();
        MarkazCoursTest::where('cours_id',$request->cours_id)->delete();
        return redirect()->back()->with('success', "Kurs o'chirildi");
    }
    public function coursShow($id){
        $MarkazCoursVideo = MarkazCoursVideo::where('cours_id',$id)->orderby('cours_number','ASC')->get();
        $MarkazCoursTest = MarkazCoursTest::where('cours_id',$id)->get();
        return view('meneger.setting.cours_show',compact('id','MarkazCoursTest','MarkazCoursVideo')); 
    }
    public function courscreatevideo(Request $request){
        $validate = $request->validate([
            'cours_id' => 'required',
            'cours_title' => 'required',
            'cours_url_token' => 'required',
            'cours_number' => 'required',
        ]);
        MarkazCoursVideo::create([
            'markaz_id' => auth()->user()->markaz_id,
            'cours_id' => $request->cours_id,
            'cours_title' => $request->cours_title,
            'cours_url_token' => $request->cours_url_token,
            'cours_number' => $request->cours_number,
            'meneger' => auth()->user()->email,
        ]);
        return redirect()->back()->with('success', "Yangi dars qo'shildi");
    }
    public function courscreatevideodelete(Request $request){
        MarkazCoursVideo::find($request->id)->delete();
        return redirect()->back()->with('success', "Dars o'chirildi.");
    }
    public function courscreatetest(Request $request){
        $validate = $request->validate([
            'cours_id' => 'required',
            'test_savol' => 'required',
            'test_javob_true' => 'required',
            'test_javon_false1' => 'required',
            'test_javon_false2' => 'required',
            'test_javon_false3' => 'required',
        ]);
        MarkazCoursTest::create([
            'markaz_id' => auth()->user()->markaz_id,
            'cours_id' => $request->cours_id,
            'test_savol' => $request->test_savol,
            'test_javob_true' => $request->test_javob_true,
            'test_javon_false1' => $request->test_javon_false1,
            'test_javon_false2' => $request->test_javon_false2,
            'test_javon_false3' => $request->test_javon_false3,
            'meneger' => auth()->user()->email,
        ]);
        return redirect()->back()->with('success', "Yangi test qo'shildi");
    }
    public function courscreatetestdelete(Request $request){
        MarkazCoursTest::find($request->id)->delete();
        return redirect()->back()->with('success', "Test o'chirildi.");
    }



}
