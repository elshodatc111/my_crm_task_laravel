<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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

    
}
