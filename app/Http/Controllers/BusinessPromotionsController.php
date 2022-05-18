<?php

namespace App\Http\Controllers;

use App\Models\businessPromotions;
use App\Http\Requests\StorebusinessPromotionsRequest;
use App\Http\Requests\UpdatebusinessPromotionsRequest;

class BusinessPromotionsController extends Controller
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
     * @param  \App\Http\Requests\StorebusinessPromotionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebusinessPromotionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\businessPromotions  $businessPromotions
     * @return \Illuminate\Http\Response
     */
    public function show(businessPromotions $businessPromotions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\businessPromotions  $businessPromotions
     * @return \Illuminate\Http\Response
     */
    public function edit(businessPromotions $businessPromotions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebusinessPromotionsRequest  $request
     * @param  \App\Models\businessPromotions  $businessPromotions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebusinessPromotionsRequest $request, businessPromotions $businessPromotions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\businessPromotions  $businessPromotions
     * @return \Illuminate\Http\Response
     */
    public function destroy(businessPromotions $businessPromotions)
    {
        //
    }
}
