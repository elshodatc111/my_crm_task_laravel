<?php

namespace App\Http\Controllers;
use App\Models\Markaz;
use App\Models\User;
use App\Models\UserGroup;
use App\Models\Grops;
use App\Models\UserTest;
use App\Models\Davomat;
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
        $Davomats = array();
        $UserGroup = UserGroup::where('grops_id',$id)->where('status','true')->get();
        foreach ($UserGroup as $key => $value) {
            $users[$key]['id'] =$value->user_id;
            $users[$key]['name'] = User::find($value->user_id)->name;

            $Davomats['user_id'] = $value->user_id;
            foreach ($GropsTime as $key2 => $item) {
                $SX = count(Davomat::where('guruh_id',$id)->where('data',$item['data'])->where('user_id',$value->user_id)->get());
                if(date('Y-m-d')<$item['data']){
                    $Davomats[$value->user_id][$key2]['status'] = 'pedding';
                }elseif($SX){
                    $Davomats[$value->user_id][$key2]['status'] = 'true';
                }else{
                    $Davomats[$value->user_id][$key2]['status'] = 'false';
                }
            }
        }
        $davomat = 0;
        foreach ($GropsTime as $key => $value) {
            if($value->data == date('Y-m-d')){
                $davomat = 1;
            }
        }
        $Davomat = Davomat::where('guruh_id',$id)->where('data',date('Y-m-d'))->get();
        if(count($Davomat)>0){
            $davomat = 0;
        }

        return view('techer.guruh',compact('Grops','GropsTime','test','users','davomat','Davomats'));
    }
    public function davomat(Request $request){
        $grops_id = $request->guruh_id;
        $UserGroup = UserGroup::where('grops_id',$grops_id)->where('status','true')->get();
        $t = 0;
        foreach ($UserGroup as $key => $value) {
            $user_id = 'id'.$value->user_id;
            if($request[$user_id]){
                $t = $t + 1;
                Davomat::create([
                    'markaz_id' => auth()->user()->markaz_id,
                    'guruh_id' => $grops_id,
                    'user_id' => $value->user_id,
                    'data' => date('Y-m-d'),
                ]);
            }
        }
        return redirect()->back()->with('success', $t.' ta talaba darsga qatnashmoqda.');
    }
    public function paymart(){
        $MarkazIshHaqi = MarkazIshHaqi::where('user_id',auth()->user()->id)->where('typing','Techer')->get();
        return view('techer.paymart',compact('MarkazIshHaqi'));
    }
    public function profel(){
        return view('techer.profel');
    }
}
