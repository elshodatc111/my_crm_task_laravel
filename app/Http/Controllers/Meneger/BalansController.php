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
            ->orderby('created_at', 'desc')
            ->get();
        return view('meneger.balans.home',compact('Kassa','MarkazBalans','KassaKirimChiqim'));
    }
    protected function balansdanKassaga($summa,$type,$comment){
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        $MarkazBalans = MarkazBalans::where('markaz_id',auth()->user()->markaz_id)->first();
        KassaKirimChiqim::create([
            'markaz_id' => auth()->user()->markaz_id,
            'hodisa' => "Balandan ish haqi kassaga qaytarildi.",
            'summa' => $summa,
            'type' => $type,
            'status' => 'true',
            'comment' => $comment,
            'meneger' => auth()->user()->email,
            'administrator' => auth()->user()->email,
        ]);
        if($type=='Naqt'){
            $Kassa->kassa_naqt_ish_haqi_pedding = $Kassa->kassa_naqt_ish_haqi_pedding + $summa;
            $MarkazBalans->balans_naqt = $MarkazBalans->balans_naqt - $summa;
        }
        if($type=='Plastik'){
            $Kassa->kassa_plastik_ish_haqi_pedding = $Kassa->kassa_plastik_ish_haqi_pedding + $summa;
            $MarkazBalans->balans_plastik = $MarkazBalans->balans_plastik - $summa;
        }
        $Kassa->save();
        $MarkazBalans->save();
    }
    protected function kassadanBalansga($summa,$type,$comment){
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        $MarkazBalans = MarkazBalans::where('markaz_id',auth()->user()->markaz_id)->first();
        KassaKirimChiqim::create([
            'markaz_id' => auth()->user()->markaz_id,
            'hodisa' => "Kassadan ish haqi balansga qaytarildi.",
            'summa' => $summa,
            'type' => $type,
            'status' => 'true',
            'comment' => $comment,
            'meneger' => auth()->user()->email,
            'administrator' => auth()->user()->email,
        ]);
        if($type=='Naqt'){
            $Kassa->kassa_naqt_ish_haqi_pedding = $Kassa->kassa_naqt_ish_haqi_pedding - $summa;
            $MarkazBalans->balans_naqt = $MarkazBalans->balans_naqt + $summa;
        }
        if($type=='Plastik'){
            $Kassa->kassa_plastik_ish_haqi_pedding = $Kassa->kassa_plastik_ish_haqi_pedding - $summa;
            $MarkazBalans->balans_plastik = $MarkazBalans->balans_plastik + $summa;
        }
        $Kassa->save();
        $MarkazBalans->save();
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
        $MavjudNaqt = $request->naqt;
        $MavjudPlastik = $request->plastik;
        $Summa = preg_replace('/\D/','',$request->summa);
        if($request->typing == 'kassadanBalansga'){
            if($request->type == 'Naqt' AND $request->naqt<preg_replace('/\D/','',$request->summa)){
                return redirect()->back()->with('error', "Kassada yetarli mablag' mavjud emas.");
            }
            if($request->type == 'Plastik' AND $request->plastik<preg_replace('/\D/','',$request->summa)){
                return redirect()->back()->with('error', "Kassada yetarli mablag' mavjud emas.");
            }
            $this->kassadanBalansga($Summa,$request->type,$request->comment);
            return redirect()->back()->with('success', "Kassadan ish haqi balansga qaytarildi.");
        }elseif($request->typing == 'balansdanKassaga'){
            if($request->type == 'Naqt' AND $request->naqt<preg_replace('/\D/','',$request->summa)){
                return redirect()->back()->with('error', "Balansda yetarli mablag' mavjud emas.");
            }
            if($request->type == 'Plastik' AND $request->plastik<preg_replace('/\D/','',$request->summa)){
                return redirect()->back()->with('error', "Balansda yetarli mablag' mavjud emas.");
            }
            $this->balansdanKassaga($Summa,$request->type,$request->comment);
            return redirect()->back()->with('success', "Balansdan kassaga ish haqi uchun qaytarildi.");
        }
    }
    protected function balansdanXarajat($summa,$type,$comment){
        $MarkazBalans = MarkazBalans::where('markaz_id',auth()->user()->markaz_id)->first();
        KassaKirimChiqim::create([
            'markaz_id' => auth()->user()->markaz_id,
            'hodisa' => "Balansdan xarajat.",
            'summa' => $summa,
            'type' => $type,
            'status' => 'true',
            'comment' => $comment,
            'meneger' => auth()->user()->email,
            'administrator' => auth()->user()->email,
        ]);
        if($type=='Naqt'){
            $MarkazBalans->balans_naqt = $MarkazBalans->balans_naqt - $summa;
        }
        if($type=='Plastik'){
            $MarkazBalans->balans_plastik = $MarkazBalans->balans_plastik - $summa;
        }
        if($type=='Payme'){
            $MarkazBalans->balans_payme = $MarkazBalans->balans_payme - $summa;
        }
        $MarkazBalans->save();
    }
    protected function balansdanKassagaQaytarildi($summa,$type,$comment){
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        $MarkazBalans = MarkazBalans::where('markaz_id',auth()->user()->markaz_id)->first();
        KassaKirimChiqim::create([
            'markaz_id' => auth()->user()->markaz_id,
            'hodisa' => "Balansdan kassaga qaytarildi.",
            'summa' => $summa,
            'type' => $type,
            'status' => 'true',
            'comment' => $comment,
            'meneger' => auth()->user()->email,
            'administrator' => auth()->user()->email,
        ]);
        if($type=='Naqt'){
            $MarkazBalans->balans_naqt = $MarkazBalans->balans_naqt - $summa;
            $Kassa->kassa_naqt = $Kassa->kassa_naqt + $summa;
        }
        if($type=='Plastik'){
            $MarkazBalans->balans_plastik = $MarkazBalans->balans_plastik - $summa;
            $Kassa->kassa_plastik = $Kassa->kassa_plastik + $summa;
        }
        $Kassa->save();
        $MarkazBalans->save();
    }
    protected function balansdanChiqim($summa,$type,$comment){
        $MarkazBalans = MarkazBalans::where('markaz_id',auth()->user()->markaz_id)->first();
        KassaKirimChiqim::create([
            'markaz_id' => auth()->user()->markaz_id,
            'hodisa' => "Balansdan Chiqim.",
            'summa' => $summa,
            'type' => $type,
            'status' => 'true',
            'comment' => $comment,
            'meneger' => auth()->user()->email,
            'administrator' => auth()->user()->email,
        ]);
        if($type=='Naqt'){
            $MarkazBalans->balans_naqt = $MarkazBalans->balans_naqt - $summa;
        }
        if($type=='Plastik'){
            $MarkazBalans->balans_plastik = $MarkazBalans->balans_plastik - $summa;
        }
        if($type=='Payme'){
            $MarkazBalans->balans_payme = $MarkazBalans->balans_payme - $summa;
        }
        $MarkazBalans->save();
    }
    public function balansChiqimlar(Request $request){
        $validate = $request->validate([
            'naqt' => 'required',
            'plastik' => 'required',
            'typing' => 'required',
            'summa' => 'required',
            'type' => 'required',
            'comment' => 'required',
            'payme' => 'required',
        ]);
        $MavjudNaqt = $request->naqt;
        $MavjudPlastik = $request->plastik;
        $Summa = preg_replace('/\D/','',$request->summa);
        if($request->typing == 'balansdanChiqim'){
            if($request->type == 'Naqt' AND $request->naqt<preg_replace('/\D/','',$request->summa)){
                return redirect()->back()->with('error', "Balansda yetarli mablag' mavjud emas.");
            }
            if($request->type == 'Plastik' AND $request->plastik<preg_replace('/\D/','',$request->summa)){
                return redirect()->back()->with('error', "Balansda yetarli mablag' mavjud emas.");
            }
            if($request->type == 'Payme' AND $request->payme<preg_replace('/\D/','',$request->summa)){
                return redirect()->back()->with('error', "Balansda yetarli mablag' mavjud emas.");
            }
            $this->balansdanChiqim($Summa,$request->type,$request->comment);
            return redirect()->back()->with('success', "Balansdan chiqim qilindi.");
        }elseif($request->typing == 'balansdanKassaga'){
            if($request->type == 'Naqt' AND $request->naqt<preg_replace('/\D/','',$request->summa)){
                return redirect()->back()->with('error', "Balansda yetarli mablag' mavjud emas.");
            }
            if($request->type == 'Plastik' AND $request->plastik<preg_replace('/\D/','',$request->summa)){
                return redirect()->back()->with('error', "Balansda yetarli mablag' mavjud emas.");
            }
            $this->balansdanKassagaQaytarildi($Summa,$request->type,$request->comment);
            return redirect()->back()->with('success', "Balansdan kassaga qaytarildi.");
        }elseif($request->typing == 'balansdanXarajat'){
            if($request->type == 'Naqt' AND $request->naqt<preg_replace('/\D/','',$request->summa)){
                return redirect()->back()->with('error', "Balansda yetarli mablag' mavjud emas.");
            }
            if($request->type == 'Plastik' AND $request->plastik<preg_replace('/\D/','',$request->summa)){
                return redirect()->back()->with('error', "Balansda yetarli mablag' mavjud emas.");
            }
            if($request->type == 'Payme' AND $request->payme<preg_replace('/\D/','',$request->summa)){
                return redirect()->back()->with('error', "Balansda yetarli mablag' mavjud emas.");
            }
            $this->balansdanXarajat($Summa,$request->type,$request->comment);
            return redirect()->back()->with('success', "Balansdan xarajat uchun chiqim qilindi.");
        }
    }


}
