<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarkazRoom;
use App\Models\Grops;
use App\Models\GropsTime;
use App\Models\MarkazLessenTime;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
class DarsJadvalController extends Controller
{
    protected function daysTime(){
        $days = collect();
        for ($i = -2; $i < 28; $i++) {
            $date = Carbon::now()->addDays($i);
            $days->push([
                'Y-m-d' => $date->format('Y-m-d'),
                'M-d' => $date->format('M-d'),
            ]);
        }
        return $days;
    }
    public function darsJadval(){
        $Room = Cache::remember(auth()->user()->markaz_id."Room",600,function(){
            $MarkazRoom = MarkazRoom::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->get();
            $Room = array();
            foreach ($MarkazRoom as $key => $value) {
                $Room[$key]['room_name'] = $value->room_name;
                $times = array();
                foreach (MarkazLessenTime::where('markaz_id',auth()->user()->markaz_id)->get() as $t => $time) {
                    $times[$t] = $time['time'];
                }
                $Room[$key]['times'] = $times;
                $kunlar = array();
                $soat = array();
                foreach ($this->daysTime() as $key1 => $item) {
                    $kunlar[$key1] = $item['M-d'];
                    $room_data =  $item['Y-m-d'];
                    $soat_time = array();
                    foreach ($times as $key2 => $value2) {
                        $time2 = $value2;
                        $GropsTime = GropsTime::where('room_id',$value->id)->where('data',$room_data)->where('time',$time2)->first();
                        if($GropsTime){
                            $soat_time[$key2]['guruh_id'] = $GropsTime->grops_id;
                            $soat_time[$key2]['guruh_name'] = Grops::find($GropsTime->grops_id)->guruh_name;
                        }else{
                            $soat_time[$key2]['guruh_id'] = "NULL";
                            $soat_time[$key2]['guruh_name'] = "NULL";
                        }
                    }
                    $soat[$key1] = $soat_time;
                }
                $Room[$key]['data'] = $kunlar;
                $Room[$key]['about'] = $soat;
            }
            return $Room;
        });
        return view('meneger.dars_jadval.jadval',compact('Room'));
    }
}
