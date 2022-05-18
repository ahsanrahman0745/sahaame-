<?php

namespace App\Http\Controllers;

use App\Models\businessPages;
use App\Http\Requests\StorebusinessPagesRequest;
use App\Http\Requests\UpdatebusinessPagesRequest;

class BusinessPagesController extends Controller
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
     * @param  \App\Http\Requests\StorebusinessPagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebusinessPagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\businessPages  $businessPages
     * @return \Illuminate\Http\Response
     */
    public function show(businessPages $businessPages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\businessPages  $businessPages
     * @return \Illuminate\Http\Response
     */
    public function edit(businessPages $businessPages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebusinessPagesRequest  $request
     * @param  \App\Models\businessPages  $businessPages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebusinessPagesRequest $request, businessPages $businessPages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\businessPages  $businessPages
     * @return \Illuminate\Http\Response
     */
    public function destroy(businessPages $businessPages)
    {
        //
    }
}
