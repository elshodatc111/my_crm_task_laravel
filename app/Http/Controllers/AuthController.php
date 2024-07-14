<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Role;
class AuthController extends Controller{
    public function dashboard(){
        if(!auth()->user()){
            return redirect()->route('login');
        }
        if(auth()->user()->role->name=='SuperAdmin'){
            return redirect()->route('admin.index');
        }elseif(auth()->user()->role->name=='Techer'){
            return redirect()->route('techer.index');
        }elseif(auth()->user()->role->name=='User'){
            return redirect()->route('user.index');
        }else{
            return redirect()->route('meneger.index');
        }
    }
}
