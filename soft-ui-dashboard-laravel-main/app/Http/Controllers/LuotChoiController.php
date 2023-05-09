<?php

namespace App\Http\Controllers;

use App\Models\LuotChoi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLuotChoiRequest;
use App\Http\Requests\UpdateLuotChoiRequest;

class LuotChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $luotchoi = LuotChoi::all();
        return view('luotchoi.index')->with('luotchois', $luotchoi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('luotchoi.create');
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
        LuotChoi::create($input);
        return redirect('luotchoi')->with('flash_message', 'Luot Choi Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LinhVuc  $luotchoi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $luotchoi = LuotChoi::find($id);
        return view('luotchoi.show')->with('luotchois', $luotchoi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LinhVuc  $luotchoi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $luotchoi = LuotChoi::find($id);
        return view('luotchoi.edit')->with('luotchois', $luotchoi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLinhVucRequest  $request
     * @param  \App\Models\LinhVuc  $luotchoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $luotchoi = LuotChoi::find($id);
        $input = $request->all();
        $luotchoi->update($input);
        return redirect('luotchoi')->with('flash_message', 'Luot Choi Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LinhVuc  $luotchoi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        LuotChoi::destroy($id);
        return redirect('luotchoi')->with('flash_message', 'LuotChoi deleted!');
    }
}
