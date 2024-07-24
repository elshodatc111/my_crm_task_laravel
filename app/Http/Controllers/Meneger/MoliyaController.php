<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Markaz;
use App\Models\Kassa;
use App\Models\MarkazBalans;
use App\Models\User;
use App\Models\UserPaymart;
use App\Models\KassaKirimChiqim;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class MoliyaController extends Controller{
    public function moliyaHome(){
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        $sevenDaysAgo = Carbon::now()->subDays(7)->format('Y-m-d');
        $Qaytarilganlar = UserPaymart::where('user_paymarts.markaz_id',auth()->user()->markaz_id)
            ->where('user_paymarts.tulov_type','Qaytarildi')
            ->join('users','users.id','user_paymarts.user_id')->get();
        $Tasdiqlanmagan = KassaKirimChiqim::where('markaz_id',auth()->user()->markaz_id)->where('status','false')->get();
        return view('meneger.moliya.home',compact('Kassa','Qaytarilganlar','Tasdiqlanmagan'));
    }
    public function kassadanChiqim(Request $request){
        $validate = $request->validate([
            'kassa_naqt' => 'required',
            'kassa_plastik' => 'required',
            'summa' => 'required',
            'type' => 'required',
            'typing' => 'required',
            'comment' => 'required',
        ]);
        $summa = preg_replace('/\D/','',$request->summa);
        if($request->type == 'Naqt' AND $request->kassa_naqt < $summa){
            return redirect()->back()->with('success', "Kassada mablag' yetarli emas.");
        }elseif($request->type == 'Plastik' AND $request->kassa_plastik < $summa){
            return redirect()->back()->with('success', "Kassada mablag' yetarli emas.");
        }
        KassaKirimChiqim::create([
            'markaz_id' => auth()->user()->markaz_id,
            'hodisa' => $request->typing,
            'summa' => $summa,
            'type' => $request->type,
            'status' => 'false',
            'comment' => $request->comment,
            'meneger' => auth()->user()->email,
            'administrator' => '',
        ]);
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        if($request->type=='Naqt'){
            if($request->typing=='Kassadan Chiqim'){
                $Kassa->kassa_naqt = $Kassa->kassa_naqt - $summa;
                $Kassa->kassa_naqt_chiqim_pedding = $Kassa->kassa_naqt_chiqim_pedding + $summa;
            }else{
                $Kassa->kassa_naqt = $Kassa->kassa_naqt - $summa;
                $Kassa->kassa_naqt_xarajat_pedding = $Kassa->kassa_naqt_xarajat_pedding + $summa;
            }
        }else{
            if($request->typing=='Kassadan Chiqim'){
                $Kassa->kassa_plastik = $Kassa->kassa_plastik - $summa;
                $Kassa->kassa_plastik_chiqim_pedding = $Kassa->kassa_plastik_chiqim_pedding + $summa;
            }else{
                $Kassa->kassa_plastik = $Kassa->kassa_plastik - $summa;
                $Kassa->kassa_plastik_xarajat_pedding = $Kassa->kassa_plastik_xarajat_pedding + $summa;
            } 
        }
        $Kassa->save();
        return redirect()->back()->with('success', "Kassada chiqim qilindi. Tasdiqlanish kutilmoqda.");
    }
    public function kassadanChiqimDelete(Request $request){
        $validate = $request->validate(['id' => 'required']);
        $KassaKirimChiqim = KassaKirimChiqim::find($request->id);
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        if($KassaKirimChiqim->type=='Naqt'){
            if($KassaKirimChiqim->hodisa=='Kassadan Chiqim'){
                $Kassa->kassa_naqt = $Kassa->kassa_naqt + $KassaKirimChiqim->summa;
                $Kassa->kassa_naqt_chiqim_pedding = $Kassa->kassa_naqt_chiqim_pedding - $KassaKirimChiqim->summa;
            }else{
                $Kassa->kassa_naqt = $Kassa->kassa_naqt + $KassaKirimChiqim->summa;
                $Kassa->kassa_naqt_xarajat_pedding = $Kassa->kassa_naqt_xarajat_pedding - $KassaKirimChiqim->summa;
            }
        }else{
            if($KassaKirimChiqim->hodisa=='Kassadan Chiqim'){
                $Kassa->kassa_plastik = $Kassa->kassa_plastik + $KassaKirimChiqim->summa;
                $Kassa->kassa_plastik_chiqim_pedding = $Kassa->kassa_plastik_chiqim_pedding - $KassaKirimChiqim->summa;
            }else{
                $Kassa->kassa_plastik = $Kassa->kassa_plastik + $KassaKirimChiqim->summa;
                $Kassa->kassa_plastik_xarajat_pedding = $Kassa->kassa_plastik_xarajat_pedding - $KassaKirimChiqim->summa;
            } 
        }
        $Kassa->save();
        $KassaKirimChiqim->delete();
        return redirect()->back()->with('success', "Kassada chiqim bekor qilindi.");
    }
    public function kassadanChiqimCheck(Request $request){
        $validate = $request->validate(['id' => 'required']);
        $KassaKirimChiqim = KassaKirimChiqim::find($request->id);
        $KassaKirimChiqim->status = 'true';
        $KassaKirimChiqim->administrator = auth()->user()->email;
        $MarkazBalans = MarkazBalans::where('markaz_id',auth()->user()->markaz_id)->first();
        $Kassa = Kassa::where('markaz_id',auth()->user()->markaz_id)->first();
        if($KassaKirimChiqim->type=='Naqt'){
            if($KassaKirimChiqim->hodisa=='Kassadan Chiqim'){
                $MarkazBalans->balans_naqt = $MarkazBalans->balans_naqt + $KassaKirimChiqim->summa;
                $Kassa->kassa_naqt_chiqim_pedding = $Kassa->kassa_naqt_chiqim_pedding - $KassaKirimChiqim->summa;
            }else{
                $MarkazBalans->kassa_naqt_xarajat = $MarkazBalans->kassa_naqt_xarajat + $KassaKirimChiqim->summa;
                $Kassa->kassa_naqt_xarajat_pedding = $Kassa->kassa_naqt_xarajat_pedding - $KassaKirimChiqim->summa;
            }
        }else{
            if($KassaKirimChiqim->hodisa=='Kassadan Chiqim'){
                $MarkazBalans->balans_plastik = $MarkazBalans->balans_plastik + $KassaKirimChiqim->summa;
                $Kassa->kassa_plastik_chiqim_pedding = $Kassa->kassa_plastik_chiqim_pedding - $KassaKirimChiqim->summa;
            }else{
                $MarkazBalans->kassa_plastik_xarajat = $MarkazBalans->kassa_plastik_xarajat + $KassaKirimChiqim->summa;
                $Kassa->kassa_plastik_xarajat_pedding = $Kassa->kassa_plastik_xarajat_pedding - $KassaKirimChiqim->summa;
            } 
        }
        $Kassa->save();
        $MarkazBalans->save();
        $KassaKirimChiqim->save();
        return redirect()->back()->with('success', "Kassada chiqim tasdiqlandi.");
    }
}
