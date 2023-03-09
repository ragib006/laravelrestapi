<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Rider;

class RiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response



     */

 //get method       http://localhost:8000/api/v1/riders

    public function index()
    {
        $riders = DB::table('riders')->get();

        return response()->json($riders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */







    //post method       http://localhost:8000/api/v1/riders

    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




    $validatedData = $request->validate([
        'rider_phn' => 'required|unique:riders|max:50',
        'rider_email' => 'required|unique:riders|max:50',
        
    ]);


    $mydata = Rider::create($request->all());


    return response()->json($mydata);






        
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
