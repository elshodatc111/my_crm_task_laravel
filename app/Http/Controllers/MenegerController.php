<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MenegerController extends Controller
{
    public function index(){
        return redirect()->route('meneger.all_tashrif');
    }
}
