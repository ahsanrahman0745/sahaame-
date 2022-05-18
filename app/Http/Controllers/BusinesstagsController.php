<?php

namespace App\Http\Controllers;

use App\Models\businesstags;
use App\Http\Requests\StorebusinesstagsRequest;
use App\Http\Requests\UpdatebusinesstagsRequest;

class BusinesstagsController extends Controller
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
     * @param  \App\Http\Requests\StorebusinesstagsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebusinesstagsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\businesstags  $businesstags
     * @return \Illuminate\Http\Response
     */
    public function show(businesstags $businesstags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\businesstags  $businesstags
     * @return \Illuminate\Http\Response
     */
    public function edit(businesstags $businesstags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebusinesstagsRequest  $request
     * @param  \App\Models\businesstags  $businesstags
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebusinesstagsRequest $request, businesstags $businesstags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\businesstags  $businesstags
     * @return \Illuminate\Http\Response
     */
    public function destroy(businesstags $businesstags)
    {
        //
    }
}
