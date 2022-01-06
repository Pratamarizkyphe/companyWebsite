<?php

namespace App\Http\Controllers;

use App\Models\misi;
use App\Http\Requests\StoremisiRequest;
use App\Http\Requests\UpdatemisiRequest;
use Illuminate\Support\Facades\DB;
class MisiController extends Controller
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
        $misis = DB::table('misis')->get();
        return view ('frontend.profile',['misis' => $misis]);
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
     * @param  \App\Http\Requests\StoremisiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremisiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\misi  $misi
     * @return \Illuminate\Http\Response
     */
    public function show(misi $misi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\misi  $misi
     * @return \Illuminate\Http\Response
     */
    public function edit(misi $misi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemisiRequest  $request
     * @param  \App\Models\misi  $misi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemisiRequest $request, misi $misi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\misi  $misi
     * @return \Illuminate\Http\Response
     */
    public function destroy(misi $misi)
    {
        //
    }
}
