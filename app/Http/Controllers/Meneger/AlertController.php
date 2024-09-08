<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Form;
use Illuminate\Support\Facades\Hash;
use App\Models\Markaz;
use App\Models\UserEslatma;
use App\Models\UserHistory;
use App\Models\UserBalans;
use App\Models\UserGroup;
use App\Models\UserPaymart;
use App\Models\MarkazHodimStatistka;
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
            'tkun'=>$request->tkun,
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
        $oylik = array();
        $yillik = array();
        $theretyDaysAgo = Carbon::now()->subDays(30)->format('Y-m-d');
        $oylik['all'] = count(Form::where('created_at','>=',$theretyDaysAgo." 00:00:00")->where('type','User')->get());
        $oylik['register'] = count(Form::where('created_at','>=',$theretyDaysAgo." 00:00:00")->where('type','User')->where('status','Register')->get());
        $oyRegister = 0;
        $oyGuruh = 0;
        $oyTulov = 0;
        foreach (Form::where('created_at','>=',$theretyDaysAgo." 00:00:00")->where('type','User')->where('status','Register')->get() as $key => $value) {
            $Userss = User::find($value->user_id);
            if($Userss){
                $oyRegister = $oyRegister + 1;
                if(UserGroup::where('user_id',$Userss->id)->where('status','true')->first()){
                    $oyGuruh = $oyGuruh + 1;
                }
                if(UserPaymart::where('user_id',$Userss->id)->first()){
                    $oyTulov = $oyTulov + 1;
                }
            }
        }
        $oylik['register'] = $oyRegister;
        $oylik['guruh'] = $oyGuruh;
        $oylik['tulov'] = $oyTulov;

        $oneYearDaysAgo = Carbon::now()->subDays(365)->format('Y-m-d');
        $yillik['all'] = count(Form::where('created_at','>=',$oneYearDaysAgo." 00:00:00")->where('type','User')->get());
        $yilRegister = 0;
        $yilGuruh = 0;
        $yilTulov = 0;
        foreach (Form::where('created_at','>=',$oneYearDaysAgo." 00:00:00")->where('type','User')->where('status','Register')->get() as $key => $value) {
            $UserssW = User::find($value->user_id);
            if($UserssW){
                $yilRegister = $yilRegister + 1;
                if(UserGroup::where('user_id',$UserssW->id)->where('status','true')->first()){
                    $yilGuruh = $yilGuruh + 1;
                }
                if(UserPaymart::where('user_id',$UserssW->id)->first()){
                    $yilTulov = $yilTulov + 1;
                }
            }
        }
        $yillik['register'] = $yilRegister;
        $yillik['guruh'] = $yilGuruh;
        $yillik['tulov'] = $yilTulov;
        //dd($FormOne);
        return view('meneger.alert.form_techer',compact('oylik','yillik'));
    }

    public function formArxiv(){
        $Form = Form::where('markaz_id',auth()->user()->markaz_id)->where('status','!=','true')->get();
        return view('meneger.alert.form_arxiv',compact('Form'));
    }
    public function formLink(){
        return view('meneger.alert.form_url');
    }
    public function formShow($id){
        $Form = Form::find($id);
        if($Form->type=='User'){
            $role_id = 6;
        }else{
            $role_id = 5;
        }
        $User = User::where('phone1',$Form->phone1)->where('markaz_id',auth()->user()->markaz_id)->where('role_id',$role_id)->first();
        return view('meneger.alert.form_show',compact('Form','User'));
    }
    public function formMurojatShow(Request $request){
        $Form = Form::find($request->form_id);
        if($request->Status=='arxiv'){
            $Form->status = "Arxiv";
            $Form->meneger = auth()->user()->email;
            $Form->save();
            return redirect()->route('form')->with('success', "Murohat arxivga saqlandi.");
        }
        if($request->Status == 'register'){
            $User = User::create([
                'markaz_id' => auth()->user()->markaz_id,
                'role_id' => 6,
                'name' => strtoupper($Form->name),
                'phone1' => $Form->phone1,
                'phone2' => $Form->phone2,
                'addres' => $Form->addres,
                'tkun' => $Form->tkun,
                'about' => "Form orqali tashrif",
                'smm' => $Form->smm,
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
                'comment' => 'Form orqali murojat',
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
            $MarkazHodimStatistka = MarkazHodimStatistka::where('user_id',auth()->user()->id)->first();
            $MarkazHodimStatistka->tashrif = $MarkazHodimStatistka->tashrif + 1;
            $MarkazHodimStatistka->save();
            $Form->status = "Register";
            $Form->user_id = $User->id;
            $Form->meneger = auth()->user()->email;
            $Form->save();
            return redirect()->route('form')->with('success', "Talaba ro'yhatga olindi.");
        }
    }
}
 