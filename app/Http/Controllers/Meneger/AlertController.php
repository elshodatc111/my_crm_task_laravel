<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlertController extends Controller{
    public function eslatma(){
        return view('meneger.alert.eslatma');
    }
    public function tkun(){
        return view('meneger.alert.tkun');
    }
    public function form(){
        return view('meneger.alert.form');
    }
    
    public function murojat(){
        return view('meneger.alert.murojat');
    }
}
