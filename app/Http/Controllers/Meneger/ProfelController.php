<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\MarkazHodimStatistka;
use Illuminate\Support\Facades\Hash;

class ProfelController extends Controller
{
    public function profel(){
        $MarkazHodimStatistka = MarkazHodimStatistka::where('user_id',auth()->user()->id)->first();
        return view('meneger.profel.profel',compact('MarkazHodimStatistka'));
    }
    public function profelUpdatePassword(Request $request){
        $validate = $request->validate([
            'password' => 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'required',
        ]);
        $request['email'] = auth()->user()->email;
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if($request->newpassword == $request->confirmpassword){
                $User = User::find(auth()->user()->id);
                $User->password = Hash::make($request->newpassword);
                $User->save();
                Auth::guard('web')->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/login');
            }else{
                return redirect()->route('meneger_profel')->with('error', "Yangi parollar mos kelmadi.");
            }
        }else{
            return redirect()->route('meneger_profel')->with('error', "Joriy parol noto'g'ri.");
        }
    }
}
