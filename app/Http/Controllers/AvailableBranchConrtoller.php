<?php

namespace App\Http\Controllers;

use App\Models\AvailableBranch;
use Illuminate\Http\Request;

class AvailableBranchConrtoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return AvailableBranch::get();
        // return AvailableBranch::where('user_id', $request->user_id)->with(['branch'=>function($q){
        //     $q->where('km', '<=', '300');
        // }])->get();
        // return AvailableBranch::where('user_id', $request->user_id)->whereHas('branch', function($q){
        //     $q->where('km', '200');
        // })->get();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ab = new AvailableBranch();
        $ab->fill($request->all());
        $ab->save();

        return response()->json(['msg'=> 'AvailableBranch created successfully']);
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
        $branc = AvailableBranch::findOrFail($id);
        $branc->delete();

        return response()->json(['msg' => 'AvailableBranch deleted successfully']);

    }
}
