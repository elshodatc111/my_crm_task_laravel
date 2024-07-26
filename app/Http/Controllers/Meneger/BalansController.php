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
        $validate = $request->validate([
            'naqt' => 'required',
            'plastik' => 'required',
            'typing' => 'required',
            'summa' => 'required',
            'type' => 'required',
            'comment' => 'required',
        ]);
        dd($request);
        if($request->typing == 'kassadanBalansga'){
            if($request->Naqt == 'Naqt' AND $request->naqt<$request->summa){
                return redirect()->back()->with('error', "Kassadagi naqt ish haqi yetarli mablag' mavjud emas.");
            }
            if($request->Naqt == 'Plastik' AND $request->plastik<$request->summa){
                return redirect()->back()->with('error', "Kassadagi naqt ish haqi yetarli mablag' mavjud emas.");
            }
        }else{
            if($request->Naqt == 'Naqt' AND $request->naqt<$request->summa){
                return redirect()->back()->with('error', "Kassadagi naqt ish haqi yetarli mablag' mavjud emas.");
            }
            if($request->Naqt == 'Plastik' AND $request->plastik<$request->summa){
                return redirect()->back()->with('error', "Kassadagi naqt ish haqi yetarli mablag' mavjud emas.");
            }
        }
    }


}
