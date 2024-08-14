<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Markaz;
use App\Models\Grops;
use App\Models\GropsTime;
use App\Models\MarkazPaymart;
use App\Models\User;
use App\Models\UserTest;
use App\Models\MarkazCoursTest;
use App\Models\MarkazRoom;
use App\Models\UserGroup;
use App\Models\UserPaymart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller{
    public function index(){
        $Markaz = Markaz::find(auth()->user()->markaz_id);
        return view('user.index',compact('Markaz'));
    }
    public function groups(){
        $UserGroup = UserGroup::where('user_id',auth()->user()->id)->where('status','true')->get();
        $Guruhlar = array();
        foreach ($UserGroup as $key => $value) {
            $Guruh = Grops::find($value->grops_id);
            $start = $Guruh['guruh_start'];
            $end = $Guruh['guruh_end'];
            if($start>=date('Y-m-d') AND $end<=date('Y-m-d')){
                $status = 'aktiv';
            }elseif($end>=date('Y-m-d')){
                $status = 'new';
            }else{
                $status = 'end';
            }
            $Guruhlar[$key]['id'] = $value->grops_id;
            $Guruhlar[$key]['guruh_name'] = $Guruh['guruh_name'];
            $Guruhlar[$key]['status'] = $status;
        }
        return view('user.group',compact('Guruhlar'));
    }
    public function groupsShow($id){
        $Grops = Grops::find($id);
        $array = array();
        $array['id'] = $id;
        $array['name'] = $Grops->guruh_name;
        $array['room'] = MarkazRoom::find($Grops->room_id)->room_name;
        $array['price'] = MarkazPaymart::find($Grops->tulov_id)->summa;
        $array['techer'] = User::find($Grops->techer_id)->name;
        $array['time'] = $Grops->dars_time;
        $array['start'] = $Grops->guruh_start;
        $GropsTime = GropsTime::where('grops_id',$id)->get();
        $UserTest = UserTest::where('user_id',auth()->user()->id)->where('cours_id',$id)->first();
        return view('user.group_show',compact('array','GropsTime','UserTest'));
    }
    public function groupsTest($id){
        $MarkazCoursTest = MarkazCoursTest::where('cours_id',$id)->inRandomOrder()->limit(15)->get();
        $Quez = array();
        $Grops = Grops::find($id);
        // if(date('Y-m-d')>=$Grops->guruh_end){  //Test o'tqazilgandan kiyin comment olib tashlanadi
            foreach ($MarkazCoursTest as $key => $value) {
                $Quez[$key]['id'] = $value->id;
                $Quez[$key]['savol'] = $value->test_savol;
                $numbers = [1, 2, 3, 4];
                $randomNumber = $numbers[array_rand($numbers)];
                $Quez[$key]['numbers'] = $randomNumber;
                if($randomNumber==1){
                    $Quez[$key]['javob1'] = $value->test_javob_true;
                    $Quez[$key]['javob2'] = $value->test_javon_false1;
                    $Quez[$key]['javob3'] = $value->test_javon_false2;
                    $Quez[$key]['javob4'] = $value->test_javon_false3;
                }elseif($randomNumber==2){
                    $Quez[$key]['javob1'] = $value->test_javon_false1;
                    $Quez[$key]['javob2'] = $value->test_javob_true;
                    $Quez[$key]['javob3'] = $value->test_javon_false2;
                    $Quez[$key]['javob4'] = $value->test_javon_false3;
                }elseif($randomNumber==3){
                    $Quez[$key]['javob1'] = $value->test_javon_false2;
                    $Quez[$key]['javob2'] = $value->test_javon_false1;
                    $Quez[$key]['javob3'] = $value->test_javob_true;
                    $Quez[$key]['javob4'] = $value->test_javon_false3;
                }else{
                    $Quez[$key]['javob1'] = $value->test_javon_false2;
                    $Quez[$key]['javob2'] = $value->test_javon_false1;
                    $Quez[$key]['javob3'] = $value->test_javon_false3;
                    $Quez[$key]['javob4'] = $value->test_javob_true;
                }
            }
        return view('user.test',compact('Quez','id'));
    }
    public function groupsTestStory(Request $request){
        $array = $request;
        $id = $array->id;
        $MarkazCoursTest = MarkazCoursTest::where('cours_id',$id)->get();
        $count = 0;
        foreach ($MarkazCoursTest as $key => $value) {
           if($request['q'.$value->id]==1){
            echo $request['q'.$value->id]." ";
            $count = $count + 1;
           }
        }
        $Ball = $count*2;
        $UserTest = UserTest::where('cours_id',$id)->where('user_id',auth()->user()->id)->first();
        if($UserTest){
            if($UserTest['count']<$count){
                $UserTest->count = $count;
                $UserTest->ball = $Ball;
            }
            $UserTest->urinish = $UserTest->urinish+1;
            $UserTest->save();
        }else{
            UserTest::create([
                'markaz_id' => auth()->user()->markaz_id,
                'cours_id' => $id,
                'user_id' => auth()->user()->id,
                'count' => $count,
                'ball' => $Ball,
                'urinish' => 1,
            ]);
        }
        return redirect()->route('user.groups_show',$id)->with('error', "Siz ".$count." ta test javobini topdingiz.");
    }
    public function paymart(){
        $UserPaymart = UserPaymart::where('user_id',auth()->user()->id)->orderby('id','desc')->get();
        return view('user.paymart',compact('UserPaymart'));
    }
    public function profel(){
        return view('user.profel');
    }
    public function updatePasword(Request $request){
        $validated = $request->validate([
            'password' => 'required',
            'newPassword' => 'required',
            'confirmPassword' => 'required',
        ]);
        $request['email'] = auth()->user()->email;
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if($request->newpassword == $request->confirmpassword){
                $User = User::find(auth()->user()->id);
                $User->password = Hash::make($request->confirmPassword);
                $User->save();
                Auth::guard('web')->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/login');
            }else{
                return redirect()->back()->with('error', "Yangi parollar mos kelmadi.");
            }
        }else{
            return redirect()->back()->with('error', "Joriy parol noto'g'ri.");
        }
    }
    public function paymartShow(){
        $UserGroup = UserGroup::where('user_id',auth()->user()->id)->where('status','true')->get();
        $Guruhlar = array();
        foreach ($UserGroup as $key => $value) {
            $Guruh = Grops::find($value->grops_id);
            $start = $Guruh['guruh_start'];
            $end = $Guruh['guruh_end'];
            if($start>=date('Y-m-d') AND $end<=date('Y-m-d')){
                $status = 'aktiv';
            }elseif($end>=date('Y-m-d')){
                $status = 'new';
            }else{
                $status = 'end';
            }
            $Guruhlar[$key]['id'] = $value->grops_id;
            $Guruhlar[$key]['guruh_name'] = $Guruh['guruh_name'];
            $Guruhlar[$key]['status'] = $status;
        }
        return view('user.paymart_show',compact('Guruhlar'));
    }
    public function paymartShowPost(Request $request){
        $validated = $request->validate([
            'price' => 'required',
            'cours_id' => 'required',
        ]);
        $validated['user_id'] = auth()->user()->id;
        $validated['markaz_id'] = auth()->user()->markaz_id;
        $Order = Order::create([
            'markaz_id'=>auth()->user()->markaz_id,
            'user_id'=>auth()->user()->id,
            'price' => $request->price,
            'cours_id' => $request->cours_id,
            'status'=> 'Kutilmoqda',
        ]);
        return redirect()->route('user.paymart_show_two',$Order->id);
    }
    public function paymartShowTwo($id){
        $Order = Order::find($id);
        $Markaz = Markaz::find($Order['markaz_id']);
        $Grops = Grops::find($Order['cours_id']);
        return view('user.paymart_show_post',compact('Order','Markaz','Grops'));
    }
}
