<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Grops;
use App\Models\MarkazPaymart;
use App\Models\MarkazRoom;
use App\Models\UserGroup;
use App\Models\MarkazCours;
use App\Models\MarkazIshHaqi;
use App\Models\KassaKirimChiqim;
use App\Models\UserPaymart;
use Carbon\Carbon;

class HisobotController extends Controller
{
    public function student(){
        return view('meneger.report.student');
    }    
    public function studentSearch(Request $request){
        $validate = $request->validate([
            'type' => 'required'
        ]);
        $type = $request->type;
        if($type == 'allUser'){
            $Search = User::where('markaz_id',auth()->user()->markaz_id)->where('role_id',6)->where('status','true')->get();
        }elseif($type == 'allUserDebet'){
            $Search = User::where('markaz_id',auth()->user()->markaz_id)->where('role_id',6)->where('status','true')->where('balans','<',0)->get();
        }elseif($type == 'allUserNoGrops'){
            $Search = array();
            $Users = User::where('markaz_id',auth()->user()->markaz_id)->where('role_id',6)->where('status','true')->get();
            foreach ($Users as $key => $value) {
                if(UserGroup::where('user_id',$value->id)->where('status','true')->first()){

                }else{
                    array_push($Search,$value);
                }
            }
        }else{
            $Search = array();
            $Grops = Grops::where('markaz_id',auth()->user()->markaz_id)->get();
            foreach ($Grops as $key => $value) {
                $Massiv = array([
                    'guruh_id'=> $value->id,
                    'guruh_name'=> $value->guruh_name,
                    'guruh_start'=> $value->guruh_start,
                    'guruh_end'=> $value->guruh_end,
                    'hafta_kun'=> $value->hafta_kun,
                    'dars_count'=> $value->dars_count,
                    'techer_foiz'=> $value->techer_foiz,
                    'techer_paymart'=> $value->techer_paymart,
                    'techer_bonus'=> $value->techer_bonus,
                    'dars_time'=> $value->dars_time,
                    'next_id'=> $value->next_id,
                    'meneger'=> $value->meneger,
                    'created_at'=> $value->created_at,
                    'updated_at'=> $value->updated_at,
                    'room'=> MarkazRoom::find($value->room_id)->room_name,
                    'techer'=> User::find($value->techer_id)->name,
                    'summa'=> MarkazPaymart::find($value->tulov_id)->summa,
                    'chegirma'=> MarkazPaymart::find($value->tulov_id)->chegirma,
                    'admin_chegirma'=> MarkazPaymart::find($value->tulov_id)->admin_chegirma,
                    'chegirma_time'=> MarkazPaymart::find($value->tulov_id)->chegirma_time,
                    'cours_name'=> MarkazCours::find($value->cours_id)->cours_name,
                ]);
                array_push($Search,$Massiv);
            }
        }
        return view('meneger.report.student_search',compact('type','Search'));
    }
    public function hodimlar(){
        return view('meneger.report.hodimlar');
    }
    public function hodimlarSearch(Request $request){
        $validate = $request->validate([
            'type' => 'required'
        ]);
        $type = $request->type;
        $Search = array();
        if($type=='allHodim'){
            $Search = User::where('markaz_id',auth()->user()->markaz_id)->whereIn('role_id', [2, 3, 4])->get();
        }
        if($type=='allTecher'){
            $Search = User::where('markaz_id',auth()->user()->markaz_id)->where('role_id', 5)->get();
        }
        if($type=='allHodimTulov'){
            foreach(MarkazIshHaqi::where('markaz_id',auth()->user()->markaz_id)->where('typing', 'Hodim')->get() as $item){
                array_push($Search, [
                    'name' => User::find($item->user_id)->name,
                    'summa' => $item->summa,
                    'type' => $item->type,
                    'comment' => $item->comment,
                    'meneger' => $item->meneger,
                    'created_at' => $item->created_at,
                ]);
            }
        }
        if($type=='allTecherTulov'){
            foreach(MarkazIshHaqi::where('markaz_id',auth()->user()->markaz_id)->where('typing', 'Techer')->get() as $item){
                array_push($Search, [
                    'name' => User::find($item->user_id)->name,
                    'summa' => $item->summa,
                    'type' => $item->type,
                    'guruh_name' => $item->guruh_name,
                    'comment' => $item->comment,
                    'meneger' => $item->meneger,
                    'created_at' => $item->created_at,
                ]);
            }
        }
        return view('meneger.report.hodimlar_search',compact('type','Search'));
    }
    public function moliya(){
        return view('meneger.report.moliya');
    }
    public function moliyaSearch(Request $request){
        $validate = $request->validate([
            'type' => 'required'
        ]);
        $type = $request->type;
        $Search = array();
        if($type=='allPaymarty'){
            $UserPaymart = UserPaymart::where('markaz_id',auth()->user()->markaz_id)->get();
            foreach ($UserPaymart as $key => $value) {
                $newPay = ([
                    'user_id'=>$value->user_id,
                    'name'=>User::find($value->user_id)->name,
                    'summa'=>$value->summa,
                    'tulov_type'=>$value->tulov_type,
                    'guruh'=>$value->guruh=='NULL'?" ":$value->guruh,
                    'comment'=>$value->comment,
                    'meneger'=>$value->meneger,
                    'created_at'=>$value->created_at,
                ]);
                array_push($Search,$newPay);
            }
        }
        if($type=='kassadanChiqim'){
            $UserPaymart = KassaKirimChiqim::where('markaz_id',auth()->user()->markaz_id)->where('hodisa','Kassadan Chiqim')->where('status','true')->get();
            foreach ($UserPaymart as $key => $value) {
                $newPay = ([
                    'hodisa'=>$value->hodisa,
                    'summa'=>$value->summa,
                    'type'=>$value->type,
                    'status'=>$value->status,
                    'comment'=>$value->comment,
                    'meneger'=>$value->meneger,
                    'administrator'=>$value->administrator,
                    'created_at'=>$value->created_at,
                    'updated_at'=>$value->updated_at,
                ]);
                array_push($Search,$newPay);
            }
        }
        if($type=='KassadanXarajat'){
            $UserPaymart = KassaKirimChiqim::where('markaz_id',auth()->user()->markaz_id)->where('hodisa','Kassadan Xarajat')->where('status','true')->get();
            foreach ($UserPaymart as $key => $value) {
                $newPay = ([
                    'hodisa'=>$value->hodisa,
                    'summa'=>$value->summa,
                    'type'=>$value->type,
                    'status'=>$value->status,
                    'comment'=>$value->comment,
                    'meneger'=>$value->meneger,
                    'administrator'=>$value->administrator,
                    'created_at'=>$value->created_at,
                    'updated_at'=>$value->updated_at,
                ]);
                array_push($Search,$newPay);
            }
        }
        if($type=='KassagaQaytarIshHaqi'){
            $UserPaymart = KassaKirimChiqim::where('markaz_id',auth()->user()->markaz_id)->where('hodisa','Balandan ish haqi kassaga qaytarildi.')->where('status','true')->get();
            foreach ($UserPaymart as $key => $value) {
                $newPay = ([
                    'hodisa'=>$value->hodisa,
                    'summa'=>$value->summa,
                    'type'=>$value->type,
                    'status'=>$value->status,
                    'comment'=>$value->comment,
                    'meneger'=>$value->meneger,
                    'administrator'=>$value->administrator,
                    'created_at'=>$value->created_at,
                    'updated_at'=>$value->updated_at,
                ]);
                array_push($Search,$newPay);
            }
        }
        if($type=='KassadanBalansgaIshHaqi'){
            $UserPaymart = KassaKirimChiqim::where('markaz_id',auth()->user()->markaz_id)->where('hodisa','Kassadan ish haqi balansga qaytarildi.')->where('status','true')->get();
            foreach ($UserPaymart as $key => $value) {
                $newPay = ([
                    'hodisa'=>$value->hodisa,
                    'summa'=>$value->summa,
                    'type'=>$value->type,
                    'status'=>$value->status,
                    'comment'=>$value->comment,
                    'meneger'=>$value->meneger,
                    'administrator'=>$value->administrator,
                    'created_at'=>$value->created_at,
                    'updated_at'=>$value->updated_at,
                ]);
                array_push($Search,$newPay);
            }
        }
        if($type=='KassagaQaytar'){
            $UserPaymart = KassaKirimChiqim::where('markaz_id',auth()->user()->markaz_id)->where('hodisa','Balansdan kassaga qaytarildi.')->where('status','true')->get();
            foreach ($UserPaymart as $key => $value) {
                $newPay = ([
                    'hodisa'=>$value->hodisa,
                    'summa'=>$value->summa,
                    'type'=>$value->type,
                    'status'=>$value->status,
                    'comment'=>$value->comment,
                    'meneger'=>$value->meneger,
                    'administrator'=>$value->administrator,
                    'created_at'=>$value->created_at,
                    'updated_at'=>$value->updated_at,
                ]);
                array_push($Search,$newPay);
            }
        }
        if($type=='BalansdanXarajat'){
            $UserPaymart = KassaKirimChiqim::where('markaz_id',auth()->user()->markaz_id)->where('hodisa','Balansdan xarajat.')->where('status','true')->get();
            foreach ($UserPaymart as $key => $value) {
                $newPay = ([
                    'hodisa'=>$value->hodisa,
                    'summa'=>$value->summa,
                    'type'=>$value->type,
                    'status'=>$value->status,
                    'comment'=>$value->comment,
                    'meneger'=>$value->meneger,
                    'administrator'=>$value->administrator,
                    'created_at'=>$value->created_at,
                    'updated_at'=>$value->updated_at,
                ]);
                array_push($Search,$newPay);
            }
        }
        if($type=='BalansdanChiqim'){
            $UserPaymart = KassaKirimChiqim::where('markaz_id',auth()->user()->markaz_id)->where('hodisa','Balansdan Chiqim.')->where('status','true')->get();
            foreach ($UserPaymart as $key => $value) {
                $newPay = ([
                    'hodisa'=>$value->hodisa,
                    'summa'=>$value->summa,
                    'type'=>$value->type,
                    'status'=>$value->status,
                    'comment'=>$value->comment,
                    'meneger'=>$value->meneger,
                    'administrator'=>$value->administrator,
                    'created_at'=>$value->created_at,
                    'updated_at'=>$value->updated_at,
                ]);
                array_push($Search,$newPay);
            }
        }
        return view('meneger.report.moliya_search',compact('type','Search'));
    }
    protected function Monch(){
        $months = collect();
        for ($i = 0; $i < 12; $i++) {
            $date = Carbon::now()->subMonths($i);
            $months->push([
                'Y-m' => $date->format('Y-m'),
                'Y-M' => $date->format('M-Y'),
            ]);
        }
        $months = $months->reverse()->values();
        return $months;
    }
    public function active(){
        $Monch = $this->Monch();
        return view('meneger.report.actev_user',compact('Monch'));
    }
    public function activeSearch(Request $request){
        $Monch = $this->Monch();
        $validate = $request->validate([
            'data' => 'required'
        ]);
        $data = $request->data;
        $start = $data."01";
        $end = $data."31";
        $Search = array();
        $Guruh_id =array();
        $Grops = Grops::where('markaz_id',auth()->user()->markaz_id)->where('guruh_start','<=',$end)->where('guruh_end','>=',$start)->get();
        foreach ($Grops as $key => $value) {
            array_push($Guruh_id,$value->id);
        }
        $UserID = array();
        $k = 0;
        foreach ($Guruh_id as  $value) {
            $UserGroup = UserGroup::where('grops_id',$value)->where('status','true')->get();
            foreach($UserGroup as $key => $item){
                $UserID[$k]['user_id'] = $item->user_id;
                $UserID[$k]['guruh_id'] = $value;
                $k = $k+1;
            }
        }
        foreach($UserID as $key => $item){
            $Search[$key]['user'] = User::find($item['user_id']);
            $Search[$key]['guruh'] = Grops::find($item['guruh_id']);
        }
        return view('meneger.report.actev_user_search',compact('Monch','data','Search'));
    }
}
