<?php

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreFacilitatorRequest;
use App\Http\Requests\UpdateFacilitatorRequest;
use App\Models\Facilitator;

class FacilitatorController extends Controller
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
     * @param  \App\Http\Requests\Backend\StoreFacilitatorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacilitatorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facilitator  $facilitator
     * @return \Illuminate\Http\Response
     */
    public function show(Facilitator $facilitator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facilitator  $facilitator
     * @return \Illuminate\Http\Response
     */
    public function edit(Facilitator $facilitator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacilitatorRequest  $request
     * @param  \App\Models\Facilitator  $facilitator
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacilitatorRequest $request, Facilitator $facilitator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facilitator  $facilitator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facilitator $facilitator)
    {
        //
    }
}
