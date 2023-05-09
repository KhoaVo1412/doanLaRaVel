<?php

namespace App\Http\Controllers;

use App\Models\LinhVuc;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLinhVucRequest;
use App\Http\Requests\UpdateLinhVucRequest;

class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linhvuc = LinhVuc::all();
        return view ('linhvuc.index')->with('linhvucs', $linhvuc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('linhvuc.create');
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
        LinhVuc::create($input);
        return redirect('linhvuc')->with('flash_message', 'LinhVuc Addedd!');
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
        $linhvuc = LinhVuc::find($id);
        return view('linhvuc.show')->with('linhvucs', $linhvuc);
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
        $linhvuc = LinhVuc::find($id);
        return view('linhvuc.edit')->with('linhvucs', $linhvuc);
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
        $linhvuc = LinhVuc::find($id);
        $input = $request->all();
        $linhvuc->update($input);
        return redirect('linhvuc')->with('flash_message', 'LinhVuc Updated!');
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
        LinhVuc::destroy($id);
        return redirect('linhvuc')->with('flash_message', 'LinhVuc deleted!');
    }
}
