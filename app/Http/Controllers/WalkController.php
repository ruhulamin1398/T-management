<?php

namespace App\Http\Controllers;

use App\Models\walk;
use App\Http\Requests\StorewalkRequest;
use App\Http\Requests\UpdatewalkRequest;
use Illuminate\Http\Request;

class WalkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $walks= walk::orderByDesc('id')->get();
        return view('walk.index',compact('walks'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $walk = new walk;
        $walk->user_id= 1;
        $walk->date= $request->date;
        $walk->km= $request->km;
        $walk->comment= $request->comment;
        $walk->save();
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\walk  $walk
     * @return \Illuminate\Http\Response
     */
    public function show(walk $walk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\walk  $walk
     * @return \Illuminate\Http\Response
     */
    public function edit(walk $walk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatewalkRequest  $request
     * @param  \App\Models\walk  $walk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatewalkRequest $request, walk $walk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\walk  $walk
     * @return \Illuminate\Http\Response
     */
    public function destroy(walk $walk)
    {
        //
    }
}
