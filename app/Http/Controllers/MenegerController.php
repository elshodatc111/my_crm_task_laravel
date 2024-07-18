<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MenegerController extends Controller
{
    public function index(){
        if(auth()->user()->role->name=='SuperAdmin'){
            return redirect()->route('admin.index');
        }elseif(auth()->user()->role->name=='Techer'){
            return redirect()->route('techer.index');
        }elseif(auth()->user()->role->name=='User'){
            return redirect()->route('user.index');
        }
        return redirect()->route('meneger.all_tashrif');
    }
}
