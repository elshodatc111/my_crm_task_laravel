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
use App\Models\UserHistory;
use App\Models\MarkazLessenTime;
use App\Models\UserGroup;
use App\Models\UserTest;
use App\Jobs\SendMessage;
use App\Models\Davomat;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class GropsController extends Controller{
    public function allGroups(){
        $Grops = Grops::where('markaz_id',auth()->user()->markaz_id)->where('guruh_end','>=',Carbon::now()->subDays(30)->format('Y-m-d'))->get();
        $Guruh = array();
        foreach ($Grops as $key => $value) {
            $UserCount = count(UserGroup::where('grops_id',$value->id)->where('status','true')->get());
            if($value->guruh_start>date('Y-m-d')){
                $Status = 'new';
            }elseif($value->guruh_end<date('Y-m-d')){
                $Status = 'end';
            }else{
                $Status = 'activ';
            }
            $Guruh[$key]['id']=$value->id;
            $Guruh[$key]['guruh_name']=$value->guruh_name;
            $Guruh[$key]['guruh_start']=$value->guruh_start;
            $Guruh[$key]['guruh_end']=$value->guruh_end;
            $Guruh[$key]['room']=MarkazRoom::where('id',$value->room_id)->first()->room_name;
            $Guruh[$key]['dars_time']=$value->dars_time;
            $Guruh[$key]['users']=$UserCount;
            $Guruh[$key]['status']=$Status;
        }
        return view('meneger.groups.groups',compact('Guruh'));
    }
    public function ebdGroups(){
        $Grops = Grops::where('markaz_id',auth()->user()->markaz_id)->where('guruh_end','<',date('Y-m-d'))->get();
        $Guruh = array();
        foreach ($Grops as $key => $value) {
            $UserCount = count(UserGroup::where('grops_id',$value->id)->where('status','true')->get());
            $Guruh[$key]['id']=$value->id;
            $Guruh[$key]['guruh_name']=$value->guruh_name;
            $Guruh[$key]['guruh_start']=$value->guruh_start;
            $Guruh[$key]['guruh_end']=$value->guruh_end;
            $Guruh[$key]['room']=MarkazRoom::where('id',$value->room_id)->first()->room_name;
            $Guruh[$key]['dars_time']=$value->dars_time;
            $Guruh[$key]['users']=$UserCount;
        }
        return view('meneger.groups.group_end',compact('Guruh'));
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
        $GuruhUsers = UserGroup::where('grops_id',$id)->get();
        $GU = array();
        foreach($GuruhUsers as $key => $item){
            if(!User::find($item->user_id)){
                $name1 = "Null";
            }else{
                $name1 = User::find($item->user_id)->name;
            }
            $GU[$key]['User'] = $item;
            $GU[$key]['UserName'] = $name1;
        }
        $guruh = array();
        $guruh['id'] = $id;
        $UserTest = UserTest::where('cours_id',$id)->get();
        $UserTestCount = array();
        foreach ($UserTest as $key => $value) {
            $UserTestCount[$key]['user_id'] = $value->user_id;
            $UserTestCount[$key]['user'] = User::find($value->user_id)->name;
            $UserTestCount[$key]['count'] = $value->count;
            $UserTestCount[$key]['ball'] = $value->ball;
            $UserTestCount[$key]['urinish'] = $value->urinish;
            $UserTestCount[$key]['created_at'] = $value->created_at;
            $UserTestCount[$key]['updated_at'] = $value->updated_at;
        }
        $guruh['paymart'] = MarkazPaymart::find($Grops->tulov_id);
        $guruh['room_name'] = MarkazRoom::find($Grops->room_id)->room_name;
        $guruh['cours_name'] = MarkazCours::find($Grops->cours_id)->cours_name;
        $guruh['guruh_name'] = $Grops->guruh_name;
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
        $guruh['users'] = $GU;
        if($guruh['next_id']!=='false'){
            $guruh['newGroup'] = Grops::find($guruh['next_id'])->guruh_name;
            $guruh['newGroupID'] = Grops::find($guruh['next_id'])->id;
        }else{
            $guruh['newGroup'] = null;
            $guruh['newGroupID'] = null;
        }
        $guruh['users_active'] = UserGroup::where('user_groups.grops_id',$id)->where('user_groups.status','true')->join('users','users.id','user_groups.user_id')->get();
        $DAVOMAT = array();
        foreach ($guruh['users_active'] as $key => $value) {
            $DAVOMAT[$key]['user_name'] = $value->name;
            foreach ($guruh['dars_data'] as $key2 => $value2) {
                if($value2->data>date('Y-m-d')){
                    $DAVOMAT[$key]['check'][$key2] = 'pedding';
                }else{
                    $Davomat = Davomat::where('guruh_id',$id)->where('data',$value2['data'])->first();
                    if($Davomat){
                        $user_id = $value->user_id;
                        $guruh_id = $id;
                        $datass = $value2['data'];
                        $DavomatTrue = count(Davomat::where('guruh_id',$guruh_id)->where('data',$datass)->where('user_id',$user_id)->get());
                        if($DavomatTrue>0){
                            $DAVOMAT[$key]['check'][$key2] = 'true';
                        }else{
                            $DAVOMAT[$key]['check'][$key2] = 'false';
                        }
                    }else{
                        $DAVOMAT[$key]['check'][$key2] = 'close';
                    }
                }
            }
        }
        $Markaz = Markaz::find(auth()->user()->markaz_id);
        //dd($DAVOMAT);
        $Kurslar = MarkazCours::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->get();
        $Techers = User::where('role_id',5)->where('status','true')->where('markaz_id',auth()->user()->markaz_id)->get();
        $Tulovlar = MarkazPaymart::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->get();
        return view('meneger.groups.group_show',compact('guruh','UserTestCount','DAVOMAT','Markaz','Kurslar','Techers','Tulovlar'));
    }
    public function createNextGroups($id){
        $Grops = Grops::find($id);
        $guruh = array();
        $guruh['id'] = $id;
        $guruh['paymart'] = MarkazPaymart::find($Grops->tulov_id);
        $guruh['room_name'] = MarkazRoom::find($Grops->room_id)->room_name;
        $guruh['cours_name'] = MarkazCours::find($Grops->cours_id)->cours_name;
        $guruh['guruh_name'] = $Grops->guruh_name;
        $guruh['guruh_start'] = $Grops->guruh_start;
        $guruh['guruh_end'] = $Grops->guruh_end;
        $guruh['hafta_kun'] = $Grops->hafta_kun;
        $guruh['dars_count'] = $Grops->dars_count;
        $guruh['dars_time'] = $Grops->dars_time;
        $guruh['next_id'] = $Grops->next_id;
        $guruh['techer'] = User::find($Grops->techer_id)->name;
        $guruh['techer_tulov'] = Markaz::find(auth()->user()->markaz_id)->paymart;
        $guruh['techer_foiz'] = $Grops->techer_foiz;
        $guruh['techer_paymart'] = $Grops->techer_paymart;
        $guruh['techer_bonus'] = $Grops->techer_bonus;
        $guruh['meneger'] = $Grops->meneger;
        $guruh['created_at'] = $Grops->created_at;
        $MarkazPaymart = MarkazPaymart::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->get();
        $Techer = User::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->where('role_id',5)->get();
        $Cours = MarkazCours::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->get();
        $Markaz = Markaz::find(auth()->user()->markaz_id)->paymart;
        return view('meneger.groups.create_next',compact('guruh','MarkazPaymart','Cours','Techer','Markaz'));
    }
    public function createNextStoryGroups(Request $request){
        $givenDate = Grops::find($request->id)->guruh_end;
        $date = Carbon::parse($givenDate);
        $nextDay = $date->addDay()->toDateString();
        $validate = $request->validate([
            'id' => 'required',
            'guruh_name' => 'required',
            'guruh_start' => 'required',
            'dars_count' => 'required',
            'guruh_start' => ['nullable', 'date', 'after_or_equal:' . $nextDay],
            'cours_id' => 'required',
            'tulov_id' => 'required',
            'techer_id' => 'required',
        ]);
        if($request->techer_foiz){
            $validate['techer_foiz'] = $request->techer_foiz;
        }else{
            $validate['techer_foiz'] = 0;
        }
        if($request->techer_paymart){
            $validate['techer_paymart'] = $request->techer_paymart;
        }else{
            $validate['techer_paymart'] = 0;
        }
        if($request->techer_bonus){
            $validate['techer_bonus'] = $request->techer_bonus;
        }else{
            $validate['techer_bonus'] = 0;
        }
        $ArxivGroups = Grops::find($validate['id']);
        $validate['room'] = MarkazRoom::find($ArxivGroups['room_id'])->room_name;
        $validate['room_id'] = $ArxivGroups['room_id'];
        $validate['hafta_kun'] = $ArxivGroups['hafta_kun'];
        $validate['cours_name'] = MarkazCours::find($ArxivGroups['cours_id'])->cours_name;
        $validate['dars_time'] = $ArxivGroups['dars_time'];
        $validate['summa'] = MarkazPaymart::find($ArxivGroups['tulov_id'])->summa;
        $validate['chegirma'] = MarkazPaymart::find($ArxivGroups['tulov_id'])->chegirma;
        $validate['admin_chegirma'] = MarkazPaymart::find($ArxivGroups['tulov_id'])->admin_chegirma;
        $validate['chegirma_time'] = MarkazPaymart::find($ArxivGroups['tulov_id'])->chegirma_time;
        $validate['techer'] = User::find($ArxivGroups['techer_id'])->name;
        Cache::pull(auth()->user()->id.'NewGropNext');
        Cache::pull(auth()->user()->id.'DataNext');
        $type = Grops::find($request->id)->hafta_kun;
        $Dars_kunlar = $this->toqKunlar($request->guruh_start, $type, $request->dars_count);
        $validate['guruh_end'] = $Dars_kunlar[$validate['dars_count']]['data'];
        Cache::add(auth()->user()->id.'NewGropNext', $validate, now()->addSeconds(86400));
        Cache::add(auth()->user()->id.'DataNext', $Dars_kunlar, now()->addSeconds(86400));
        return redirect()->route('meneger_groups_next_create_two');
    }
    public function createNextTwoGroups(){
        $guruh = Cache::get(auth()->user()->id.'NewGropNext');
        $datas = Cache::get(auth()->user()->id.'DataNext');
        $Markaz = Markaz::find(auth()->user()->markaz_id)->paymart;
        $Users = UserGroup::where('user_groups.grops_id',$guruh['id'])->where('user_groups.status','true')->join('users','users.id','user_groups.user_id')->get();
        return view('meneger.groups.create_next_two',compact('guruh','Markaz','datas','Users'));
    }
    public function createNextStoryEnd(Request $request){
        $guruh = Cache::get(auth()->user()->id.'NewGropNext');
        $datas = Cache::get(auth()->user()->id.'DataNext');
        $Users = UserGroup::where('user_groups.grops_id',$guruh['id'])->where('user_groups.status','true')->get();
        $AddGuruhUser = array();
        $Guruxs = Grops::create([
            'markaz_id'=>auth()->user()->markaz_id,
            'tulov_id'=>$guruh['tulov_id'],
            'room_id'=>$guruh['room_id'],
            'cours_id'=>$guruh['cours_id'],
            'techer_id'=>$guruh['techer_id'],
            'guruh_name'=>strtoupper($guruh['guruh_name']),
            'guruh_start'=>$guruh['guruh_start'],
            'guruh_end'=>$guruh['guruh_end'],
            'hafta_kun'=>$guruh['hafta_kun'],
            'dars_count'=>$guruh['dars_count'],
            'techer_foiz'=>$guruh['techer_foiz'],
            'techer_paymart'=>$guruh['techer_paymart'],
            'techer_bonus'=>$guruh['techer_bonus'],
            'dars_time'=>$guruh['dars_time'],
            'next_id'=>'false',
            'meneger'=>auth()->user()->email,
        ]);
        foreach($datas as $item){
            GropsTime::create([
                'markaz_id'=>auth()->user()->markaz_id,
                'room_id'=>$guruh['room_id'],
                'grops_id'=>$Guruxs->id,
                'data'=>$item['data'],
                'time'=>$guruh['dars_time'],
            ]);
        }
        foreach ($Users as $value) {
            $User = User::find($value->user_id);
            $query = 'user'.$value->user_id;
            echo $value->user_id;
            if($request[$query]){
                UserGroup::create([
                    'markaz_id' => auth()->user()->markaz_id,
                    'user_id' => $User->id,
                    'grops_id' => $Guruxs->id,
                    'grops_start_data' => date('Y-m-d'),
                    'grops_end_data' => '...',
                    'grops_start_comment' => "Eski guruhdan ko'chirildi",
                    'grops_start_meneger' => auth()->user()->email,
                ]);
                UserHistory::create([
                    'markaz_id' => auth()->user()->markaz_id,
                    'user_id' => $User->id,
                    'status' => "Guruhga qo'shildi",
                    'guruh' => $Guruxs->guruh_name,
                    'summa' => number_format(MarkazPaymart::find($Guruxs->tulov_id)->summa, 0, '.', ' '),
                    'tulov_type' => '-',
                    'comment' => "Eski guruhdan ko'chirildi",
                    'xisoblash' => number_format($User->balans, 0, '.', ' ')." - ".number_format(MarkazPaymart::find($Guruxs->tulov_id)->summa, 0, '.', ' ')." = ".number_format($User->balans - MarkazPaymart::find($Guruxs->tulov_id)->summa, 0, '.', ' '),
                    'balans' => number_format($User->balans - MarkazPaymart::find($Guruxs->tulov_id)->summa, 0, '.', ' '),
                    'meneger' => auth()->user()->email,
                ]);
                $User->balans = $User->balans - MarkazPaymart::find($Guruxs->tulov_id)->summa;
                $User->save();
            }
        }
        $Grops1 = Grops::find($guruh['id']);
        $Grops1->next_id = $Guruxs->id;
        $Grops1->save();
        return redirect()->route('meneger_groups_show',$Guruxs->id)->with('success', "Yangi guruh ochildi");
    }
    public function groupsUpdates(Request $request){
        $validate = $request->validate([
            'id' => 'required',
            'guruh_name' => 'required',
            'techer_id' => 'required',
            'techer_foiz' => 'required',
            'techer_paymart' => 'required',
            'techer_bonus' => 'required',
            'cours_id' => 'required',
            'tulov_id' => 'required',
        ]);
        $Grops = Grops::find($request->id);
        $Grops->guruh_name = $request->guruh_name;
        $Grops->techer_id = $request->techer_id;
        $Grops->techer_foiz = $request->techer_foiz;
        $Grops->techer_paymart = preg_replace('/\D/','',$request->techer_paymart);
        $Grops->techer_bonus = preg_replace('/\D/','',$request->techer_bonus);
        $Grops->cours_id = $request->cours_id;
        $Grops->tulov_id = $request->tulov_id;
        $Grops->save();
        return redirect()->back()->with('success', "Guruh malumotlari yangilandi.");
    }
    public function groupsDebetMessege(Request $request){
        $validate = $request->validate([
            'id' => 'required',
        ]);
        $UserGroup = UserGroup::where('grops_id',$request->id)->where('status','true')->get();
        $Users = array();
        $count = 0;
        foreach ($UserGroup as $key => $value) {
            if(User::find($value->user_id)->balans<0){
                $Users[$key]['name'] = User::find($value->user_id)->name;
                $Users[$key]['balans'] = User::find($value->user_id)->balans;
                $Users[$key]['phone'] = str_replace(" ","",User::find($value->user_id)->phone1);
                
                $count = $count + 1;
            }
        }
        $Markaz = Markaz::find(auth()->user()->markaz_id);
        $Markaz_ID = $Markaz->id;
        if($count>0){
            foreach ($Users as $key => $value) {
                $Text = $value['name']." siz ".$Markaz['name']." o'quv markazidan ".$value['balans']." so'm qarzdorligingiz mavjud. Qarzdorlikni so'ndirishni so'raymiz.";
                $Phone = $value['phone'];
                SendMessage::dispatch($Markaz_ID, $Phone, $Text);
            }
        }
        return redirect()->back()->with('success', $count." ta qarzdor talabaga sms xabar yuborildi.");
    }
}
