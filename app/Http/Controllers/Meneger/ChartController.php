<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function days(){
        return view('meneger.statistika.days');
    }

    
    public function dayTable(){
        return view('meneger.statistika.days_table');
    }

    
    public function month(){
        return view('meneger.statistika.month');
    }

    
    public function monthTable(){
        return view('meneger.statistika.month_table');
    }
}
