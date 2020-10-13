<?php

namespace App\Http\Controllers;

use App\Blocksite;
use App\NetworkInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlocksiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $names = $request->name;
        $urls = $request->url;

        foreach ($names as $index => $name) {
            Blocksite::create([
                'name'      => $name,
                'url'       => $urls[$index],
                'user_id'   => Auth::user()->id,
                'course_id' => $request->course_id,
                'exam_id'   => $request->exam_id,
            ]);
        }


        return redirect()->back();
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blocksite $blocksite){
        //
        $blocksite->update($request->all());

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blocksite $blocksite){
        $blocksite->delete();
        return redirect()->back();
    }


    public function blocksiteAPI(Request $request){

        $blocksites = Blocksite::where('course_id', $request->course_id)
                        ->where('exam_id', $request->exam_id)
                        ->get();


        return response()->json($blocksites, 200);
    }
}
