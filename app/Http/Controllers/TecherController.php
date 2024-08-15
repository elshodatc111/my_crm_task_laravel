<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TecherController extends Controller
{
    public function index(){
        return view('techer.index');
    }
    public function guruhs(){
        return view('techer.guruhs');
    }
    public function guruh($id){
        return view('techer.guruh');
    }
    public function paymart(){
        return view('techer.paymart');
    }
    public function profel(){
        return view('techer.profel');
    }
}
