<?php

namespace App\Http\Controllers;

use App\Models\site_sections;
use App\Http\Requests\Storesite_sectionsRequest;
use App\Http\Requests\Updatesite_sectionsRequest;

class SiteSectionsController extends Controller
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
     * @param  \App\Http\Requests\Storesite_sectionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storesite_sectionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\site_sections  $site_sections
     * @return \Illuminate\Http\Response
     */
    public function show(site_sections $site_sections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\site_sections  $site_sections
     * @return \Illuminate\Http\Response
     */
    public function edit(site_sections $site_sections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesite_sectionsRequest  $request
     * @param  \App\Models\site_sections  $site_sections
     * @return \Illuminate\Http\Response
     */
    public function update(Updatesite_sectionsRequest $request, site_sections $site_sections)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\site_sections  $site_sections
     * @return \Illuminate\Http\Response
     */
    public function destroy(site_sections $site_sections)
    {
        //
    }
}
