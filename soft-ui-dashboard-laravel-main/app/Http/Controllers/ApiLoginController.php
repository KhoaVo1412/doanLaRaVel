<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ApiLoginController extends Controller
{
    public function register(Request $req)
    {
        //valdiate
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6'
        ];
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        //create new user in users table
        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);
        $token = $user->createToken('Personal Access Token')->plainTextToken;
        $response = ['user' => $user, 'token' => $token];
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
        // find user email in users table
        $user = User::where('email', $req->email)->first();
        // if user email found and password is correct
        if ($user && Hash::check($req->password, $user->password)) {
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            $response = ['user' => $user, 'token' => $token];

            return response()->json($response, 200);
        }
        $response = ['message' => 'Incorrect email or password'];

        return response()->json($response, 400);
    }
    public function showTokens(Request $request){
        return $request->user()->tokens;
    }

    public function logout(Request $request){
         $request->user()->currentAccessToken()->delete();
         return ['message' => 'logged out'];
    }
    public function logoutById(Request $request,$tokenId){
        $request->user()->tokens()->where('id',$tokenId)->delete();
        return ['message' => 'logged out'.$tokenId];
   }
   public function logoutAll(Request $request){
    $request->user()->tokens()->delete();
    return ['message' => 'logged out'];
}

   }

