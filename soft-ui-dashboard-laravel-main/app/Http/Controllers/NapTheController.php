<?php

namespace App\Http\Controllers;

use App\Models\NapThe;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLinhVucRequest;
use App\Http\Requests\UpdateLinhVucRequest;

class NapTheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $napthe = NapThe::all();
        return view ('card.index')->with('cards', $napthe);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('card.create');
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
        NapThe::create($input);
        return redirect('napthe')->with('flash_message', 'Nap The Addedd!');
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
        $napthe = NapThe::find($id);
        return view('card.show')->with('cards', $napthe);
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
        $napthe = NapThe::find($id);
        return view('card.edit')->with('cards', $napthe);
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
        $napthe = NapThe::find($id);
        $input = $request->all();
        $napthe->update($input);
        return redirect('napthe')->with('flash_message', 'Nap The Updated!');
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
        NapThe::destroy($id);
        return redirect('napthe')->with('flash_message', 'Nap the deleted!');
    }
}
