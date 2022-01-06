<?php

namespace App\Http\Controllers;

use App\Models\hero;
use App\Http\Requests\StoreheroRequest;
use App\Http\Requests\UpdateheroRequest;
use Illuminate\Support\Facades\DB;
class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hero = DB::table('heroes')->get();
        return view ('frontend.home',['hero' => $hero]);

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
     * @param  \App\Http\Requests\StoreheroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreheroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateheroRequest  $request
     * @param  \App\Models\hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateheroRequest $request, hero $hero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(hero $hero)
    {
        //
    }
}
