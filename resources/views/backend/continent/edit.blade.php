@extends('backend.back_main')
<!-- ============================================================== -->
<!-- section title start  -->
<!-- ============================================================== -->
@section('title')
    Admin|Continent|Edit
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
                        <li class="breadcrumb-item">Edit</li>
                        <li class="breadcrumb-item active">Continent</li>
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
                            <h4 class="m-b-0 text-white">Continent </h4>
                        </div>
                        <div class="card-body">
                            <!-- ============================================================== -->
                            <!-- Start Content Form-->
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

                            <form action="{{ route('continent.update', $continentEdit->id) }}" method="post"
                                  class="form-horizontal form-bordered" enctype="multipart/form-data">

                                @csrf
                                @method('PUT')

                                <div class="form-body">
                                    <!-- ============================= Continent Name ================================= -->
                                    <div class="form-group row">
                                        <label for="name">Continent Name </label>
                                        <input type="text" id="" name="continent_name"
                                               value="{{ $continentEdit->continent_name }}" class="form-control"
                                               placeholder="Continent Name">
                                        <span class="text text-danger">{{ $errors->first('continent_name') }}</span>
                                    </div>

                                    <!-- ============================= Starting price ================================= -->
                                    <div class="form-group row">
                                        <label for="example-email">Starting price </label>
                                        <input type="text" id="" name="starting_price"
                                               value="{{ $continentEdit->starting_price }}" class="form-control"
                                               placeholder="Starting price">
                                        <span class="text text-danger">{{ $errors->first('starting_price') }}</span>
                                    </div>
                                    <!-- ========================== Description ==================================== -->
                                    <div class="form-group row">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="5"
                                                  name="description">{{ $continentEdit->description }}</textarea>
                                        <span class="text text-danger">{{ $errors->first('description') }}</span>
                                    </div>

                                    <!-- ============================ Image file ================================== -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Image Upload</h4>
                                                        <label for="input-file-now-custom-1">Change Your
                                                            Image {{ $continentEdit->photo }}</label>
                                                        <input type="file" name="photo" id="input-file-now-custom-1"
                                                               class="dropify"/>
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
                                                    <button type="submit" value="submit" class="btn btn-success"><i
                                                            class="fa fa-check"></i> Update
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
