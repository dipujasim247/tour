<?php

namespace App\Http\Controllers\backend;

use App\Continent;
use App\Http\Controllers\Controller;
use App\Package;
use App\SubContinent;
use App\Traits\ImageUploadTrait;
use App\TripType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    use ImageUploadTrait;
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::paginate(10);
        return view('backend.package.index')->with(compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $continents = Continent::select('id', 'continent_name')->get();
        $subContinents = SubContinent::select('id', 'sub_continent_name')->get();
        $tripTypes = TripType::select('id', 'trip_type')->get();
        return view('backend.package.add')
            ->with(compact('continents'))
            ->with(compact('subContinents'))
            ->with(compact('tripTypes'));
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
            'start_time' => 'date',
            'end_time' => 'date',
            'tour_price' => 'required|numeric',
            'tour_details' => 'required',
            'tour_price_include' => 'nullable',
            'tour_price_exclude' => 'nullable',
            'hotels' => 'required',
            'photo' => 'required',
        ]);

        // == take photo name and extention ==
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name = Str::slug($request->input('first_name')) . '_' . time();
            $folder = "/image_gallery";
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
            return redirect()->route('package.add');
        }else{
            $request->session()->flash('success','Package Create Fail');
            return redirect()->route('package.add');
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
        return view('backend.package.show', compact('showPackage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $packageEdit = Package::findOrFail($id);

        $continents = Continent::select('id', 'continent_name')->get();
        //$selectContinent = Continent::select('id', 'continent_name')->where('id', $id);
        $subContinents = SubContinent::select('id', 'sub_continent_name')->get();
        //$selectSubContinent = SubContinent::select('id', 'sub_continent_name')->where('id', $id);
        $tripTypes = TripType::select('id', 'trip_type')->get();
        //$selectTripTypeContinent = TripType::select('id', 'trip_type')->where('id', $id);
        return view('backend.package.edit')
            ->with(compact('packageEdit'))
            ->with(compact('continents'))
            ->with(compact('subContinents'))
            ->with(compact('tripTypes'));
//            ->with(compact('selectContinent'))
//            ->with(compact('selectSubContinent'))
//            ->with(compact('selectTripTypeContinent'));
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
        $data = $request->validate([
            'package_name' => 'required',
            'continents_id' => 'required|numeric',
            'sub_continents_id' => 'required|numeric',
            'trip_type_id' => 'required|numeric',
            'tour_duration' => 'required',
            'tour_price' => 'required|numeric',
            'tour_details' => 'required',
            'tour_price_include' => '',
            'tour_price_exclude' => '',
            'hotels' => 'required',
            'photo' => 'required',
        ]);

        // == take photo name and extention ==
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name = Str::slug($request->input('first_name')) . '_' . time();
            $folder = "/image_gallery/";
            $filePath = $folder . $name . '.' . $photo->getClientOriginalExtension();
            $this->uploadImg($photo, $folder, 'public', $name);
        }

        // == store data from package ==
        $result = Package::findOrFail($id);
        if ($result->id == $id){
            $result->update([
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
        }else{
            session()->flash('error','did not find any id');
            return redirect()->route('package.edit');
        }



        // == sessions ==
        if ($result){
            $request->session()->flash('success','Package Updated Successfully');
            return redirect()->route('package.index');
        }else{
            $request->session()->flash('error','Package Create Fail');
            return redirect()->route(' package.edit');
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
            return redirect()->route('package.index');
        }else{
            session()->flash('error','Package Delete Fail');
            return redirect()->route('package.index');
        }
    }
}

