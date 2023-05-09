<?php

namespace App\Http\Controllers;

use App\Models\Member;
// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Auth;


class AuthController extends Controller
{

    //
    public function register(Request $req)
    {
        //valdiate
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string|unique:members',
            'password' => 'required|string|min:6'
        ];
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        //create new member in members table
        $member = Member::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);
        $token = $member->createToken('Personal Access Token')->plainTextToken;
        $response = ['member' => $member, 'token' => $token];
        return response()->json($response, 200);
    }

    public function login(Request $req)
    {
        // validate inputs
        $rules = [
            'email' => 'required',
            'password' => 'required|string'
        ];
        $req->validate($rules);
        // find member email in members table
        $member = Member::where('email', $req->email)->first();
        // if member email found and password is correct
        if ($member && Hash::check($req->password, $member->password)) {
            $token = $member->createToken('Personal Access Token')->plainTextToken;
            $response = ['member' => $member, 'token' => $token];
            return response()->json($response, 200);
        }
        $response = ['message' => 'Incorrect email or password'];
        return response()->json($response, 400);
    }
    public function changepassword(Request $request)
    {
        $validator = Validator::make($request->all(),[
        'old_password'=>'required',
        'password'=>'required|min:6|max:100',
        'confirm_password'=>'required|same:password'
        ]);
        if($validator->fails()){
            return response()->json([
                'message'=>'Validations fails',
                'errors'=>$validator->errors()
            ],422);
        }

        $member=$request->user();
        if(Hash::check($request->old_password,$member->password)){
            $member->update([
                'password'=>Hash::make($request->password)
            ]);
            return response()->json([
                'message'=>'Password sucess update',
            ],200);
        }else{
                return response()->json([
                    'message'=>'old password does not match',
                ],400);
        }
    }
    public function user(Request $request)
    {
         return response()->json([
            'message'=>'user fetch',
            'data'=>$request->user()
         ],200);
    }

    public function logout(Request $request)
    {
      $request->user()->currentAcessToken()->delete();
       return response()->json([
        'message'=>'log out sucess',
       ],200);
    }

}
