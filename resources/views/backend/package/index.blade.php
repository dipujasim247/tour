@extends('backend.back_main')

{{-- ================================ title section start======================================== --}}
@section('title')
    Dashboard|Package
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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item">Packages</li>
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
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Package Name</th>
                                    <th>Country Name</th>
                                    <th>Sub Country Name</th>
                                    <th>Tour Type</th>
                                    <th>Tour Duration</th>
                                    <th>Tour Start</th>
                                    <th>Tour End</th>
                                    <th>Tour Price</th>
                                    <th>Tour Details</th>
                                    <th>Tour Price Include</th>
                                    <th>Tour Price Exclude</th>
                                    <th>Hotel</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($packages as $package)
                                    <tr id="1" class="gradeX">
                                        <td>{{ $package->id }}</td>
                                        <td><img class="img-thumbnail" src="{{ asset('$package->photo') }}" alt="">
                                        </td>
                                        <td>{{ $package->package_name }}</td>
                                        <td>{{ $package->continent->continent_name }}</td>
                                        <td>{{ $package->subcontinent->sub_continent_name }}</td>
                                        <td>{{ $package->triptype->trip_type }}</td>
                                        <td>{{ $package->tour_duration }}</td>
                                        <td>{{ $package->start_date }}</td>
                                        <td>{{ $package->end_date }}</td>
                                        <td>{{ $package->tour_price }}</td>
                                        <td>{{ $package->tour_details }}</td>
                                        <td>{{ $package->tour_price_include }}</td>
                                        <td>{{ $package->tour_price_exclude }}</td>
                                        <td>{{ $package->hotels }}</td>
                                        <td>
                                            <a type="button" href="{{ route('package.edit', $package->id) }}"
                                               class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>

                                            </a>
                                            <form action="{{ route('package.delete', $package->id) }}"
                                                  method="post" onsubmit="return confirm('Are You Sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xs"><i
                                                        class="fa fa-trash-o"></i>

                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Package Name</th>
                                    <th>Country Name</th>
                                    <th>Sub Country Name</th>
                                    <th>Tour Type</th>
                                    <th>Tour Duration</th>
                                    <th>Tour Start</th>
                                    <th>Tour End</th>
                                    <th>Tour Price</th>
                                    <th>Tour Details</th>
                                    <th>Tour Price Include</th>
                                    <th>Tour Price Exclude</th>
                                    <th>Hotel</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        {{--                        <div class="col-sm-12 col-md-5">--}}
                        {{--                            <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing {{$continents->count()}} of {{$counts}} entries</div>--}}
                        {{--                        </div>--}}
                        <div class="col-sm-12 col-md-7">
                            {{$packages->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->




@endsection


{{-- ================================ content section end======================================== --}}
