<?php

namespace App\Http\Controllers;

use App\Models\businessProfiles;
use App\Http\Requests\StorebusinessProfilesRequest;
use App\Http\Requests\UpdatebusinessProfilesRequest;

class BusinessProfilesController extends Controller
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
     * @param  \App\Http\Requests\StorebusinessProfilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebusinessProfilesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\businessProfiles  $businessProfiles
     * @return \Illuminate\Http\Response
     */
    public function show(businessProfiles $businessProfiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\businessProfiles  $businessProfiles
     * @return \Illuminate\Http\Response
     */
    public function edit(businessProfiles $businessProfiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebusinessProfilesRequest  $request
     * @param  \App\Models\businessProfiles  $businessProfiles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebusinessProfilesRequest $request, businessProfiles $businessProfiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\businessProfiles  $businessProfiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(businessProfiles $businessProfiles)
    {
        //
    }
}
