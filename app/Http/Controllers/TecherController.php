<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TecherController extends Controller
{
    public function index(){
        return view('techer.index');
    }
}
