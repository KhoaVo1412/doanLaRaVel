<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AiLaTrieuPhu;
use App\Http\Requests\StoreAiLaTrieuPhuRequest;
use App\Http\Requests\UpdateAiLaTrieuPhuRequest;

class AiLaTrieuPhuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ailatrieuphu = AiLaTrieuPhu::all();
        return view ('ailatrieuphu.index')->with('ailatrieuphus', $ailatrieuphu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ailatrieuphu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAiLaTrieuPhuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        AiLaTrieuPhu::create($input);
        return redirect('ailatrieuphu')->with('flash_message', 'LinhVuc Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AiLaTrieuPhu  $aiLaTrieuPhu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ailatrieuphu = AiLaTrieuPhu::find($id);
        return view('ailatrieuphu.show')->with('ailatrieuphus', $ailatrieuphu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AiLaTrieuPhu  $aiLaTrieuPhu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ailatrieuphu = AiLaTrieuPhu::find($id);
        return view('ailatrieuphu.edit')->with('ailatrieuphus', $ailatrieuphu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAiLaTrieuPhuRequest  $request
     * @param  \App\Models\AiLaTrieuPhu  $aiLaTrieuPhu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ailatrieuphu = AiLaTrieuPhu::find($id);
        $input = $request->all();
        $ailatrieuphu->update($input);
        return redirect('ailatrieuphu')->with('flash_message', 'Quesstion Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AiLaTrieuPhu  $aiLaTrieuPhu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        AiLaTrieuPhu::destroy($id);
        return redirect('ailatrieuphu')->with('flash_message', 'Quesstion deleted!');
    }
}
