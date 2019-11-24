<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\TripType;
use Illuminate\Http\Request;

class TripTypeController extends Controller
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
        $tripTypes = TripType::paginate(10);
        return view('backend.trip_type.index')->with(compact('tripTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.trip_type.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'trip_type' => 'required',
            'description' => 'nullable',
        ]);

        // == update Continent ==
        $result = TripType::create($data);

        if ($result){
            $request->session()->flash('success','Trip type Created Successfully');
            return redirect()->route('trip_type.add');
        }else{
            $request->session()->flash('error','Trip type Create Fail');
            return redirect()->route('trip_type.add');
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
        $tripType = TripType::findOrFail($id);
        return view('backend.trip_type.edit', compact('tripType'));
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
            'trip_type' => 'required',
            'description' => 'nullable',
        ]);

        // == update Continent ==
        $result = TripType::findOrFail($id)->update($data);

        if ($result){
            $request->session()->flash('success','Trip type Updated Successfully');
            return redirect()->route('trip_type.edit');
        }else{
            $request->session()->flash('error','Trip type Update Fail');
            return redirect()->route('trip_type.edit');
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
        $result = TripType::findOrFail($id)->delete();
        if ($result){
            session()->flash('success','Trip type Deleted Successfully');
            return redirect()->route('trip_type.index');
        }else{
            session()->flash('error','Trip type Delete Fail');
            return redirect()->route('trip_type.index');
        }
    }
}
