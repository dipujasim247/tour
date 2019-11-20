@extends('backend.back_main')

{{-- ================================ title section start======================================== --}}
@section('title')
    Dashboard|Admin panel
@endsection
{{-- ================================ title section end======================================== --}}
{{-- ================================ content section start======================================== --}}

@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
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
                    <h3 class="text-themecolor">List</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
                <div>
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
            <div class="row">
                <div class="col-12">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">

                            <table class="table table-striped table-bordered" id="editable-datatable">
                                <thead>
                                <tr>
                                    <th>Id</a></th>
                                    <th>Image</th>
                                    <th>Country name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($continents as $continent)
                                    <tr id="1" class="gradeX">
                                        <td>{{ $continent->id }}</td>
                                        <td>{{ $continent->photo }}</td>
                                        <td>{{ $continent->continent_name }}</td>
                                        <td>{{ $continent->description }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Country name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editable with Datatable</h4>
                            <div id="basicgrid"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Static</h4>
                            <div id="staticgrid"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Soarting</h4>
                            <div class="col-md-2 row">
                                <select id="sortingField" class="custom-select form-control input-sm m-b-10">
                                    <option>Name</option>
                                    <option>Age</option>
                                    <option>Address</option>
                                    <option>Country</option>
                                    <option>Married</option>
                                </select>
                            </div>
                            <div id="exampleSorting"></div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->


@endsection


{{-- ================================ content section end======================================== --}}
