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
    public function active(){
        return view('meneger.report.actev_user');
    }
}
