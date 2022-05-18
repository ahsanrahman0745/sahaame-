<?php

namespace App\Http\Controllers;

use App\Models\businessCategory;
use App\Http\Requests\StorebusinessCategoryRequest;
use App\Http\Requests\UpdatebusinessCategoryRequest;

class BusinessCategoryController extends Controller
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
     * @param  \App\Http\Requests\StorebusinessCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebusinessCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\businessCategory  $businessCategory
     * @return \Illuminate\Http\Response
     */
    public function show(businessCategory $businessCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\businessCategory  $businessCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(businessCategory $businessCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebusinessCategoryRequest  $request
     * @param  \App\Models\businessCategory  $businessCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebusinessCategoryRequest $request, businessCategory $businessCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\businessCategory  $businessCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(businessCategory $businessCategory)
    {
        //
    }
}
