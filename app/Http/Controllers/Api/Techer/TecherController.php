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
    // Home 
    public function home(){
        $Markaz = Markaz::find(auth::user()->markaz_id);
        $Markazs = [
            'markaz_id' => $Markaz->id,
            'name' => $Markaz->name,
            'image' => $Markaz->image,
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
                'created_at'=> auth()->user()->created_at,
            ]),
            'id' => auth()->user()->id
        ],200);
    }
    // Profel
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
            $MyCroups[$key]['updated_at'] = $value->updated_at;
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
    //
    public function davomat(Request $request){
        try{
            $validateUser = Validator::make($request->all(),[
                'data' => 'required',
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
            $Users = UserGroup::where('grops_id',$request->guruh_id)->where('status','true')->get();
            if(count($Users)==0){
                return response()->json([
                    'status' => false,
                    'message' => 'Not fount user',
                ],401);
            }
            $users = array();
            foreach ($Users as $key => $value) {
                $user_id = $value->user_id;
                $users[$key] = "user_id_".$user_id;
            }
            $UserID = array();
            $i=0;
            foreach ($users as $key => $value) {
                if($request[$value]){
                    $UserID[$i] = $request[$value];
                    $i++;
                }
            }
            if(Davomat::where('guruh_id',$request->guruh_id)->where('data',date('Y-m-d'))->first() ){
                return response()->json([
                    'status' => false,
                    'message' => "Davomat olingan",
                ],401);
            }
            foreach ($UserID as $key => $value) {
                Davomat::create([
                    'markaz_id'=>auth()->user()->markaz_id,
                    'guruh_id'=>$request->guruh_id,
                    'user_id'=>$value,
                    'data' => date('Y-m-d')
                ]);
            }
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
            $Paymart[$key]['image'] = $image;
            $Paymart[$key]['summa'] = $value->summa;
            $Paymart[$key]['type'] = $value->type;
            $Paymart[$key]['data'] = $value->created_at;
        }
        return response()->json([
            'status' => true,
            'message' => 'Techer paymart',
            'data' => $Paymart,
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
}
