<?php

namespace App\Http\Controllers;

use App\Models\businessServices;
use App\Http\Requests\StorebusinessServicesRequest;
use App\Http\Requests\UpdatebusinessServicesRequest;

class BusinessServicesController extends Controller
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
     * @param  \App\Http\Requests\StorebusinessServicesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebusinessServicesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\businessServices  $businessServices
     * @return \Illuminate\Http\Response
     */
    public function show(businessServices $businessServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\businessServices  $businessServices
     * @return \Illuminate\Http\Response
     */
    public function edit(businessServices $businessServices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebusinessServicesRequest  $request
     * @param  \App\Models\businessServices  $businessServices
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebusinessServicesRequest $request, businessServices $businessServices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\businessServices  $businessServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(businessServices $businessServices)
    {
        //
    }
}
