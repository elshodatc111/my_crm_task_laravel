<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Grops;
use App\Models\Markaz;
use App\Models\MarkazRoom;
use App\Models\MarkazCours;
use App\Models\MarkazPaymart;
use App\Models\GropsTime;
use App\Models\DamOlish;
use App\Models\MarkazLessenTime;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class GropsController extends Controller{
    public function allGroups(){
        return view('meneger.groups.groups');
    }
    public function ebdGroups(){
        dd("All Groups");
    }
    public function createGroups(){
        $MarkazPaymart = MarkazPaymart::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->get();
        $Techer = User::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->where('role_id',5)->get();
        $Cours = MarkazCours::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->get();
        $Markaz = Markaz::find(auth()->user()->markaz_id)->paymart;
        return view('meneger.groups.create',compact('MarkazPaymart','Techer','Cours','Markaz'));
    }
    protected function toqKunlar($StartData, $type, $count){
        $startTimestamp = strtotime($StartData);
        $endTimestamp = strtotime('+90 day',$startTimestamp);
        $i = 1;
        if($type=='toq_kun'){
            $Juft = [1, 3, 5];
        }elseif($type=='juft_kun'){
            $Juft = [2, 4, 6];
        }else{
            $Juft = [1, 2, 3, 4, 5, 6];
        }
        $dates = array();
        while ($startTimestamp <= $endTimestamp) {
            $currentDayOfWeek = date('N', $startTimestamp);
            if (in_array($currentDayOfWeek, $Juft)) {
                $DamOlish = DamOlish::where('data',date('Y-m-d', $startTimestamp))->first();
                if(!$DamOlish){
                    $dates[$i]['data'] = date('Y-m-d', $startTimestamp);
                    if(date('l', $startTimestamp)=='Monday'){
                        $dates[$i]['kun'] = "Dushanba";
                    }elseif(date('l', $startTimestamp)=='Tuesday'){
                        $dates[$i]['kun'] = "Seshanba";
                    }elseif(date('l', $startTimestamp)=='Wednesday'){
                        $dates[$i]['kun'] = "Chorshanba";
                    }elseif(date('l', $startTimestamp)=='Thursday'){
                        $dates[$i]['kun'] = "Payshanba";
                    }elseif(date('l', $startTimestamp)=='Friday'){
                        $dates[$i]['kun'] = "Juma";
                    }elseif(date('l', $startTimestamp)=='Saturday'){
                        $dates[$i]['kun'] = "Shanba";
                    }
                    $i = $i+1;
                }
                if($i==$count+1){break;}
            }
            $startTimestamp = strtotime('+1 day', $startTimestamp);
        }
        return $dates;
    }
    public function createGroupsStoryOne(Request $request){
        $today = now()->format('Y-m-d');
        $validate = $request->validate([
            'guruh_name' => 'required',
            'tulov_id' => 'required',
            'dars_count' => 'required',
            'guruh_start' => ['nullable', 'date', 'after_or_equal:' . $today],
            'hafta_kun' => 'required',
            'cours_id' => 'required',
            'techer_id' => 'required',
        ]);
        Cache::pull(auth()->user()->id.'NewGrop');
        Cache::pull(auth()->user()->id.'Data');
        $Dars_kunlari = $this->toqKunlar($request->guruh_start,$request->hafta_kun,$request->dars_count);
        $Guruh = array();
        $Guruh['guruh_name'] = $request->guruh_name;
        $Guruh['tulov_id'] = $request->tulov_id;
        $Guruh['summa'] = MarkazPaymart::find($request->tulov_id)->summa;
        $Guruh['chegirma'] = MarkazPaymart::find($request->tulov_id)->chegirma;
        $Guruh['admin_chegirma'] = MarkazPaymart::find($request->tulov_id)->admin_chegirma;
        $Guruh['chegirma_time'] = MarkazPaymart::find($request->tulov_id)->chegirma_time;
        $Guruh['dars_count'] = $request->dars_count;
        $Guruh['guruh_start'] = $request->guruh_start;
        $Guruh['guruh_end'] = $Dars_kunlari[$request->dars_count]['data'];
        if($request->hafta_kun=='toq_kun'){ $kun = "Toq kunlar"; }elseif($request->hafta_kun=='juft_kun'){$kun = "Juft kunlar";}else{$kun = "Har kuni";}
        $Guruh['hafta_kun2'] = $kun;
        $Guruh['hafta_kun'] = $request->hafta_kun;
        $Guruh['dars_count'] = $request->dars_count;
        $Guruh['cours_id'] = $request->cours_id;
        $Guruh['cours_name'] = MarkazCours::find($request->cours_id)->cours_name;
        $Guruh['techer_id'] = $request->techer_id;
        $Guruh['techer'] = User::find($request->techer_id)->name;
        if($request->techer_paymart){$techer_paymart = preg_replace('/\D/','',$request->techer_paymart);}else{$techer_paymart = 0;}
        $Guruh['techer_paymart'] = $techer_paymart;
        if($request->techer_bonus){$techer_bonus = preg_replace('/\D/','',$request->techer_bonus);}else{$techer_bonus = 0;}
        $Guruh['techer_bonus'] = $techer_bonus;
        if($request->techer_foiz){$techer_foiz = $request->techer_foiz;}else{$techer_foiz = 0;}
        $Guruh['techer_foiz'] = $techer_foiz;
        Cache::add(auth()->user()->id.'NewGrop', $Guruh, now()->addSeconds(86400));
        Cache::add(auth()->user()->id.'Data', $Dars_kunlari, now()->addSeconds(86400));
        return redirect()->route('meneger_groups_create_two');
    }
    public function darsvaqtlari($room_id){
        $DarsKunlari = Cache::get(auth()->user()->id.'Data');
        $DarsVaqtlari = MarkazLessenTime::where('markaz_id',auth()->user()->markaz_id)->get();
        $res = array();
        foreach ($DarsVaqtlari as $key => $vaqt) {
            $i=0;
            $Vaqti = $vaqt['time'];
            foreach ($DarsKunlari as $data) {
                $VaqtBand = GropsTime::where('room_id',$room_id)->where('data',$data['data'])->where('time',$vaqt['time'])->first();
                if($VaqtBand){
                    $i=$i+1;
                }
            }
            if($i==0){
                $res[$key]['time'] = $vaqt->time;
            }
        }
        return response()->json($res);
    }
    public function createGroupsTwo(){
        if (!Cache::has(auth()->user()->id.'NewGrop')) {return redirect()->route('meneger_groups_create')->with('success', "Vaqt tugadi. Ma'lumotlarni qaytadan kiriting");}
        if (!Cache::has(auth()->user()->id.'Data')) {return redirect()->route('meneger_groups_create')->with('success', "Vaqt tugadi. Ma'lumotlarni qaytadan kiriting");}
        $guruh = Cache::get(auth()->user()->id.'NewGrop');
        $datas = Cache::get(auth()->user()->id.'Data');
        $xonalar = MarkazRoom::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->get();
        $markaz = Markaz::find(auth()->user()->markaz_id)->paymart;
        return view('meneger.groups.create2',compact('guruh','datas','xonalar','markaz'));
    }
    public function createGroupsStoreTwo(Request $request){
        if (!Cache::has(auth()->user()->id.'NewGrop')) {return redirect()->route('meneger_groups_create')->with('success', "Vaqt tugadi. Ma'lumotlarni qaytadan kiriting");}
        if (!Cache::has(auth()->user()->id.'Data')) {return redirect()->route('meneger_groups_create')->with('success', "Vaqt tugadi. Ma'lumotlarni qaytadan kiriting");}
        $Guruh = array();
        $Guruh = Cache::get(auth()->user()->id.'NewGrop');
        $Guruh['room_id'] = $request->room_id;
        $Guruh['dars_time'] = $request->dars_time;
        $Guruxs = Grops::create([
            'markaz_id'=>auth()->user()->markaz_id,
            'tulov_id'=>$Guruh['tulov_id'],
            'room_id'=>$Guruh['room_id'],
            'cours_id'=>$Guruh['cours_id'],
            'techer_id'=>$Guruh['techer_id'],
            'guruh_name'=>strtoupper($Guruh['guruh_name']),
            'guruh_start'=>$Guruh['guruh_start'],
            'guruh_end'=>$Guruh['guruh_end'],
            'hafta_kun'=>$Guruh['hafta_kun'],
            'dars_count'=>$Guruh['dars_count'],
            'techer_foiz'=>$Guruh['techer_foiz'],
            'techer_paymart'=>$Guruh['techer_paymart'],
            'techer_bonus'=>$Guruh['techer_bonus'],
            'dars_time'=>$Guruh['dars_time'],
            'next_id'=>'false',
            'meneger'=>auth()->user()->email,
        ]);
        $datas = Cache::get(auth()->user()->id.'Data');
        foreach($datas as $item){
            GropsTime::create([
                'markaz_id'=>auth()->user()->markaz_id,
                'room_id'=>$Guruh['room_id'],
                'grops_id'=>$Guruxs->id,
                'data'=>$item['data'],
                'time'=>$Guruh['dars_time'],
            ]);
        }
        return redirect()->route('meneger_groups_show',$Guruxs->id)->with('success', "Yangi guruh ochildi");
    }
    public function showGroups($id){
        $Grops = Grops::find($id);
        $guruh = array();
        $guruh['id'] = $id;
        $guruh['paymart'] = MarkazPaymart::find($Grops->tulov_id);
        $guruh['room_name'] = MarkazRoom::find($Grops->room_id)->room_name;
        $guruh['cours_name'] = MarkazCours::find($Grops->cours_id)->cours_name;
        $guruh['guruh_start'] = $Grops->guruh_start;
        $guruh['guruh_end'] = $Grops->guruh_end;
        $guruh['hafta_kun'] = $Grops->hafta_kun;
        $guruh['dars_count'] = $Grops->dars_count;
        $guruh['dars_time'] = $Grops->dars_time;
        $guruh['dars_data'] = GropsTime::where('grops_id',$id)->orderby('data','asc')->get();
        $guruh['next_id'] = $Grops->next_id;
        $guruh['techer'] = User::find($Grops->techer_id)->name;
        $guruh['techer_tulov'] = Markaz::find(auth()->user()->markaz_id)->paymart;
        $guruh['techer_foiz'] = $Grops->techer_foiz;
        $guruh['techer_paymart'] = $Grops->techer_paymart;
        $guruh['techer_bonus'] = $Grops->techer_bonus;
        $guruh['meneger'] = $Grops->meneger;
        $guruh['created_at'] = $Grops->created_at;
        $guruh['updated_at'] = $Grops->updated_at;

        return view('meneger.groups.group_show',compact('guruh'));
    }
}
