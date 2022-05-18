<?php

namespace App\Http\Controllers;

use App\Models\businessPosts;
use App\Http\Requests\StorebusinessPostsRequest;
use App\Http\Requests\UpdatebusinessPostsRequest;

class BusinessPostsController extends Controller
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
     * @param  \App\Http\Requests\StorebusinessPostsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebusinessPostsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\businessPosts  $businessPosts
     * @return \Illuminate\Http\Response
     */
    public function show(businessPosts $businessPosts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\businessPosts  $businessPosts
     * @return \Illuminate\Http\Response
     */
    public function edit(businessPosts $businessPosts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebusinessPostsRequest  $request
     * @param  \App\Models\businessPosts  $businessPosts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebusinessPostsRequest $request, businessPosts $businessPosts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\businessPosts  $businessPosts
     * @return \Illuminate\Http\Response
     */
    public function destroy(businessPosts $businessPosts)
    {
        //
    }
}
