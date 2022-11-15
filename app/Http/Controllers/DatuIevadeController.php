<?php

namespace App\Http\Controllers;

use App\Models\datu_ievade;
use Illuminate\Http\Request;

class DatuIevadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ress = datu_ievade::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datu_ievade  $datu_ievade
     * @return \Illuminate\Http\Response
     */
    public function show(datu_ievade $datu_ievade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datu_ievade  $datu_ievade
     * @return \Illuminate\Http\Response
     */
    public function edit(datu_ievade $datu_ievade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datu_ievade  $datu_ievade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datu_ievade $datu_ievade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datu_ievade  $datu_ievade
     * @return \Illuminate\Http\Response
     */
    public function destroy(datu_ievade $datu_ievade)
    {
        //
    }
}
