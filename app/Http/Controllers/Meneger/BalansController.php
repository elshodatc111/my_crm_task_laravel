<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BalansController extends Controller
{
    public function balansHome(){
        return view('meneger.balans.home');
    }
}
