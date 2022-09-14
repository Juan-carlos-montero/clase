<?php

namespace App\Http\Controllers;

use App\Models\Models\Mov;
use Illuminate\Http\Request;

class MovController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie=Movie::all();
        return\view('view.list',$movie);
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
     * @param  \App\Models\Models\Mov  $mov
     * @return \Illuminate\Http\Response
     */
    public function show(Mov $mov)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Models\Mov  $mov
     * @return \Illuminate\Http\Response
     */
    public function edit(Mov $mov)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Models\Mov  $mov
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mov $mov)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Models\Mov  $mov
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mov $mov)
    {
        //
    }
}
