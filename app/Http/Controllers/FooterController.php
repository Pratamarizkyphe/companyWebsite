<?php

namespace App\Http\Controllers;

use App\Models\footer;
use App\Http\Requests\StorefooterRequest;
use App\Http\Requests\UpdatefooterRequest;
use Illuminate\Request\Facades\DB;
class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foot = DB::table('footers')->get();
       
    }

    public function data(){
      
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
     * @param  \App\Http\Requests\StorefooterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefooterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(footer $footer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefooterRequest  $request
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefooterRequest $request, footer $footer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(footer $footer)
    {
        //
    }
}
