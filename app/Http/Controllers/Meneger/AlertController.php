<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Form;
use App\Models\Markaz;
use App\Models\UserEslatma;
use Carbon\Carbon;
class AlertController extends Controller{
    public function formShowUser($markaz_id, $smm){
        $Markaz = Markaz::find($markaz_id);
        return view('meneger.alert.formShowUser',compact('Markaz','smm'));
    }
    public function formShowTecher($markaz_id, $smm){
        $Markaz = Markaz::find($markaz_id);
        return view('meneger.alert.formShowTecher',compact('Markaz','smm'));
    }
    public function formPost(Request $request){
        $validate = $request->validate([
            'markaz_id' => 'required',
            'smm' => 'required',
            'type' => 'required',
            'fio' => 'required',
            'ism' => 'required',
            'ota' => 'required',
            'tkun' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'addres' => 'required',
            'about' => 'required',
        ]);
        Form::create([
            'markaz_id'=>$request->markaz_id,
            'type'=>$request->type,
            'smm'=>$request->smm,
            'name'=>$request->fio." ".$request->ism." ".$request->ota,
            'phone1'=>$request->phone1,
            'phone2'=>$request->phone2,
            'addres'=>$request->addres,
            'about'=>$request->about,
        ]);
        return redirect()->back()->with('success', "Siz ro'yhatga olindingiz. Menegerlarimiz siz bilan bog'lanadi.");
    }
    public function eslatma(){
        $UserEslatma = UserEslatma::where('markaz_id',auth()->user()->markaz_id)->get();
        $Eslatma = array();
        foreach ($UserEslatma as $key => $value) {
            $Eslatma[$key]['id'] = $value->id;
            $Eslatma[$key]['user_id'] = $value->user_id;
            $Eslatma[$key]['user_name'] = User::find($value->user_id)->name;
            $Eslatma[$key]['comment'] = $value->comment;
            $Eslatma[$key]['meneger'] = $value->meneger;
            $Eslatma[$key]['created_at'] = $value->created_at;
        }
        return view('meneger.alert.eslatma',compact('Eslatma'));
    }
    public function eslatmaDelete(Request $request){
        UserEslatma::find($request->id)->delete();
        return redirect()->back()->with('success', 'Eslatma o`chirildi.');
    }
    public function tkun(){
        $today = Carbon::today();
        $User = User::where('markaz_id',auth()->user()->markaz_id)->where('role_id',6)->whereRaw("DATE_FORMAT(tkun, '%m-%d') = ?", [$today->format('m-d')])->get();
        return view('meneger.alert.tkun',compact('User'));
    }
    // Murojatlar
    public function murojat(){
        return view('meneger.alert.murojat');
    }

    // Form Meneger
    public function form(){
        $Form = Form::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->get();
        return view('meneger.alert.form',compact('Form'));
    }

    public function formTecher(){
        return view('meneger.alert.form_techer');
    }

    public function formArxiv(){
        $Form = Form::where('markaz_id',auth()->user()->markaz_id)->where('status','!=','true')->get();
        return view('meneger.alert.form_arxiv',compact('Form'));
    }
    public function formLink(){
        return view('meneger.alert.form_url');
    }
    public function formShow($id){
        dd($id);
    }
}
 