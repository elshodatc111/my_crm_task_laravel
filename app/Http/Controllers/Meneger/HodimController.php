<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\MarkazAddres;

class HodimController extends Controller
{
    public function hodim(){
        $User = User::where('markaz_id',auth()->user()->markaz_id)->whereIn('role_id', [2, 3, 4])->where('id','!=',auth()->user()->id)->get();
        return view('meneger.hodim.hodim',compact('User'));
    }
    public function hodimUnlock(Request $request){
        $User = User::find($request->id);
        if($User->status=='true'){
            $User->status = 'false';
            $User->save();
            return redirect()->back()->with('success', "Hodim bloklandi.");
        }else{
            $User->status = 'true';
            $User->save();
            return redirect()->back()->with('success', "Hodim aktivlashtirildi.");
        }
    }
    public function hodimCreate(){
        $MarkazAddres = MarkazAddres::where('markaz_id',auth()->user()->markaz_id)->get();
        return view('meneger.hodim.hodim_create',compact('MarkazAddres'));
    }
    public function hodimCreateStore(Request $request){
        dd($request);
    }
    public function hodimShow($id){
        return view('meneger.hodim.hodim_show');
    }
    public function techer(){
        return view('meneger.hodim.techer');
    }
    public function techerCreate(){
        return view('meneger.hodim.techer_create');
    }
    public function techerShow($id){
        return view('meneger.hodim.techer_show');
    }
}
