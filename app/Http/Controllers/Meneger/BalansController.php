<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kassa;
use App\Models\MarkazBalans;
use App\Models\KassaKirimChiqim;
use Carbon\Carbon;

class BalansController extends Controller
{
    public function balansHome(){
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        $MarkazBalans = MarkazBalans::where('markaz_id',auth()->user()->markaz_id)->first();
        $sevenDaysAgo = Carbon::now()->subDays(7)->format('Y-m-d')." 00:00:00";
        $KassaKirimChiqim = KassaKirimChiqim::where('markaz_id',auth()->user()->markaz_id)
            ->where('status','true')
            ->where('created_at','>=',$sevenDaysAgo)
            ->orderby('created_at', 'asc')
            ->get();
        return view('meneger.balans.home',compact('Kassa','MarkazBalans','KassaKirimChiqim'));
    }
    public function balansIshHaqi(Request $request){
        dd($request);
    }


}
