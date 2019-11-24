@extends('backend.back_main')

{{-- ================================ title section start======================================== --}}
@section('title')
    Dashboard|Trip Type
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
                        <li class="breadcrumb-item">Trip Type</li>
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
            <div class="row">
                <div class="col-12">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">

                            <table class="table table-striped table-bordered" id="editable-datatable">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Trip Type</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tripTypes as $tripType)
                                    <tr id="1" class="gradeX">
                                        <td>{{ $tripType->id }}</td>
                                        <td>{{ $tripType->trip_type }}</td>
                                        <td class="w-50">{{ $tripType->description }}</td>
                                        <td>
                                            <a type="button" href="{{ route('trip_type.edit', $tripType->id) }}"
                                               class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>

                                            </a>
                                            <form action="{{ route('trip_type.delete', $tripType->id) }}" method="post"
                                                  onsubmit="return confirm('Are You Sure?')">
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
                                    <th>Trip Type</th>
                                    <th>Description</th>
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
                            {{$tripTypes->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->




@endsection


{{-- ================================ content section end======================================== --}}
