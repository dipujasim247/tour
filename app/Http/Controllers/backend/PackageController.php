<?php

namespace App\Http\Controllers\backend;

use App\Continent;
use App\Http\Controllers\Controller;
use App\Package;
use App\SubContinent;
use App\TripType;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Package::paginate(20);
        return view('backend.subcontinent.index')->with(compact('package', $package));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $continent = Continent::all();
        $subContinent = SubContinent::all();
        $tripType = TripType::all();
        return view('backend.subcontinent.add')
            ->with(compact('continent', $continent))
            ->with(compact('subContinent', $subContinent))
            ->with(compact('tripType', $tripType));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'package_name' => 'required',
            'continents_id' => 'required',
            'sub_continents_id' => 'required',
            'trip_type_id' => 'required',
            'tour_duration' => 'required',
            'start_time' => 'nullable|date',
            'end_time' => 'nullable|date',
            'tour_price' => 'required|number',
            'tour_details' => 'required',
            'tour_price_include' => 'nullable',
            'tour_price_exclude' => 'nullable',
            'hotels' => 'required',
            'photo' => 'required|images|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // == take photo name and extention ==
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name = Str::slug($request->input('first_name')) . '_' . time();
            $folder = "/images/";
            $filePath = $folder . $name . '.' . $photo->getClientOriginalExtension();
            $this->uploadImg($photo, $folder, 'public', $name);
        }

        // == store data from package ==
        $result = Package::create([
            'package_name' => $request->package_name,
            'continents_id' =>  $request->continents_id,
            'sub_continents_id' =>  $request->sub_continents_id,
            'trip_type_id' =>  $request->trip_type_id,
            'tour_duration' =>  $request->tour_duration,
            'tour_price' =>  $request->tour_price,
            'tour_details' =>  $request->tour_details,
            'tour_price_include' =>  $request->tour_price_include,
            'tour_price_exclude' =>  $request->tour_price_exclude,
            'hotels' =>  $request->hotels,
            'photo' => $filePath,
        ]);

        // == sessions ==
        if ($result){
            $request->session()->flash('success','Package Created Successfully');
            return redirect()->route('backend.package.index');
        }else{
            $request->session()->flash('success','Package Create Fail');
            return redirect()->route('backend.package.add');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showPackage = Package::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $packageEdit = Package::all()->findOrFail($id);
        $continent = Continent::all();
        $subContinent = SubContinent::all();
        $tripType = TripType::all();
        return view('backend.subcontinent.add')
            ->with(compact('packageEdit', $packageEdit))
            ->with(compact('continent', $continent))
            ->with(compact('subContinent', $subContinent))
            ->with(compact('tripType', $tripType));
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
        $request->validate([
            'package_name' => 'required',
            'continents_id' => 'required',
            'sub_continents_id' => 'required',
            'trip_type_id' => 'required',
            'tour_duration' => 'required',
            'tour_price' => 'required|number',
            'tour_details' => 'required',
            'tour_price_include' => 'nullable',
            'tour_price_exclude' => 'nullable',
            'hotels' => 'required',
            'photo' => 'required|images|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // == take photo name and extention ==
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name = Str::slug($request->input('first_name')) . '_' . time();
            $folder = "/images/";
            $filePath = $folder . $name . '.' . $photo->getClientOriginalExtension();
            $this->uploadImg($photo, $folder, 'public', $name);
        }

        // == store data from package ==
        $result = Package::findOrFail($id)->update([
            'package_name' => $request->package_name,
            'continents_id' =>  $request->continents_id,
            'sub_continents_id' =>  $request->sub_continents_id,
            'trip_type_id' =>  $request->trip_type_id,
            'tour_duration' =>  $request->tour_duration,
            'tour_price' =>  $request->tour_price,
            'tour_details' =>  $request->tour_details,
            'tour_price_include' =>  $request->tour_price_include,
            'tour_price_exclude' =>  $request->tour_price_exclude,
            'hotels' =>  $request->hotels,
            'photo' => $filePath,
        ]);

        // == sessions ==
        if ($result){
            $request->session()->flash('success','Package Updated Successfully');
            return redirect()->route('backend.package.index');
        }else{
            $request->session()->flash('success','Package Create Fail');
            return redirect()->route('backend.package.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Package::findOrFail($id)->delete();
        // == sessions ==
        if ($result){
            session()->flash('success','Package Deleted Successfully');
            return redirect()->route('backend.package.index');
        }else{
            session()->flash('success','Package Delete Fail');
            return redirect()->route('backend.package.index');
        }
    }
}

