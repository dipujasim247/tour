<?php

namespace App\Http\Controllers\backend;

use App\BookingModel;
use App\Http\Controllers\Controller;
use App\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selectBooking = BookingModel::all();
        return view('background.booking.index')->with(compact('selectBooking', $selectBooking));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectPackage = Package::all();
        return view('backend.booking.add')->with(compact('selectPackage', $selectPackage));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'package_id' => 'required',
            'customer_name' => 'required',
            'email' => 'email',
            'phone' => 'required|number',
            'number_of_adults' => 'nullable',
            'number_of_child' => 'nullable',
            'message' => 'nullable',
            'car_type' => 'nullable',
        ]);

        $result = BookingModel::create($data);

        if ($result){
            return session()->flash('success', 'Booking completed');
        }else{
            return session()->flash('error', 'Booking Not Set, Please check');
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
        $selectPackageDetails = Package::findOrFail($id);
        return view('backend.booking.booking_details')->with(compact('selectPackageDetails', $selectPackageDetails));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $selectPackageEdit = Package::findOrFail($id);
        return view('backend.booking.edit')->with(compact('selectPackageEdit', $selectPackageEdit));
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
            'package_id' => 'required',
            'customer_name' => 'required',
            'email' => 'email',
            'phone' => 'required|number',
            'number_of_adults' => 'nullable',
            'number_of_child' => 'nullable',
            'message' => 'nullable',
            'car_type' => 'nullable',
        ]);

        $result = BookingModel::findOrFail($id)->update($data);

        if ($result){
            return session()->flash('success', 'Booking updated');
        }else{
            return session()->flash('error', 'Booking Not update, Please check');
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
        $result = BookingModel::findOrFail($id)->delete();
        if ($result){
            return session()->flash('success', 'Booking updated');
        }else{
            return session()->flash('error', 'Booking Not update, Please check');
        }
    }
}
