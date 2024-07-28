<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HisobotController extends Controller
{
    public function student(){
        return view('meneger.report.student');
    }    
    public function studentSearch(Request $request){
        return view('meneger.report.student');
    }
    public function hodimlar(){
        return view('meneger.report.hodimlar');
    }
    public function moliya(){
        return view('meneger.report.moliya');
    }
    public function active(){
        return view('meneger.report.actev_user');
    }
}
