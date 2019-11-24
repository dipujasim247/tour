<?php

namespace App\Http\Controllers\backend;

use App\Continent;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContinentController extends Controller
{
    use ImageUploadTrait;

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
        $continents = Continent::paginate(10);
        return view('backend.continent.index')->with(compact('continents', $continents));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // == Continent validation ==
        $data = $request->validate([
            'continent_name' => 'required',
            'starting_price' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);

//        if ($request->hasFile('photo')) {
//            $photo = $request->file('photo');
                $name = Str::slug($request->input('continent_name')) . '_' . time();
//            $folder = "/image_gallery/";
//            $filePath = $folder . $name . '.' . $photo->getClientOriginalExtension();
//            $this->uploadImg($photo, $folder, 'public', $name);
//        }

        $photoPath = $request->file('photo')->storeAs('/public/image_gallery', $name);

        // == store Continent ==
        $result = Continent::create([
            'continent_name' => $request->continent_name,
            'starting_price' => $request->starting_price,
            'description' => $request->description,
            'photo' => $photoPath,
        ]);

        if ($result) {
            $request->session()->flash('success', 'Continent Created Successfully');
            return redirect()->route('continent.index');
        } else {
            $request->session()->flash('error', 'Continent Create Fail');
            return redirect()->route('continent.add');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $continenShow = Continent::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $continentEdit = Continent::findOrFail($id);
        return view('backend.continent.edit')->with(compact('continentEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'continent_name' => 'required',
            'starting_price' => 'required',
            'description' => 'required',
        ]);

        // == photo store to photo galary ==
//        if ($request->hasFile('photo')) {
//            $photo = $request->file('photo');
                $name = Str::slug($request->input('continent_name')) . '_' . time();
//            $folder = "/image_gallery/";
//            $filePath = $folder . $name . '.' . $photo->getClientOriginalExtension();
//            $this->uploadImg($photo, $folder, 'public', $name);
//        }
        $photoPath = $request->file('photo')->storeAs('/public/image_gallery/', $name);
        // == update Continent ==
        $result = Continent::findOrFail($id)->update([
            'continent_name' => $request->continent_name,
            'starting_price' => $request->starting_price,
            'description' => $request->description,
            'photo' => $photoPath,
        ]);

        if ($result) {
            $request->session()->flash('success', 'Continent Created Successfully');
            return redirect()->route('continent.index');
        } else {
            $request->session()->flash('error', 'Continent Create Fail');
            return redirect()->route('continent.add');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Continent::findOrFail($id)->delete();

        if ($result) {
            session()->flash('success', 'Continent Deleted Successfully');
            return redirect()->route('continent.index');
        } else {
            session()->flash('error', 'Continent Delete Fail');
            return redirect()->route('continent.index');
        }
    }
}
