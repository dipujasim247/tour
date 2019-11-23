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
                                    <th>Starting Price</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($continents as $continent)
                                    <tr id="1" class="gradeX">
                                        <td>{{ $continent->id }}</td>
                                        <td><img class="img-thumbnail" src="{{ asset('$continent->photo') }}" alt=""></td>
                                        <td>{{ $continent->continent_name }}</td>
                                        <td>{{ $continent->starting_price }}</td>
                                        <td class="w-50">{{ $continent->description }}</td>
                                        <td>
                                            <a type="button" href="{{ route('subcontinent.edit', $continent->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>

                                            </a>
                                            <form action="{{ route('subcontinent.delete', $continent->id) }}" method="post" onsubmit="return confirm('Are You Sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>

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
                                    <th>Country name</th>
                                    <th>Starting Price</th>
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
                            {{$continents->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->




@endsection


{{-- ================================ content section end======================================== --}}
