<?php

namespace App\Http\Controllers;
use App\Models\Markaz;
use App\Models\User;
use App\Models\UserGroup;
use App\Models\Grops;
use App\Models\UserTest;
use App\Models\GropsTime;
use App\Models\MarkazIshHaqi;
use Illuminate\Http\Request;

class TecherController extends Controller
{
    public function index(){
        $Markaz = Markaz::find(auth()->user()->markaz_id);
        $Grops = Grops::where('techer_id',auth()->user()->id)->get();
        $start = 0;
        $nev = 0;
        $end = 0;
        foreach ($Grops as $key => $value) {
            if($value->guruh_end < date('Y-m-d')){
                $end = $end + 1;
            }elseif($value->guruh_start>date('Y-m-d')){
                $nev = $nev + 1;
            }else{
                $start = $start + 1;
            }
        }
        $stat = array();
        $stat['activ'] = $start;
        $stat['nev'] = $nev;
        $stat['end'] = $end;
        return view('techer.index',compact('Markaz','stat'));
    }
    public function guruhs(){
        $Grops = Grops::where('techer_id',auth()->user()->id)->get();
        return view('techer.guruhs',compact('Grops'));
    }
    public function guruh($id){
        $Grops = Grops::find($id);
        $GropsTime = GropsTime::where('grops_id',$id)->get();
        $UserTest = UserTest::where('cours_id',$id)->get();
        $test = array();
        foreach ($UserTest as $key => $value) {
            $test[$key]['user'] = User::find($value->user_id)->name;
            $test[$key]['count'] = $value->count;
            $test[$key]['ball'] = $value->ball;
            $test[$key]['urinish'] = $value->urinish;
        }
        $users = array();
        $UserGroup = UserGroup::where('grops_id',$id)->where('status','true')->get();
        foreach ($UserGroup as $key => $value) {
            $users[$key]['id'] =$value->user_id;
            $users[$key]['name'] = User::find($value->user_id)->name;
        }
        //dd($users);
        return view('techer.guruh',compact('Grops','GropsTime','test','users'));
    }
    public function paymart(){
        $MarkazIshHaqi = MarkazIshHaqi::where('user_id',auth()->user()->id)->where('typing','Techer')->get();
        return view('techer.paymart',compact('MarkazIshHaqi'));
    }
    public function profel(){
        return view('techer.profel');
    }
}
