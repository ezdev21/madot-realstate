<?php

namespace App\Http\Controllers;

use App\Models\Realstate;
use App\Http\Requests\StoreRealstateRequest;
use App\Http\Requests\UpdateRealstateRequest;

class RealstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreRealstateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRealstateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Realstate  $realstate
     * @return \Illuminate\Http\Response
     */
    public function show(Realstate $realstate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Realstate  $realstate
     * @return \Illuminate\Http\Response
     */
    public function edit(Realstate $realstate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRealstateRequest  $request
     * @param  \App\Models\Realstate  $realstate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRealstateRequest $request, Realstate $realstate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Realstate  $realstate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Realstate $realstate)
    {
        //
    }
}
