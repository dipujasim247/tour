<?php

namespace App\Http\Controllers\frontend;

use App\Continent;
use App\Http\Controllers\Controller;
use App\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function getAllContinents(){
        $continents = Continent::all();
        $allPackages = Package::all();
        return view('frontend.home.index')
            ->with(compact('continents'))
            ->with(compact('allPackages'));
    }

    public function getDestinations(){
        $destinations = Continent::select('id', 'continent_name')->get();
        return view('frontend.front_main', compact('destinations'));
    }

//    public function getAllPackages(){
//        $allPackages = Package::all();
//        return view('frontend.home.index')->with(compact('allPackages'));
//    }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
