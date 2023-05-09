<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
class MemberController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Member::all();
        return view ('user.index')->with('users', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLinhVucRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Member::create($input);
        return redirect('user')->with('flash_message', 'User Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LinhVuc  $linhVuc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = Member::find($id);
        return view('user.show')->with('users', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LinhVuc  $linhVuc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = Member::find($id);
        return view('user.edit')->with('users', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLinhVucRequest  $request
     * @param  \App\Models\LinhVuc  $linhVuc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = Member::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('user')->with('flash_message', 'User Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LinhVuc  $linhVuc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Member::destroy($id);
        return redirect('user')->with('flash_message', 'User deleted!');
    }
}
