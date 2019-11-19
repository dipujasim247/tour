<?php

namespace App\Http\Controllers\backend;

use App\Continent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContinentController extends Controller
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
        $continent = Continent::paginate(20);
        return view('backend.continent.index')->with(compact('continent', $continent));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.continent.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // == Continent validation ==
        $data = $request->validate([
            'continent_name' => 'required',
            'starting_price' => 'required',
            'description' => 'nullable',
            'photo' => 'required|images|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name = Str::slug($request->input('first_name')) . '_' . time();
            $folder = "/images/";
            $filePath = $folder . $name . '.' . $photo->getClientOriginalExtension();
            $this->uploadImg($photo, $folder, 'public', $name);
        }

        // == store Continent ==
        $result = Continent::create([
            'continent_name' => $request->continent_name,
            'starting_price' => $request->starting_price,
            'description' => $request->description,
            'photo' => $filePath,
        ]);

        if ($result){
            $request->session()->flash('success','Continent Created Successfully');
            return redirect()->route('backend.continent.index');
        }else{
            $request->session()->flash('success','Continent Create Fail');
            return redirect()->route('backend.continent.add');
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
        $continenShow = Continent::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $continenShow = Continent::findOrFail($id);
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
            'continent_name' => 'required',
            'starting_price' => 'required',
            'description' => 'nullable',
            'photo' => 'nullable',
        ]);

        // == photo store to photo galary ==
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name = Str::slug($request->input('first_name')) . '_' . time();
            $folder = "/images/";
            $filePath = $folder . $name . '.' . $photo->getClientOriginalExtension();
            $this->uploadImg($photo, $folder, 'public', $name);
        }

        // == update Continent ==
        $result = Continent::findOrFail($id)->update([
            'continent_name' => $request->continent_name,
            'starting_price' => $request->starting_price,
            'description' => $request->description,
            'photo' => $filePath,
        ]);

        if ($result){
            $request->session()->flash('success','Continent Created Successfully');
            return redirect()->route('backend.continent.index');
        }else{
            $request->session()->flash('success','Continent Create Fail');
            return redirect()->route('backend.continent.add');
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
        $result = Continent::findOrFail($id)->delete();

        if ($result){
            session()->flash('success','Continent Created Successfully');
            return redirect()->route('backend.continent.index');
        }else{
            session()->flash('success','Continent Create Fail');
            return redirect()->route('backend.continent.add');
        }
    }
}
