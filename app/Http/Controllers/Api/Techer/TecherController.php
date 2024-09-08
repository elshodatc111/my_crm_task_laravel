<?php

namespace App\Http\Controllers\Api\Techer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Grops;
use App\Models\UserPaymart;
use App\Models\MarkazRoom;
use App\Models\MarkazCoursTest;
use App\Models\GropsTime;
use App\Models\Markaz;
use App\Models\MarkazIshHaqi;
use App\Models\UserHistory;
use App\Models\MarkazBalans;
use App\Models\Davomat;
use App\Models\MarkazPaymart;
use App\Models\UserGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class TecherController extends Controller
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
            if($User->role_id != 5){
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
            ]),
            'id' => auth()->user()->id
        ],200);
    }
    // Guruhlar
    public function groups(){
        $MyCroups = array();
        $Grops = Grops::where('techer_id',auth()->user()->id)->get();
        foreach ($Grops as $key => $value) {
            if($value->guruh_start>date('Y-m-d')){
                $url='new';
            }elseif($value->guruh_end<date('Y-m-d')){
                $url='end';
            }else{
                $url='activ';
            }
            $MyCroups[$key]['guruh_id'] = $value->id;
            $MyCroups[$key]['guruh_name'] = $value->guruh_name;
            $MyCroups[$key]['image'] = $url;
            $MyCroups[$key]['guruh_start'] = $value->guruh_start;
            $MyCroups[$key]['guruh_end'] = $value->guruh_end;
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
        $AllUser = array();
        $Users = UserGroup::where('grops_id',$id)->where('status','true')->get();
        foreach ($Users as $key => $value) {
            $AllUser[$key]['user_id'] = $value->user_id;
            $AllUser[$key]['name'] = User::find($value->user_id)->name;
        }
        if(GropsTime::where('grops_id',$id)->where('data',date('Y-m-d'))->first()) {
            $dav = 1;
        }else{
            $dav = 0;
        }
        $response['group'] = [
            'guruh_id' => $id,
            'cours_id' => $Grops->cours_id,
            'guruh_name' => $Grops->guruh_name,
            'guruh_start' => $Grops->guruh_start,
            'guruh_end' => $Grops->guruh_end,
            'hafta_kun' => $Grops->hafta_kun,
            'dars_count' => $Grops->dars_count,
            'dars_time' => $Grops->dars_time,
            'created_at' => $Grops->created_at,
            'davomat' => $dav,
            'room' => MarkazRoom::find($Grops->room_id)->room_name,
            'data' => GropsTime::where('grops_id',$Grops->id)->select('data')->get(),
            'user' => $AllUser,
        ];
        return response()->json([
            'status' => true,
            'message' => 'Groups Show',
            'data' => $response,
        ],200);
    }
    // Paymart
    public function paymarts(){
        $Paymart = array();
        $UserPaymart = MarkazIshHaqi::where('user_id',auth()->user()->id)->where('typing','Techer')->get();
        foreach ($UserPaymart as $key => $value) {
            if($value->type=='Naqt'){
                $image = "Naqt";
            }else{
                $image = "Plastik";
            }
            $Paymart[$key]['id'] = $value->id;
            $Paymart[$key]['guruh'] = $value->guruh_name;
            $Paymart[$key]['summa'] = number_format($value->summa, 0, ',', ' ').' so\'m';
            $Paymart[$key]['type'] = $value->type;
            $Paymart[$key]['data'] =  Carbon::parse($value->created_at)->format('Y-m-d h:s');
        }
        return response()->json([
            'status' => true,
            'message' => 'Techer paymart',
            'data' => $Paymart,
        ],200);
    }
    // Davomat
    public function davomats(Request $request){
        try{
            $validateUser = Validator::make($request->all(),[
                'user_id' => 'required',
                'guruh_id' => 'required'
            ]);
            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Insufficient data',
                    'errors' =>$validateUser->errors()
                ],401);
            }
            if($request->data != date('Y-m-d')){
                return response()->json([
                    'status' => false,
                    'message' => 'Error data',
                ],401);
            }
            if(!Grops::find($request->guruh_id)){
                return response()->json([
                    'status' => false,
                    'message' => 'Not fount group',
                ],401);
            }
            if(!User::find($request->user_id)){
                return response()->json([
                    'status' => false,
                    'message' => 'Not fount user',
                ],401);
            }
            $UserGroup = UserGroup::where('grops_id',$request->guruh_id)->where('user_id',$request->user_id)->where('status','true')->first();
            if(!$UserGroup){
                return response()->json([
                    'status' => false,
                    'message' => 'Not fount user grop',
                ],401);
            }
            if(Davomat::where('guruh_id',$request->guruh_id)->where('user_id',$request->user_id)->where('data',date('Y-m-d'))->first() ){
                return response()->json([
                    'status' => false,
                    'message' => "Davomat olingan",
                ],401);
            }
            Davomat::create([
                'markaz_id'=>auth()->user()->markaz_id,
                'guruh_id'=>$request->guruh_id,
                'user_id'=>$request->user_id,
                'data' => date('Y-m-d')
            ]);
            return response()->json([
                'status' => false,
                'message' => "Success",
            ],200);
        } catch(\Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
        
    }
    


    
}
