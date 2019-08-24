<?php

namespace App\Http\Controllers;

use App\inter;
use Illuminate\Http\Request;

class InterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('backend/inter/index');
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
     * @param  \App\inter  $inter
     * @return \Illuminate\Http\Response
     */
    public function show(inter $inter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inter  $inter
     * @return \Illuminate\Http\Response
     */
    public function edit(inter $inter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inter  $inter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inter $inter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inter  $inter
     * @return \Illuminate\Http\Response
     */
    public function destroy(inter $inter)
    {
        //
    }
}
