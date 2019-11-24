@extends('backend.back_main')
<!-- ============================================================== -->
<!-- section title start  -->
<!-- ============================================================== -->
@section('title')
    Admin|SubContinent|Add
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
                    <h3 class="text-themecolor">Create</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item">Create</li>
                        <li class="breadcrumb-item active">Sub Continent</li>
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
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->

            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h4 class="m-b-0 text-white">Sub Continent </h4>
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
                            z
                        </div>
                        <div class="card-body">
                            <!-- ============================================================== -->
                            <!-- Start Content Form-->
                            <!-- ============================================================== -->

                            <form action="{{ route('subcontinent.store') }}" method="post"
                                  class="form-horizontal form-bordered" enctype="multipart/form-data">

                                @csrf
                                @method('POST')

                                <div class="form-body">

                                    <!-- ============================= Continent Name ================================= -->
                                    <div class="form-group row">
                                        <label for="name">Sub Continent Name </label>
                                        <input type="text" id="" name="sub_continent_name"
                                               value="{{ old('sub_continent_name') }}" class="form-control"
                                               placeholder="Sub Continent Name">
                                        <span class="text text-danger">{{ $errors->first('sub_continent_name') }}</span>
                                    </div>

                                    <!-- ============================= Continent name select ================================= -->
                                    <div class="form-group row">
                                        <label for="name">Select Continent Name </label>
                                        <select class="select2 form-control custom-select" name="continent_name"
                                                style="width: 100%; height:36px;">
                                            <option>Continent Name</option>
                                            @foreach($continents as $continent)

                                                <option value="{{ $continent->id }}">
                                                    {{ $continent->continent_name }}
                                                </option>

                                            @endforeach
                                        </select>
                                        <span class="text text-danger">{{ $errors->first('continent_name') }}</span>
                                    </div>
                                    <!-- ========================== Description ==================================== -->
                                    <div class="form-group row">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="5" name="description"></textarea>
                                        <span class="text text-danger">{{ $errors->first('description') }}</span>
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
