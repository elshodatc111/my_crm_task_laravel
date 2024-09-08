<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Grops;
use App\Models\UserPaymart;
use App\Models\MarkazRoom;
use App\Models\MarkazCours;
use App\Models\MarkazCoursTest;
use App\Models\GropsTime;
use App\Models\Markaz;
use App\Models\UserHistory;
use App\Models\MarkazBalans;
use App\Models\MarkazPaymart;
use App\Models\UserGroup;
use App\Models\UserTest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    // Login auth
    public function login(Request $request){
        try{
            $validateUser = Validator::make($request->all(),[
                'email' => 'required',
                'password' => 'required'
            ]);
            
            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Malumotlar to\'liq emas',
                    'errors' =>$validateUser->errors()
                ],401);
            }

            if (!Auth::attempt($request->only(['email','password']))) {
                return response()->json([
                    'status' => false,
                    'message' => 'Login yoki parol xato'
                ],401);
            }

            $User = User::where('email',$request->email)->first();
            if($User->role_id != 6){
                return response()->json([
                    'status' => false,
                    'message' => 'Siz bizning talabamiz emasssiz'
                ],401);
            }

            return response()->json([
                'status' => true,
                'token' => $User->createToken("API TOKEN")->plainTextToken,
                'markaz_id' => $User->markaz_id,
                'name' => $User->name,
                'phone' => $User->phone1,
                'addres' => $User->addres,
                'tkun' => $User->tkun,
                'balans' => number_format($User->balans, 0, ',', ' '),
                'email ' => $User->email,
            ],200);

        } catch(\Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }
    // Balans
    public function balans(){
        try{
            $User = auth()->user();
            return response()->json([
                'status' => true,
                'balans' => number_format($User->balans, 0, ',', ' '),
            ],200);

        } catch(\Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }
    // Profel
    public function profile(){
        try{
            return response()->json([
                'status' => true,
                'message' => 'Profile Information',
                'id'=> auth()->user()->id,
                'name'=> auth()->user()->name,
                'phone1'=> auth()->user()->phone1,
                'phone2'=> auth()->user()->phone2,
                'tkun'=> auth()->user()->tkun,
                'addres'=> auth()->user()->addres,
                'email'=> auth()->user()->email,
                'balans'=> number_format(auth()->user()->balans, 0, ',', ' '),
                'created_at'=> auth()->user()->created_at,
                'id' => auth()->user()->id
            ],200);
        } catch(\Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }
    // Logout
    public function logout(){
        try{
            auth()->user()->delete();
            return response()->json([
                'status' => true,
                'message' => 'User logged out',
                'data' => [],
            ],200);
        } catch(\Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }
    // Groups
    public function groups(){
        try{
            $Grops = UserGroup::where('user_id',auth()->user()->id)->where('status','true')->get();
            $MyCroups = array();
            foreach ($Grops as $key => $value) {
                $Grops = Grops::find($value->grops_id);
                $MyCroups[$key]['guruh_id'] = $value->grops_id;
                if($Grops->guruh_start>date('Y-m-d')){
                    $MyCroups[$key]['status'] = 'New';
                }elseif($Grops->guruh_end<date('Y-m-d')){
                    $MyCroups[$key]['status'] = 'End';
                }else{
                    $MyCroups[$key]['status'] = 'Activ';
                }
                $MyCroups[$key]['guruh_name'] = $Grops->guruh_name;
                $MyCroups[$key]['guruh_start'] = $Grops->guruh_start;
                $MyCroups[$key]['guruh_end'] = $Grops->guruh_end;
                $MyCroups[$key]['dars_time'] = $Grops->dars_time;
                $MyCroups[$key]['room'] = MarkazRoom::find($Grops->room_id)->room_name;
            }
            return response()->json([
                'status' => true,
                'message' => 'User group',
                'data' => $MyCroups,
            ],200);
        } catch(\Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }
    // Group
    public function groupsShow($id){
        try{
            $Grops = Grops::find($id);
            $response = array();
            return response()->json([
                'status' => true,
                'message' => 'Groups Show',
                'guruh_id' => $Grops->id,
                'cours_id' => $Grops->cours_id,
                'guruh_name' => $Grops->guruh_name,
                'guruh_start' => $Grops->guruh_start,
                'guruh_end' => $Grops->guruh_end,
                'hafta_kun' => $Grops->hafta_kun,
                'dars_count' => $Grops->dars_count,
                'dars_time' => $Grops->dars_time,
                'created_at' => $Grops->created_at,
                'techer' => User::find($Grops->techer_id)->name,
                'room' => MarkazRoom::find($Grops->room_id)->room_name,
                'tulov_summa' => number_format(MarkazPaymart::find($Grops->tulov_id)->summa, 0, ',', ' '),
                'data' => GropsTime::where('grops_id',$Grops->id)->select('data')->get(),
            ],200);
        } catch(\Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }
    // Paymart
    public function paymarts(){
        try{
            $Paymart = array();
            $UserPaymart = UserPaymart::where('user_id',auth()->user()->id)->get();
            foreach ($UserPaymart as $key => $value) {
                $Paymart[$key]['id'] = $value->id;
                $Paymart[$key]['summa'] = number_format($value->summa, 0, ',', ' ');
                $Paymart[$key]['type'] = $value->tulov_type;
                $Paymart[$key]['data'] = $value->created_at;
            }
            return response()->json([
                'status' => true,
                'message' => 'User paymart',
                'data' => $Paymart,
            ],200);
        } catch(\Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }
    // Test
    public function test(){
        try{
            $Grops = UserGroup::where('user_id',auth()->user()->id)->where('status','true')->get();
            $Test = array();
            $i = 1;
            foreach ($Grops as $key => $value) {
                $cours_id = $value->grops_id;
                $MarkazCoursTest = MarkazCoursTest::where('cours_id',$cours_id)->get();
                $UserTest = UserTest::where('user_id',auth()->user()->id)->where('cours_id',$cours_id)->first();
                if(count($MarkazCoursTest)>14){
                    $Test[$i]['guruh_id'] =  $value->id;
                    $Test[$i]['cours_id'] =  $cours_id;
                    $Test[$i]['cours_name'] =  MarkazCours::find($cours_id)->cours_name;
                    $Test[$i]['urinish'] =  $UserTest->urinish??0;
                    $Test[$i]['tugri'] =  $UserTest->count??0;
                    $Test[$i]['ball'] =  $UserTest->ball??0;
                    $i++;
                }
            }
            return response()->json([
                'status' => true,
                'message' => 'Testlar',
                'data' => $Test,
            ],200);
        } catch(\Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }
    // Test show
    public function testshow($cours_id,$guruh_id){
        try{
            $MarkazCoursTest = MarkazCoursTest::where('cours_id',$cours_id)->inRandomOrder()->limit(15)->get();
            $Testlar = array();
            $Grops = Grops::find($guruh_id);
            foreach ($MarkazCoursTest as $key => $value) {
                $Testlar[$key]['test_id'] = $value->id;
                $Testlar[$key]['savol'] = $value->test_savol;
                $numbers = [1, 2, 3, 4];
                $randomNumber = $numbers[array_rand($numbers)];
                $Testlar[$key]['javob'] = $randomNumber;
                switch ($randomNumber) {
                    case 1:
                        $Testlar[$key]['javob1'] = $value->test_javob_true;
                        $Testlar[$key]['javob2'] = $value->test_javon_false1;
                        $Testlar[$key]['javob3'] = $value->test_javon_false2;
                        $Testlar[$key]['javob4'] = $value->test_javon_false3;
                        break;
                    case 2:
                        $Testlar[$key]['javob1'] = $value->test_javon_false3;
                        $Testlar[$key]['javob2'] = $value->test_javob_true;
                        $Testlar[$key]['javob3'] = $value->test_javon_false1;
                        $Testlar[$key]['javob4'] = $value->test_javon_false2;
                        break;
                    case 3:
                        $Testlar[$key]['javob1'] = $value->test_javon_false1;
                        $Testlar[$key]['javob2'] = $value->test_javon_false2;
                        $Testlar[$key]['javob3'] = $value->test_javob_true;
                        $Testlar[$key]['javob4'] = $value->test_javon_false3;
                        break;
                    case 4:
                        $Testlar[$key]['javob1'] = $value->test_javon_false1;
                        $Testlar[$key]['javob2'] = $value->test_javon_false2;
                        $Testlar[$key]['javob3'] = $value->test_javon_false3;
                        $Testlar[$key]['javob4'] = $value->test_javob_true;
                        break;
                }
                
            }
            return response()->json([
                'status' => true,
                'message' => 'Testlar',
                'cours_id' => $cours_id,
                'guruh_id' => $guruh_id,
                'guruh_name' => $Grops->guruh_name,
                'testlar' => $Testlar,
            ],200);
        } catch(\Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }
    // Test Post
    public function TestPost(Request $request){
        try{
            $validateUser = Validator::make($request->all(),[
                'cours_id' => 'required',
                'guruh_id' => 'required',
                'count' => 'required'
            ]);
            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Malumotlar to\'liq emas',
                    'errors' =>$validateUser->errors()
                ],401);
            }

            $Ball = $request['count']*2;
            $UserTest = UserTest::where('cours_id',$request['cours_id'])->where('user_id',auth()->user()->id)->first();
            if($UserTest){
                if($UserTest['count']<$request['count']){
                    $UserTest->count = $request['count'];
                    $UserTest->ball = $Ball;
                }
                $UserTest->urinish = $UserTest->urinish+1;
                $UserTest->save();
            }else{
                UserTest::create([
                    'markaz_id' => auth()->user()->markaz_id,
                    'cours_id' => $request['cours_id'],
                    'user_id' => auth()->user()->id,
                    'count' => $request['count'],
                    'ball' => $Ball,
                    'urinish' => 1,
                ]);
            }
            return response()->json([
                'status' => true,
                'cours_id' => $request['cours_id'],
                'guruh_id' => $request['guruh_id'],
                'count' => $request['count'],
                'ball' => $Ball,
            ],200);
        } catch(\Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }
    // Update pasword
    public function UpdatePassword(Request $request){
        try{
            $validateUser = Validator::make($request->all(), [
                'password' => 'required',
                'new_password' => 'required',
                'confirm_password' => 'required|same:new_password'
            ]);
    
            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Malumotlar to\'liq emas',
                    'errors' => $validateUser->errors()
                ], 401);
            }
    
            if (Hash::check($request->password, auth()->user()->password)) {
                $User = User::find(auth()->user()->id);
                $User->password = Hash::make($request->new_password);
                $User->save();
                return response()->json([
                    'status' => true,
                    'message' => 'Parol yangilandi',
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Joriy parol xato',
                ], 403);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}
