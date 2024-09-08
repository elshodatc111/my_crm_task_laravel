<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserGroup;
use App\Models\UserPaymart;
use App\Models\KassaKirimChiqim;
use App\Models\Grops;
use App\Models\MarkazIshHaqi;
use Carbon\Carbon;
class ChartController extends Controller
{
    protected function daysTime(){
        $days = collect();
        for ($i = 0; $i < 7; $i++) {
            $date = Carbon::now()->subDays($i);
            $days->push([
                'Y-m-d' => $date->format('Y-m-d'),
                'M-d' => $date->format('M-d'),
            ]);
        }
        return $days;
    }
    protected function daysFirstTable($days){
        $Chart = array();
        foreach ($days as $key => $value) {
            $Chart[$key]['data'] = $value['M-d'];
            $naqt = 0;
            $plastik = 0;
            $payme = 0;
            $chegirma = 0;
            $qaytar = 0;
            $UserPaymart = UserPaymart::where('markaz_id',auth()->user()->markaz_id)
                ->where('created_at','>=',$value['Y-m-d']." 00:00:00")
                ->where('created_at','<=',$value['Y-m-d']." 23:59:59")->get();
            foreach ($UserPaymart as $key2 => $item) {
                if($item['tulov_type']=='Naqt'){
                    $naqt = $naqt + $item['summa'];
                }elseif($item['tulov_type']=='Plastik'){
                    $plastik = $plastik + $item['summa'];
                }elseif($item['tulov_type']=='Payme'){
                    $payme = $payme + $item['summa'];
                }elseif($item['tulov_type']=='Qaytarildi'){
                    $qaytar = $qaytar + $item['summa'];
                }elseif($item['tulov_type']=='Chegirma'){
                    $chegirma = $chegirma + $item['summa'];
                }
            }  
            $Chart[$key]['naqt'] = $naqt;
            $Chart[$key]['plastik'] = $plastik;
            $Chart[$key]['payme'] = $payme;
            $Chart[$key]['qaytar'] = $qaytar;
            $Chart[$key]['chegirma'] = $chegirma;
        }
        $reversedItems = array_reverse($Chart);

        foreach ($reversedItems as $item) {
            unset($Chart[array_search($item, $Chart)]);
        }
        return $reversedItems;
    }
    protected function daysSecondTable($days){
        $Chart = array();
        foreach ($days as $key => $value) {
            $Chart[$key]['data'] = $value['M-d'];
            $KassaKirimChiqim = KassaKirimChiqim::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->where('created_at','>=',$value['Y-m-d']." 00:00:00")->where('created_at','<=',$value['Y-m-d']." 23:59:59")->get();
            $kassaChiqim = 0;
            $balansChiqim = 0;
            $kassaXarajat = 0;
            $balansXarajat = 0;
            $ishHaqi = 0;
            foreach ($KassaKirimChiqim as $item) {
                if($item['hodisa'] == 'Kassadan Chiqim'){
                    $kassaChiqim = $kassaChiqim + $item['summa'];
                }elseif($item['hodisa'] == 'Balansdan Chiqim.'){
                    $balansChiqim = $balansChiqim + $item['summa'];
                }elseif($item['hodisa'] == 'Kassadan Xarajat'){
                    $kassaXarajat = $kassaXarajat + $item['summa'];
                }elseif($item['hodisa'] == 'Balansdan xarajat.'){
                    $balansXarajat = $balansXarajat + $item['summa'];
                }
            }
            $IshHaqi = MarkazIshHaqi::where('markaz_id',auth()->user()->markaz_id)->where('created_at','>=',$value['Y-m-d']." 00:00:00")->where('created_at','<=',$value['Y-m-d']." 23:59:59")->get();
            foreach ($IshHaqi as $item) {
                $ishHaqi = $ishHaqi + $item['summa'];
            }
            $Chart[$key]['kassaChiqim'] = $kassaChiqim;
            $Chart[$key]['balansChiqim'] = $balansChiqim;
            $Chart[$key]['kassaXarajat'] = $kassaXarajat;
            $Chart[$key]['balansXarajat'] = $balansXarajat;
            $Chart[$key]['ishHaqi'] = $ishHaqi;
        }
        $reversedItems = array_reverse($Chart);
        foreach ($reversedItems as $item) {
            unset($Chart[array_search($item, $Chart)]);
        }
        return $reversedItems;
    }
    protected function daysThereTable($days){
        $Chart = array();
        foreach ($days as $key => $value) {
            $Chart[$key]['data'] = $value['M-d'];
            $Users = User::where('markaz_id',auth()->user()->markaz_id)->where('role_id',6)->where('created_at','>=',$value['Y-m-d']." 00:00:00")->where('created_at','<=',$value['Y-m-d']." 23:59:59")->get();
            $Chart[$key]['users'] = count($Users);
            $guruh = 0;
            $tulov = 0;
            foreach ($Users as $item) {
                $UserGroup = UserGroup::where('user_id',$item->id)->where('status','true')->first();
                if($UserGroup){
                    $guruh = $guruh + 1;
                }
                $UserPaymart = UserPaymart::where('user_id',$item->id)->first();
                if($UserPaymart){
                    $tulov = $tulov + 1;
                }
            }
            $Chart[$key]['guruh'] = $guruh;
            $Chart[$key]['tulov'] = $tulov;
        }
        $reversedItems = array_reverse($Chart);
        foreach ($reversedItems as $item) {
            unset($Chart[array_search($item, $Chart)]);
        }
        return $reversedItems;
    }
    public function days(){
        $days = $this->daysTime();
        $first_table = $this->daysFirstTable($days);
        $secont_table = $this->daysSecondTable($days);
        $there_table = $this->daysThereTable($days);
        return view('meneger.statistika.days',compact('first_table','secont_table','there_table'));
    }
    public function dayTable(){
        $days = $this->daysTime();
        $first_table = $this->daysFirstTable($days);
        $secont_table = $this->daysSecondTable($days);
        $there_table = $this->daysThereTable($days);
        return view('meneger.statistika.days_table',compact('first_table','secont_table','there_table'));
    }

