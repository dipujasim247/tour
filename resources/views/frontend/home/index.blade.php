{{--extends main layout--}}
@extends('frontend.front_main')
{{--extends main layout end--}}
{{-- ================================ title section ====================================== --}}
@section('title')
    Travel | Home
@endsection
{{-- =============================== title section end =====================================--}}
{{-- =============================== content body section ================================= --}}
@section('content')

    {{-- ============================ Home section start ========================================== --}}

    <!-- Package-ITEM-->
    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2">top packages</h4>
                        <h2 class="color-dark-2">best propose</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper-container pad-15" data-autoplay="0" data-loop="0" data-speed="1000"
                     data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                     data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="{{ asset('frontend/img/home_9/tour_1.jpg') }}" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="{{ asset('frontend/img/calendar_icon_grey.png') }}" alt="">
                                            <span
                                                class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="{{ asset('frontend/img/loc_icon_small_grey.png') }}" alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>Europe Tour Package</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <h5>from <strong>BDT 149,000/- </strong> / person</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries,
                                        Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="{{ asset('frontend/img/home_9/tour_2.jpg') }}" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="{{ asset('frontend/img/calendar_icon_grey.png') }}" alt="">
                                            <span
                                                class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="{{ asset('frontend/img/loc_icon_small_grey.png') }}" alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>Thiland Tour Package</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <h5>from <strong>BDT 199,000/- </strong> / person</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries,
                                        Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="{{ asset('frontend/img/home_9/tour_3.jpg') }}" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="{{ asset('frontend/img/calendar_icon_grey.png') }}" alt="">
                                            <span
                                                class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="{{ asset('frontend/img/loc_icon_small_grey.png') }}" alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>ENGLAND Tour Package</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <h5>from <strong>BDT 257,100</strong> / person</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries,
                                        Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="{{ asset('frontend/img/home_9/tour_4.jpg') }}" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="{{ asset('frontend/img/calendar_icon_grey.png') }}" alt="">
                                            <span
                                                class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="{{ asset('frontend/img/loc_icon_small_grey.png') }}" alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>PACIFIC COAST TOURS</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <h5>from <strong>BDT 5990/-</strong> / person</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries,
                                        Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination poin-style-2"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-preview row no-margin">
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{ asset('images/BANGKOK-TOUR-PAKAGE.jpg') }}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 rewies</i>
                        <div class="tp_price">$273</div>
                    </div>
                    <h4><b>tours in monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/calendar_icon_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/loc_icon_small_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{ asset('images/BANGKOK-VIETNAMCAMBODIA-TOUR-PACKAGE.jpg') }}"
                         alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 rewies</i>
                        <div class="tp_price">$273</div>
                    </div>
                    <h4><b>tours in monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{ asset('images/Beijing-Kunming-China-Tour-Package.jpg') }}" alt="">
                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/loc_icon_small_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{ asset('images/Beijing-Kunming-China-Tour-Package.jpg') }}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 rewies</i>
                        <div class="tp_price">$273</div>
                    </div>
                    <h4><b>cruise in monaco for two</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/calendar_icon_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/loc_icon_small_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{ asset('images/Beijing-Kunming-China-Tour-Package.jpg') }}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 rewies</i>
                        <div class="tp_price">$273</div>
                    </div>
                    <h4><b>tours in monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/calendar_icon_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/loc_icon_small_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{ asset('images/Beijing-Kunming-China-Tour-Package.jpg') }}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 rewies</i>
                        <div class="tp_price">$273</div>
                    </div>
                    <h4><b>tours in monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/calendar_icon_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/loc_icon_small_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{ asset('images/Beijing-Kunming-China-Tour-Package.jpg') }}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 rewies</i>
                        <div class="tp_price">$273</div>
                    </div>
                    <h4><b>tours in monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/calendar_icon_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/loc_icon_small_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{ asset('frontend/img/home_9/preview_7.jpg') }}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 rewies</i>
                        <div class="tp_price">$273</div>
                    </div>
                    <h4><b>tours in monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/calendar_icon_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/loc_icon_small_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{ asset('frontend/img/home_9/preview_8.jpg') }}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 rewies</i>
                        <div class="tp_price">$273</div>
                    </div>
                    <h4><b>tours in monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/calendar_icon_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{ asset('frontend/img/loc_icon_small_grey.png') }}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2">top destinations</h4>
                        <h2 class="color-dark-2">top destinations around the world</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($continents as $continent)

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="world-city black-hover">
                            <div class="tour-layer delay-1"></div>
                            <img class="center-image" src="{{ asset('frontend/img/home_9/city_1.jpg') }}" alt="">
                            <div class="vertical-align">
                                <h3 class="world-title color-white">{{ $continent->continent_name }}</h3>
                                <h4 class="world-price color-white">from BDT-<b>{{ $continent->starting_price }} /=</b></h4>
                                <div class="rate">
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                </div>
                                <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>
                                <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>view more</span></a>
                            </div>
                        </div>
                    </div>

                @endforeach

