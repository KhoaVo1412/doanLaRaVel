<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;

class InfoUserController extends Controller
{

    // public function create()
    // {
    //     return view('laravel-examples/user-profile');
    // }
    public function index()
    {
        $data = User::all();
        // $incorect = [
        //     $data->incorrect_1,  $data->incorrect_2,  $data->incorrect_3
        // ];
        $data->toArray();
        // dd($data);

        $array=[];

        for ($i = 0; $i < $data->count(); $i++) {

        $arr = [
            "name" => $data[$i]->name,
            // "type" => $data[$i]->type,
            // "difficulty" => $data[$i]->difficulty,
            "email" => $data[$i]->email,
        ];
        array_push($array, $arr);}

          return response()->json([
          "response_code" => 0,
            "results"=>$array,
        ]);
    }
    public function show($id)
    {
        //
        $user = User::find($id);
        return response()->json([
            "response_code" => 0,
              "results"=>$user,
          ]);
    }

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],
            'phone'     => ['max:50'],
            'location' => ['max:70'],
            'about_me'    => ['max:150'],
        ]);
        if($request->get('email') != Auth::user()->email)
        {
            if(env('IS_DEMO') && Auth::user()->id == 1)
            {
                return redirect()->back()->withErrors(['msg2' => 'You are in a demo version, you can\'t change the email address.']);

            }

        }
        else{
            $attribute = request()->validate([
                'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],
            ]);
        }


        User::where('id',Auth::user()->id)
        ->update([
            'name'    => $attributes['name'],
            'email' => $attribute['email'],
            'phone'     => $attributes['phone'],
            'location' => $attributes['location'],
            'about_me'    => $attributes["about_me"],
        ]);


        return redirect('/user-profile')->with('success','Profile updated successfully');
    }

}
