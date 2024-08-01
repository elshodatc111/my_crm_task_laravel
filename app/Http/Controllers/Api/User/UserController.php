<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Grops;
use App\Models\UserPaymart;
use App\Models\MarkazRoom;
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
                    'message' => 'Insufficient data',
                    'errors' =>$validateUser->errors()
                ],401);
            }

            if (!Auth::attempt($request->only(['email','password']))) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email or password is incorrect'
                ],401);
            }

            $User = User::where('email',$request->email)->first();
            if($User->role_id != 6){
                return response()->json([
                    'status' => false,
                    'message' => 'You do not have permission to log in'
                ],401);
            }

            return response()->json([
                'status' => true,
                'message' => 'Your request has been successfully completed',
                'token' => $User->createToken("API TOKEN")->plainTextToken
            ],200);

        } catch(\Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }
    // Home 
    public function home(){
        $Markaz = Markaz::find(auth::user()->markaz_id);
        $Markazs = [
            'markaz_id' => $Markaz->id,
            'name' => $Markaz->name,
            'image' => $Markaz->image,
            'paymart_id' => $Markaz->payme_id,
        ];
        return response()->json([
            'status' => true,
            'message' => 'User paymart',
            'data' => $Markazs,
        ],200);
    }
    // Profel
    public function profile(){
        return response()->json([
            'status' => true,
            'message' => 'Profile Information',
            'data' => array([
                'id'=> auth()->user()->id,
                'name'=> auth()->user()->name,
                'phone1'=> auth()->user()->phone1,
                'phone2'=> auth()->user()->phone2,
                'tkun'=> auth()->user()->tkun,
                'addres'=> auth()->user()->addres,
                'email'=> auth()->user()->email,
                'balans'=> auth()->user()->balans,
                'created_at'=> auth()->user()->created_at,
            ]),
            'id' => auth()->user()->id
        ],200);
    }
    // Logout
    public function logout(){
        auth()->user()->delete();
        return response()->json([
            'status' => true,
            'message' => 'User logged out',
            'data' => [],
        ],200);
    }
    // Groups
    public function groups(){
        $Grops = UserGroup::where('user_id',auth()->user()->id)->where('status','true')->get();
        $MyCroups = array();
        foreach ($Grops as $key => $value) {
            $Grops = Grops::find($value->grops_id);
            $Start = $Grops->guruh_start;
            $End = $Grops->guruh_end;
            if($Start<=date('Y-m-d') AND $End>=date('Y-m-d')){
                $image_link = 'aktiv link image';
            }elseif($Start<=date('Y-m-d')){
                $image_link = 'Yangi link image';
            }else{
                $image_link = 'yakunlangan link image';
            }
            $MyCroups[$key]['guruh_id'] = $value->grops_id;
            $MyCroups[$key]['image'] = $image_link;
            $MyCroups[$key]['guruh_name'] = $Grops->guruh_name;
        }
        return response()->json([
            'status' => true,
            'message' => 'User group',
            'data' => $MyCroups,
        ],200);
    }
    // Group
    public function groupsShow($id){
        $Grops = Grops::find($id);
        $response = array();
        $response['group'] = [
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
            'tulov_summa' => MarkazPaymart::find($Grops->tulov_id)->summa,
            'data' => GropsTime::where('grops_id',$Grops->id)->select('data')->get(),
        ];
        return response()->json([
            'status' => true,
            'message' => 'Groups Show',
            'data' => $response,
        ],200);
    }
    // Testlar
    public function groupTest($cours_id){
        $MarkazCoursTest = MarkazCoursTest::where('cours_id',$cours_id)->inRandomOrder()->limit(15)->get();
        $Quez = array();
        $Grops = Grops::find($cours_id);
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
        // }  //Test o'tqazilgandan kiyin comment olib tashlanadi
        return response()->json([
            'status' => true,
            'message' => 'Testlar',
            'data' => $Quez,
        ],200);
    }
    // Test Post
    public function groupTestCreate(Request $request){
        $validateUser = Validator::make($request->all(),[
            'cours_id' => 'required',
            'count' => 'required|numeric|min:0|max:15'
        ]);
        if($validateUser->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Insufficient data',
                'errors' =>$validateUser->errors()
            ],401);
        }
        $Grops = Grops::find($request->cours_id);
        if($Grops){
            $UserTest = UserTest::where('cours_id',$request->cours_id)->where('user_id',auth()->user()->id)->first();
            
            if(!$UserTest){
                $urinish = 1;
                $test = UserTest::create([
                    'markaz_id'=>auth()->user()->markaz_id,
                    'cours_id'=>$request->cours_id,
                    'user_id'=>auth()->user()->id,
                    'count'=>$request->count,
                    'ball'=>$request->count*2,
                    'urinish'=>$urinish,
                ]);
            }else{
                if($request<3){
                    if($request->count>$UserTest->count){
                        $UserTest->count = $request->count;
                        $UserTest->ball = $request->count *2;
                        $UserTest->urinish = $UserTest->urinish + 1;
                        $UserTest->save();
                    }
                }
            }
            return response()->json([
                'status' => false,
                'message' => 'success',
            ],200);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Not fount cours_id'
            ],401);
        }

    }
    // Paymart
    public function paymarts(){
        $Paymart = array();
        $UserPaymart = UserPaymart::where('user_id',auth()->user()->id)->get();
        foreach ($UserPaymart as $key => $value) {
            if($value->tulov_type=='Naqt'){
                $image = 'urlpaymarts';
            }elseif($value->tulov_type=='Plastik'){
                $image = 'urlpaymarts';
            }elseif($value->tulov_type=='Payme'){
                $image = 'urlpaymarts';
            }elseif($value->tulov_type=='Qaytarildi'){
                $image = 'urlpaymarts';
            }elseif($value->tulov_type=='Chegirma'){
                $image = 'urlpaymarts';
            }
            $Paymart[$key]['id'] = $value->id;
            $Paymart[$key]['image'] = $image;
            $Paymart[$key]['summa'] = $value->summa;
            $Paymart[$key]['type'] = $value->tulov_type;
            $Paymart[$key]['data'] = $value->created_at;
        }
        return response()->json([
            'status' => true,
            'message' => 'User paymart',
            'data' => $Paymart,
        ],200);
    }
    // Paymart Post
    public function paymartsCreate(Request $request){
        try{
            $validateUserPay = Validator::make($request->all(),[
                'guruh_id' => 'required|numeric',
                'summa' => 'required|numeric|min:500|max:50000000'
            ]);
            
            if($validateUserPay->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Insufficient data',
                    'errors' =>$validateUserPay->errors()
                ],401);
            }
            $Grops = Grops::find($request->guruh_id);
            if(!$Grops){
                return response()->json([
                    'status' => false,
                    'message' => 'Not fount guruh_id',
                ],401);
            }
            $User = User::find(auth()->user()->id);
            UserHistory::create([
                'markaz_id' => auth()->user()->markaz_id,
                'user_id' => auth()->user()->id,
                'status' => 'Payme',
                'guruh' => $Grops->guruh_name,
                'summa' => number_format($request->summa, 0, '.', ' '),
                'tulov_type' => 'Payme',
                'comment' => "Payme orqali tulov",
                'xisoblash' => number_format($User->balans, 0, '.', ' ')." + ".number_format($request->summa, 0, '.', ' ')." = ".number_format($User->balans+$request->summa, 0, '.', ' '),
                'balans' => number_format($User->balans+$request->summa, 0, '.', ' '),
                'meneger' => "Payme",
            ]);
            UserPaymart::create([
                'markaz_id' => auth()->user()->markaz_id,
                'user_id' => auth()->user()->id,
                'summa' => $request->summa,
                'tulov_type' => "Payme",
                'guruh' => $Grops->id,
                'comment' => "Payme orqali to'lov",
                'meneger' => "Payme",
            ]);
            $MarkazBalans = MarkazBalans::where('markaz_id', auth()->user()->markaz_id)->first();
            $MarkazBalans->balans_payme = $MarkazBalans->balans_payme + $request->summa;
            $MarkazBalans->save();
            $User->balans = $User->balans + $request->summa;
            $User->save();
            return response()->json([
                'status' => true,
                'message' => 'Paymart success',
            ],200);
        } catch(\Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }

}
