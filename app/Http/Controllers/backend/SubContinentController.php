<?php

namespace App\Http\Controllers\backend;

use App\Continent;
use App\Http\Controllers\Controller;
use App\SubContinent;
use Illuminate\Http\Request;

class SubContinentController extends Controller
{

    // == Constructor ==
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subContinents = SubContinent::paginate(10);
        return view('backend.subcontinent.index')->with(compact('subContinents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::select('id', 'continent_name')->get();
        return view('backend.subcontinent.add')->with(compact('continents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // == Validation SubContinent ==
        $data = $request->validate([
            'sub_continent_name' => 'required',
            'continent_name' => 'required',
            'description' => 'nullable',
            'photo' => 'required',
        ]);

        dd($data);

        // == take photo name and extention ==
//        if ($request->hasFile('photo')) {
//            $photo = $request->file('photo');
            $name = Str::slug($request->input('first_name')) . '_' . time();
//            $folder = "/images/";
//            $filePath = $folder . $name . '.' . $photo->getClientOriginalExtension();
//            $this->uploadImg($photo, $folder, 'public', $name);
//        }

        $photoPath = $request->file('photo')->storeAs('/public/image_gallery/', $name);

        // == store Continent ==
        $result = SubContinent::create([
            'sub_continent_name' => $request->sub_continent_name,
            'continent_name' => $request->continent_name,
            'description' => $request->description,
            'photo' => $photoPath,
        ]);

        if ($result){
            $request->session()->flash('success','Sub Continent Created Successfully');
            return redirect()->route('subcontinent.add');
        }else{
            $request->session()->flash('success','Sub Continent Create Fail');
            return redirect()->route('subcontinent.add');
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
        // == Show details SubContinent ==
        $continenShow = SubContinent::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // == Edit SubContinent ==
        $subContinenEdit = SubContinent::findOrFail($id);
        return view('backend.subcontinent.edit')->with(compact('subContinenEdit'));
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
        // == Validation SubContinent for Update ==
        $data = $request->validate([
            'sub_continent_name' => 'required',
            'continent_name' => 'required',
            'description' => 'nullable',
            'photo' => 'required|images|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

//        if ($request->hasFile('photo')) {
//            $photo = $request->file('photo');
            $name = Str::slug($request->input('first_name')) . '_' . time();
//            $folder = "/images/";
//            $filePath = $folder . $name . '.' . $photo->getClientOriginalExtension();
//            $this->uploadImg($photo, $folder, 'public', $name);
//        }

        $photoPath = $request->file('photo')->storeAs('/public/image_gallery/', $name);
        // == Update Continent ==
        $result = SubContinent::findOrFail($id)->update([
            'sub_continent_name' => $request->sub_continent_name,
            'continent_name' => $request->continent_name,
            'description' => $request->description,
            'photo' => $photoPath,
        ]);

        if ($result){
            $request->session()->flash('success','Sub Continent Updated Successfully');
            return redirect()->route('subcontinent.index');
        }else{
            $request->session()->flash('success','Sub Continent Create Fail');
            return redirect()->route('subcontinent.edit');
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
        // == Delete Sub continent from database ==
        $result = SubContinent::findOrFail($id)->delete();
        if ($result){
            session()->flash('success','Sub Continent Updated Successfully');
            return redirect()->route('subcontinent.index');
        }else{
            session()->flash('success','Sub Continent Create Fail');
            return redirect()->route('subcontinent.edit');
        }
    }
}
