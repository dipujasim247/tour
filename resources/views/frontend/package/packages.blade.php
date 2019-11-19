{{--extends main layout--}}
@extends('frontend.front_main')
{{--extends main layout end--}}

{{-- ================================ title section start ====================================== --}}

@section('title')
    Travels|Package
@endsection

{{-- ================================ title section end ====================================== --}}

{{-- ================================ packages grid section start ====================================== --}}

@section('content')

    <div class="row">
        <div class="mt-5 p"></div>
    </div>
    <div class="row">
        <div class="mt-5 p"></div>
    </div>
    <div class="row">
        <div class="mt-5 p"></div>
    </div>
    <div class="row">
        <div class="mt-5 p"></div>
    </div>

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="intro_title text-center">We have the best tours</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="intro_text text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.
                            Suspendisse
                            potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
                    </div>
                </div>
            </div>

            <div class="row intro_items">

                @foreach($packageSelectContinent as $package)

                    <div class="col-lg-4 intro_col">
                        <div class="intro_item">
                            <div class="intro_item_overlay"></div>

                            <div class="intro_item_background" style="background-image:url(images/intro_1.jpg)"></div>
                            <div
                                class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_date">{{ $package->start_date }} - {{ $package->end_date }}</div>
                                <div class="button intro_button">
                                    <div class="button_bcg"></div>
                                    <a href="packages.html">see more<span></span><span></span><span></span></a></div>
                                <div class="intro_center text-center">
                                    <h1>{{ $package->package_name }}</h1>
                                    <div class="intro_price">From Taka {{ $package->tour_price }}</div>
                                    <div class="rating rating_4">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

{{-- ================================ packages grid section end ====================================== --}}



