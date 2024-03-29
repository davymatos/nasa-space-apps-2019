<?php

namespace App\Http\Controllers;

use App\Politic;
use Illuminate\Http\Request;

class PoliticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
        $politic = New Politic();
        $politic->description = $request->input("description");
        $politic->impact = $request->input("impact");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Politic  $politic
     * @return \Illuminate\Http\Response
     */
    public function show(Politic $politic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Politic  $politic
     * @return \Illuminate\Http\Response
     */
    public function edit(Politic $politic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Politic  $politic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Politic $politic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Politic  $politic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Politic $politic)
    {
        //
    }
}
