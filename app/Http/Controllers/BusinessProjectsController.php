<?php

namespace App\Http\Controllers;

use App\Models\businessProjects;
use App\Http\Requests\StorebusinessProjectsRequest;
use App\Http\Requests\UpdatebusinessProjectsRequest;

class BusinessProjectsController extends Controller
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
     * @param  \App\Http\Requests\StorebusinessProjectsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebusinessProjectsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\businessProjects  $businessProjects
     * @return \Illuminate\Http\Response
     */
    public function show(businessProjects $businessProjects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\businessProjects  $businessProjects
     * @return \Illuminate\Http\Response
     */
    public function edit(businessProjects $businessProjects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebusinessProjectsRequest  $request
     * @param  \App\Models\businessProjects  $businessProjects
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebusinessProjectsRequest $request, businessProjects $businessProjects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\businessProjects  $businessProjects
     * @return \Illuminate\Http\Response
     */
    public function destroy(businessProjects $businessProjects)
    {
        //
    }
}
