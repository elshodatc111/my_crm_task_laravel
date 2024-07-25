<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarkazHodimStatistka;

class ProfelController extends Controller
{
    public function profel(){
        $MarkazHodimStatistka = MarkazHodimStatistka::where('user_id',auth()->user()->id)->first();
        return view('meneger.profel.profel',compact('MarkazHodimStatistka'));
    }
    public function profelUpdatePassword(Request $request){
        dd($request);
    }
}