    protected function Months(){
        $months = collect();
        for ($i = 0; $i < 7; $i++) {
            $date = Carbon::now()->subMonths($i);
            $months->push([
                'Y-m' => $date->format('Y-m'),
                'M-Y' => $date->format('M-Y'),
            ]);
        }
        $months = $months->reverse()->values();
        return $months;
    }
    protected function monchFirstTable($months){
        $Chart = array();
        foreach ($months as $key => $value) {
            $start = $value['Y-m']."-01 00:00:00";
            $end = $value['Y-m']."-31 23:59:59";
            $Chart[$key]['data'] = $value['M-Y'];
            $naqt = 0;
            $plastik = 0;
            $payme = 0;
            $chegirma = 0;
            $qaytar = 0;
            $UserPaymart = UserPaymart::where('markaz_id',auth()->user()->markaz_id)
                ->where('created_at','>=',$start)
                ->where('created_at','<=',$end)->get();
            foreach ($UserPaymart as $key2 => $item) {
                if($item['tulov_type']=='Naqt'){
                    $naqt = $naqt + $item['summa'];
                }elseif($item['tulov_type']=='Plastik'){
                    $plastik = $plastik + $item['summa'];
                }elseif($item['tulov_type']=='Payme'){
                    $payme = $payme + $item['summa'];
                }elseif($item['tulov_type']=='Qaytarildi'){
                    $qaytar = $qaytar + $item['summa'];
                }elseif($item['tulov_type']=='Chegirma'){
                    $chegirma = $chegirma + $item['summa'];
                }
            }  
            $Chart[$key]['naqt'] = $naqt;
            $Chart[$key]['plastik'] = $plastik;
            $Chart[$key]['payme'] = $payme;
            $Chart[$key]['qaytar'] = $qaytar;
            $Chart[$key]['chegirma'] = $chegirma;
        }
        return $Chart;
    }
    protected function monchSecondTable($months){
        $Chart = array();
        foreach ($months as $key => $value) {
            $start = $value['Y-m']."-01 00:00:00";
            $end = $value['Y-m']."-31 23:59:59";
            $Chart[$key]['data'] = $value['M-Y'];
            $KassaKirimChiqim = KassaKirimChiqim::where('markaz_id',auth()->user()->markaz_id)
                ->where('status','true')->where('created_at','>=',$start)
                ->where('created_at','<=',$end)->get();
            $Tulovlar = 0;
            $Xarajat = 0;
            $KassadanXarajat = 0;
            $balansXarajat = 0;
            foreach ($KassaKirimChiqim as $item) {
                if($item['hodisa'] == 'Kassadan Xarajat'){
                    $Xarajat = $Xarajat + $item['summa'];
                    $KassadanXarajat = $KassadanXarajat + $item['summa'];
                }elseif($item['hodisa'] == 'Balansdan xarajat.'){
                    $Xarajat = $Xarajat + $item['summa'];
                    $balansXarajat = $balansXarajat + $item['summa'];
                }
            }
            $ishHaqi = 0;
            $hodimishHaqi = 0;
            $techerishHaqi = 0;
            $IshHaqi = MarkazIshHaqi::where('markaz_id',auth()->user()->markaz_id)
                ->where('created_at','>=',$start)
                ->where('created_at','<=',$end)->get();
            foreach ($IshHaqi as $item) {
                $ishHaqi = $ishHaqi + $item['summa'];
                if($item['typing'] == 'Hodim'){
                    $hodimishHaqi = $hodimishHaqi + $item['summa'];
                }elseif($item['typing'] == 'Techer'){
                    $techerishHaqi = $techerishHaqi + $item['summa'];
                }
            }
            $UserPaymart = UserPaymart::where('markaz_id',auth()->user()->markaz_id)
                ->where('created_at','>=',$start)
                ->where('created_at','<=',$end)->get();
            foreach ($UserPaymart as $item) {
                if($item['tulov_type']=='Naqt'){
                    $Tulovlar = $Tulovlar + $item['summa'];
                }elseif($item['tulov_type']=='Plastik'){
                    $Tulovlar = $Tulovlar + $item['summa'];
                }elseif($item['tulov_type']=='Payme'){
                    $Tulovlar = $Tulovlar + $item['summa'];
                }elseif($item['tulov_type']=='Qaytarildi'){
                    $Tulovlar = $Tulovlar - $item['summa'];
                }
            } 
            $start2 = $value['Y-m']."-01";
            $end2 = $value['Y-m']."-31";
            $active = array();
            $j = 0;
            foreach(Grops::where('markaz_id',auth()->user()->markaz_id)->where('guruh_start',"<=",$end2)->where('guruh_end',">=",$start2)->get() as $item5){
                foreach(UserGroup::where('grops_id',$item5->id)->where('status','true')->get() as $item3){
                    $active[$j]['user_id'] = $item3->user_id;
                    $j++;
                    $active[$j]['user_id'] = $item3->user_id;
                    $j++;
                }
            }
            $uniqueUsers = collect($active)->unique('user_id')->values()->all();
            $Chart[$key]['active'] = count($uniqueUsers);


            $Chart[$key]['tulovlar'] = $Tulovlar;
            $Chart[$key]['xarajatlar'] = $Xarajat;
            $Chart[$key]['balansXarajat'] = $balansXarajat;
            $Chart[$key]['KassadanXarajat'] = $KassadanXarajat;
            $Chart[$key]['ishHaqi'] = $ishHaqi;
            $Chart[$key]['hodimishHaqi'] = $hodimishHaqi;
            $Chart[$key]['techerishHaqi'] = $techerishHaqi;
            $Chart[$key]['daromad'] = $Tulovlar-$ishHaqi-$Xarajat;
        }
        return $Chart;
    }
    protected function MonchThereTable($days){
        $Chart = array();
        foreach ($days as $key => $value) {
            $start = $value['Y-m']."-01 00:00:00";
            $end = $value['Y-m']."-31 23:59:59";
            $Chart[$key]['data'] = $value['M-Y'];
            $Users = User::where('markaz_id',auth()->user()->markaz_id)->where('role_id',6)->where('created_at','>=',$start)->where('created_at','<=',$end)->get();
            $Chart[$key]['users'] = count($Users);
            $guruh = 0;
            $tulov = 0;
            foreach ($Users as $item) {
                $UserGroup = UserGroup::where('user_id',$item->id)->where('status','true')->first();
                if($UserGroup){
                    $guruh = $guruh + 1;
                }
                $UserPaymart = UserPaymart::where('user_id',$item->id)->first();
                if($UserPaymart){
                    $tulov = $tulov + 1;
                }
            }
            $Chart[$key]['guruh'] = $guruh;
            $Chart[$key]['tulov'] = $tulov;
        }
        return $Chart;
    }
    public function month(){
        $months = $this->Months();
        $first_table = $this->monchFirstTable($months);
        $secont_table = $this->monchSecondTable($months);
        $there_table = $this->MonchThereTable($months);
        return view('meneger.statistika.month', compact('first_table','secont_table','there_table'));
    }
    public function monthTable(){
        $months = $this->Months();
        $first_table = $this->monchFirstTable($months);
        $secont_table = $this->monchSecondTable($months);
        $there_table = $this->MonchThereTable($months);
        return view('meneger.statistika.month_table', compact('first_table','secont_table','there_table'));
    }
}
