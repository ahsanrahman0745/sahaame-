<?php

namespace App\Http\Controllers;

use App\Models\stores;
use App\Http\Requests\StorestoresRequest;
use App\Http\Requests\UpdatestoresRequest;

class StoresController extends Controller
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
     * @param  \App\Http\Requests\StorestoresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorestoresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stores  $stores
     * @return \Illuminate\Http\Response
     */
    public function show(stores $stores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stores  $stores
     * @return \Illuminate\Http\Response
     */
    public function edit(stores $stores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestoresRequest  $request
     * @param  \App\Models\stores  $stores
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestoresRequest $request, stores $stores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stores  $stores
     * @return \Illuminate\Http\Response
     */
    public function destroy(stores $stores)
    {
        //
    }
}
