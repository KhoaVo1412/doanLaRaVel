<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AiLaTrieuPhu;
use Illuminate\Support\Arr;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AiLaTrieuPhu::all();
        // $incorect = [
        //     $data->incorrect_1,  $data->incorrect_2,  $data->incorrect_3
        // ];
        $data->toArray();
        // dd($data);

        $array=[];

        for ($i = 0; $i < $data->count(); $i++) {
           
                $arr = [
                    "category" => $data[$i]->category,
                    // "type" => $data[$i]->type,
                    // "difficulty" => $data[$i]->difficulty,
                    "question" => $data[$i]->question,
                    "correct_answer" => $data[$i]->correct_answer,
                    "incorrect_answers" => [
                        $data[$i]->incorrect_1,  $data[$i]->incorrect_2,  $data[$i]->incorrect_3
                    ]
                ];
                array_push($array, $arr);
            
    }

          return response()->json([
          "response_code" => 0,
            "results"=>$array,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
