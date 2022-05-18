<?php

namespace App\Http\Controllers;

use App\Models\emailtemplate;
use App\Http\Requests\StoreemailtemplateRequest;
use App\Http\Requests\UpdateemailtemplateRequest;

class EmailtemplateController extends Controller
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
     * @param  \App\Http\Requests\StoreemailtemplateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreemailtemplateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\emailtemplate  $emailtemplate
     * @return \Illuminate\Http\Response
     */
    public function show(emailtemplate $emailtemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\emailtemplate  $emailtemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(emailtemplate $emailtemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateemailtemplateRequest  $request
     * @param  \App\Models\emailtemplate  $emailtemplate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateemailtemplateRequest $request, emailtemplate $emailtemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\emailtemplate  $emailtemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(emailtemplate $emailtemplate)
    {
        //
    }
}