{{--                <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                    <div class="world-country">--}}
{{--                        <img class="center-image" src="{{ asset('frontend/img/home_9/country_1.png') }}" alt="">--}}
{{--                        <div class="vertical-align">--}}
{{--                            <h4>destinations in italy</h4>--}}
{{--                            <ul class="color-grey-3">--}}
{{--                                <li>Cagliari (Sardinia), Italy</li>--}}
{{--                                <li>La Spezia, Italy</li>--}}
{{--                                <li>Messina (Sicily), Italy</li>--}}
{{--                                <li>Naples (Salerno), Italy</li>--}}
{{--                                <li>Rome (Civitavecchia), Italy</li>--}}
{{--                                <li>Venice, Italy</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                    <div class="world-city black-hover">--}}
{{--                        <div class="tour-layer delay-1"></div>--}}
{{--                        <img class="center-image" src="{{ asset('frontend/img/home_9/city_2.jpg') }}" alt="">--}}
{{--                        <div class="vertical-align">--}}
{{--                            <h3 class="world-title color-white">france</h3>--}}
{{--                            <h4 class="world-price color-white">from <b>$655</b></h4>--}}
{{--                            <div class="rate">--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                            </div>--}}
{{--                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>--}}
{{--                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>view more</span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                    <div class="world-country">--}}
{{--                        <img class="center-image" src="{{ asset('frontend/img/home_9/country_2.png') }}" alt="">--}}
{{--                        <div class="vertical-align">--}}
{{--                            <h4>destinations in frace</h4>--}}
{{--                            <ul class="color-grey-3">--}}
{{--                                <li>Ajaccio, Corsica</li>--}}
{{--                                <li>Cannes, France</li>--}}
{{--                                <li>Le Havre (Paris), France</li>--}}
{{--                                <li>Marseille, France</li>--}}
{{--                                <li>Nice (Villefranche)</li>--}}
{{--                                <li>Provence (Toulon), France</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                    <div class="world-city black-hover">--}}
{{--                        <div class="tour-layer delay-1"></div>--}}
{{--                        <img class="center-image" src="{{ asset('frontend/img/home_9/city_3.jpg') }}" alt="">--}}
{{--                        <div class="vertical-align">--}}
{{--                            <h3 class="world-title color-white">United Kingdom</h3>--}}
{{--                            <h4 class="world-price color-white">from <b>$700</b></h4>--}}
{{--                            <div class="rate">--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                            </div>--}}
{{--                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>--}}
{{--                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>view more</span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                    <div class="world-country">--}}
{{--                        <img class="center-image" src="{{ asset('frontend/img/home_9/country_3.png') }}" alt="">--}}
{{--                        <div class="vertical-align">--}}
{{--                            <h4>destinations in USA</h4>--}}
{{--                            <ul class="color-grey-3">--}}
{{--                                <li>Ayr (Glasgow), Scotland</li>--}}
{{--                                <li>Dover, England</li>--}}
{{--                                <li>Edinburgh, Scotland</li>--}}
{{--                                <li>Greenock (Glasgow), Scotland</li>--}}
{{--                                <li>olyhead, Wales</li>--}}
{{--                                <li> Inverness/Loch Ness, Scotland</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                    <div class="world-city black-hover">--}}
{{--                        <div class="tour-layer delay-1"></div>--}}
{{--                        <img class="center-image" src="{{ asset('frontend/img/home_9/city_4.jpg') }}" alt="">--}}
{{--                        <div class="vertical-align">--}}
{{--                            <h3 class="world-title color-white">Spain</h3>--}}
{{--                            <h4 class="world-price color-white">from <b>$550</b></h4>--}}
{{--                            <div class="rate">--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                                <span class="fa fa-star color-yellow"></span>--}}
{{--                            </div>--}}
{{--                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>--}}
{{--                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>view more</span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                    <div class="world-country">--}}
{{--                        <img class="center-image" src="{{ asset('frontend/img/home_9/country_4.png') }}" alt="">--}}
{{--                        <div class="vertical-align">--}}
{{--                            <h4>destinations in spaine</h4>--}}
{{--                            <ul class="color-grey-3">--}}
{{--                                <li>Cadiz, Spain</li>--}}
{{--                                <li>Cartagena, Spain</li>--}}
{{--                                <li>Fuerteventura, Canary</li>--}}
{{--                                <li>Ibiza, Spain</li>--}}
{{--                                <li>Lanzarote, Canary Islands</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>


    {{--    <div class="full-height">--}}
    {{--        <div class="video-wrapper">--}}
    {{--            <video loop autoplay muted poster="img/poster.html" class="bgvid" id="bgvid">--}}
    {{--                <source type="video/mp4" src="video/video.mp4">--}}
    {{--                <source type="video/ogv" src="video/video.ogv">--}}
    {{--                <source type="video/webm" src="video/video.webm">--}}
    {{--            </video>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- TOP PREVIEW-->
    {{-- ============================ Home section end ========================================== --}}

@endsection
{{-- =============================== content body section end ================================= --}}
