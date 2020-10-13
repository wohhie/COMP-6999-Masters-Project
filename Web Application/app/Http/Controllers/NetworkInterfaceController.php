<?php

namespace App\Http\Controllers;

use App\NetworkInterface;
use Illuminate\Http\Request;

class NetworkInterfaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        $network_interfaces = NetworkInterface::all();
        return $network_interfaces;
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

        // check if the ip address and network information exist
        $ni = NetworkInterface::where([
            ['public_ip', '=', $request->public_ip],
            ['private_ip', '=', $request->private_ip],
        ])->first();



        if ($ni !== null){
            // network Interface already exist.
            return response()->json(array(
                "status"    => 409,
                "code" => "niexist",
                "message"   => "Data Exist",
            ), 409);
        }




        // 201: Object created. Useful for the store actions.
        $network_interface = NetworkInterface::create($request->all());
        return response()->json($network_interface, 201);
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
    public function edit($id)
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
