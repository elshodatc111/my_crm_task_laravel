<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Markaz;
use App\Models\Grops;
use App\Models\MarkazPaymart;
use App\Models\User;
use App\Models\UserGroup;
use App\Models\UserPaymart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller{
    public function index(){
        $Markaz = Markaz::find(auth()->user()->markaz_id);
        return view('user.index',compact('Markaz'));
    }
    public function groups(){
        $UserGroup = UserGroup::where('user_id',auth()->user()->id)->where('status','true')->get();
        $Guruhlar = array();
        foreach ($UserGroup as $key => $value) {
            $Guruh = Grops::find($value->grops_id);
            $start = $Guruh['guruh_start'];
            $end = $Guruh['guruh_end'];
            if($start>=date('Y-m-d') AND $end<=date('Y-m-d')){
                $status = 'aktiv';
            }elseif($end>=date('Y-m-d')){
                $status = 'new';
            }else{
                $status = 'end';
            }
            $Guruhlar[$key]['id'] = $value->grops_id;
            $Guruhlar[$key]['guruh_name'] = $Guruh['guruh_name'];
            $Guruhlar[$key]['status'] = $status;
        }
        return view('user.group',compact('Guruhlar'));
    }
    public function groupsShow($id){
        dd($id);
    }
    public function paymart(){
        $UserPaymart = UserPaymart::where('user_id',auth()->user()->id)->orderby('id','desc')->get();
        return view('user.paymart',compact('UserPaymart'));
    }
    public function profel(){
        return view('user.profel');
    }
    public function updatePasword(Request $request){
        $validated = $request->validate([
            'password' => 'required',
            'newPassword' => 'required',
            'confirmPassword' => 'required',
        ]);
        $request['email'] = auth()->user()->email;
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if($request->newpassword == $request->confirmpassword){
                $User = User::find(auth()->user()->id);
                $User->password = Hash::make($request->confirmPassword);
                $User->save();
                Auth::guard('web')->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/login');
            }else{
                return redirect()->back()->with('error', "Yangi parollar mos kelmadi.");
            }
        }else{
            return redirect()->back()->with('error', "Joriy parol noto'g'ri.");
        }
    }


}
