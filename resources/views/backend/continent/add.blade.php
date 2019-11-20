@extends('backend.back_main')

@section('title')
    Admin|Continent
    @endsection

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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Create</li>
                        <li class="breadcrumb-item active">Continent</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
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
                            <h4 class="m-b-0 text-white">Content </h4>
                        </div>
                        <div class="card-body">
                            <!-- ============================================================== -->
                            <!-- Start Content Form-->
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

                            <form action="{{ route('continent.store') }}" class="form-horizontal form-bordered">
                                @csrf
                                <div class="form-body">

                                    <div class="form-group row">
                                        <label for="example-email">Continent Name </label>
                                        <input type="text" id="" name="continent_name" value="{{ old('continent_name') }}" class="form-control" placeholder="Continent Name">
                                        <span class="text text-danger">{{ $errors->first('continent_name') }}</span>
                                    </div>



                                    <div class="form-group row">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>


                                    <div class="form-group row">
                                        <div class="custom-file mb-3">
                                            <input type="file" name="photo" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label form-control" for="customFile">Choose Image</label>
                                            <span class="text text-danger">{{ $errors->first('photo') }}</span>
                                        </div>
                                    </div>



                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="offset-sm-3 col-md-9">
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
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
