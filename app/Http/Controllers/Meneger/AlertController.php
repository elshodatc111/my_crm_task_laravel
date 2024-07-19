<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserEslatma;
use Carbon\Carbon;
class AlertController extends Controller{
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
    public function form(){
        return view('meneger.alert.form');
    }
    
    public function murojat(){
        return view('meneger.alert.murojat');
    }
}
