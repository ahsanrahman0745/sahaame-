<?php

namespace App\Http\Controllers;

use App\Models\keywords;
use App\Http\Requests\StorekeywordsRequest;
use App\Http\Requests\UpdatekeywordsRequest;

class KeywordsController extends Controller
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
     * @param  \App\Http\Requests\StorekeywordsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekeywordsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\keywords  $keywords
     * @return \Illuminate\Http\Response
     */
    public function show(keywords $keywords)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\keywords  $keywords
     * @return \Illuminate\Http\Response
     */
    public function edit(keywords $keywords)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekeywordsRequest  $request
     * @param  \App\Models\keywords  $keywords
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekeywordsRequest $request, keywords $keywords)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\keywords  $keywords
     * @return \Illuminate\Http\Response
     */
    public function destroy(keywords $keywords)
    {
        //
    }
}
