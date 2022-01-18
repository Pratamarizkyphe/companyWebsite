<?php

namespace App\Http\Controllers;

use App\Models\vidio;
use App\Models\footer;
use App\Http\Requests\StorevidioRequest;
use App\Http\Requests\UpdatevidioRequest;
use Illuminate\Support\Facades\DB;

class VidioController extends Controller
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
    public function index_fr()
    {
        $vidio = DB::table('vidios')->get();
        $footer = Footer::all();
        return view('frontend.vidio',[
            'footer' => $footer,
            'vidio' => $vidio,
    
    ]);
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
     * @param  \App\Http\Requests\StorevidioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevidioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vidio  $vidio
     * @return \Illuminate\Http\Response
     */
    public function show(vidio $vidio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vidio  $vidio
     * @return \Illuminate\Http\Response
     */
    public function edit(vidio $vidio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevidioRequest  $request
     * @param  \App\Models\vidio  $vidio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevidioRequest $request, vidio $vidio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vidio  $vidio
     * @return \Illuminate\Http\Response
     */
    public function destroy(vidio $vidio)
    {
        //
    }
}
