@extends('backend.back_main')
<!-- ============================================================== -->
<!-- section title start  -->
<!-- ============================================================== -->
@section('title')
    Admin|Package|Edit
@endsection
<!-- ============================================================== -->
<!-- section title end  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- sectoin continent start -->
<!-- ============================================================== -->
@section('content')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Update</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item">Update</li>
                        <li class="breadcrumb-item active">Package</li>
                    </ol>
                </div>
                <div class="">
                    <button
                        class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10">
                        <i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- session section start-->
            <!-- ============================================================== -->
            @if(session()->has('success'))
                <div class="row">
                    <div class="col-12 alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            @elseif(session()->has('error'))
                <div class="row">
                    <div class="col-12 alert alert-danger">
                        {{ session('error') }}
                    </div>
                </div>
        @endif

        <!-- ============================================================== -->
            <!-- session section start-->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->

            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h4 class="m-b-0 text-white">Package </h4>
                        </div>
                        <div class="card-body">
                            <!-- ============================================================== -->
                            <!-- Start Content Form-->
                            <!-- ============================================================== -->

                            <form action="{{ route('package.update', $packageEdit->id) }}" method="post"
                                  class="form-horizontal form-bordered" enctype="multipart/form-data">

                                @csrf
                                @method('PUT')

                                <div class="form-body">

                                    <!-- ============================= Package Name ================================= -->
                                    <div class="form-group row">
                                        <label for="">Package Name (Required*) </label>
                                        <input type="text" id="" name="package_name"
                                               value="{{ $packageEdit->package_name }}" class="form-control"
                                               placeholder="Package Name">
                                        <span class="text text-danger">{{ $errors->first('package_name') }}</span>
                                    </div>
                                    <!-- ============================= Continent name select ================================= -->
                                    <div class="form-group row">
                                        <label for="name">Select Continent Name </label>
                                        <select class="select2 form-control custom-select" name="continents_id"
                                                style="width: 100%; height:36px;">
                                            <option>Continent Name</option>
                                            @foreach($continents as $continent)

                                                <option value="{{ $continent->id }}">
                                                    {{ $continent->continent_name }}
                                                </option>

                                            @endforeach
                                        </select>
                                        <span class="text text-danger">{{ $errors->first('continents_id') }}</span>
                                    </div>

                                    <!-- =============================Sub Continent name select ================================= -->
                                    <div class="form-group row">
                                        <label for="name">Select Sub Continent Name </label>
                                        <select class="select2 form-control custom-select" name="sub_continents_id"
                                                style="width: 100%; height:36px;">
                                            <option>Sub Continent Name</option>
                                            @foreach($subContinents as $subContinent)

                                                <option value="{{ $subContinent->id }}">
                                                    {{ $subContinent->sub_continent_name }}
                                                </option>

                                            @endforeach
                                        </select>
                                        <span class="text text-danger">{{ $errors->first('sub_continents_id') }}</span>
                                    </div>

                                    <!-- =============================Trip type select ================================= -->
                                    <div class="form-group row">
                                        <label for="name">Select Trip Type </label>
                                        <select class="select2 form-control custom-select" name="trip_type_id"
                                                style="width: 100%; height:36px;">
                                            <option>Trip Type</option>
                                            @foreach($tripTypes as $tripType)

                                                <option value="{{ $tripType->id }}">
                                                    {{ $tripType->trip_type }}
                                                </option>

                                            @endforeach
                                        </select>
                                        <span class="text text-danger">{{ $errors->first('trip_type_id') }}</span>
                                    </div>

                                    <!-- =============================Tour Duration ================================= -->
                                    <div class="form-group row">
                                        <label for="name">Tour Duration (Required*) </label>
                                        <input type="text" id="" name="tour_duration"
                                               value="{{ $packageEdit->tour_duration }}" class="form-control"
                                               placeholder="Tour Duration">
                                        <span class="text text-danger">{{ $errors->first('tour_duration') }}</span>
                                    </div>

                                    <!-- =============================Tour start date ================================= -->
                                    <div class="form-group row">
                                        <label for="start_date">Tour Start Date (Required*) </label>
                                        <input type="date" id="" name="start_date"
                                               value="{{ $packageEdit->start_date }}" class="form-control"
                                               placeholder="Tour Start Date">
                                        <span class="text text-danger">{{ $errors->first('start_date') }}</span>
                                    </div>

                                    <!-- =============================Tour end date ================================= -->
                                    <div class="form-group row">
                                        <label for="name">Tour End Date (Required*) </label>
                                        <input type="date" id="" name="end_date"
                                               value="{{ $packageEdit->end_date }}" class="form-control"
                                               placeholder="Tour End Date">
                                        <span class="text text-danger">{{ $errors->first('end_date') }}</span>
                                    </div>

                                    <!-- =============================Trip type select ================================= -->
                                    <div class="form-group row">
                                        <label for="name">Tour Price (Required*) </label>
                                        <input type="text" id="" name="tour_price"
                                               value="{{ $packageEdit->tour_price }}" class="form-control"
                                               placeholder="Tour Price">
                                        <span class="text text-danger">{{ $errors->first('tour_price') }}</span>
                                    </div>

                                    <!-- ========================== Tour Details ==================================== -->
                                    <div class="form-group row">
                                        <label>Tour Details (Required*)</label>
                                        <textarea class="form-control" rows="5"
                                                  name="tour_details">{{ $packageEdit->tour_details }}</textarea>
                                        <span class="text text-danger">{{ $errors->first('description') }}</span>
                                    </div>

                                    <!-- ========================== Tour Price Include ==================================== -->
                                    <div class="form-group row">
                                        <label>Tour Price Include</label>
                                        <textarea class="form-control" rows="5"
                                                  name="tour_price_include">{{ $packageEdit->tour_price_include }}</textarea>
                                        <span class="text text-danger">{{ $errors->first('tour_price_include') }}</span>
                                    </div>

                                    <!-- ========================== Tour Price Exclude ==================================== -->
                                    <div class="form-group row">
                                        <label>Tour Price Exclude</label>
                                        <textarea class="form-control" rows="5"
                                                  name="tour_price_exclude">{{ $packageEdit->tour_price_exclude }}</textarea>
                                        <span class="text text-danger">{{ $errors->first('tour_price_exclude') }}</span>
                                    </div>

                                    <!-- ============================= Hotel Name select ================================= -->
                                    <div class="form-group row">
                                        <label for="name">Hotels (Required*) </label>
                                        <input type="text" id="" name="hotels"
                                               value="{{ $packageEdit->hotels }}" class="form-control"
                                               placeholder="Hotels">
                                        <span class="text text-danger">{{ $errors->first('hotels') }}</span>
                                    </div>

                                    <!-- ============================ Image file ================================== -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Image Upload</h4>
                                                        <label for="input-file-now-custom-1">Select Your Image</label>
                                                        <input type="file" name="photo" class="dropify"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="offset-sm-3 col-md-9">
                                                    <button type="Submit" value="Submit" class="btn btn-success"><i
                                                            class="fa fa-check"></i> Submit
                                                    </button>
                                                    <button type="button" class="btn btn-inverse">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- ============================================================== -->
                            <!-- End Content Form-->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->

            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2019 NGICON.com
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@endsection
<!-- ============================================================== -->
<!-- sectoin continent end -->
<!-- ============================================================== -->
