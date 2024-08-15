<?php

namespace App\Http\Controllers;
use App\Models\Markaz;
use App\Models\Grops;
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
        return view('techer.guruh');
    }
    public function paymart(){
        $MarkazIshHaqi = MarkazIshHaqi::where('user_id',auth()->user()->id)->where('typing','Techer')->get();
        return view('techer.paymart',compact('MarkazIshHaqi'));
    }
    public function profel(){
        return view('techer.profel');
    }
}
