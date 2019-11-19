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


    <div class="home">

        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">

                <div class="owl-item home_slider_item">

                    <div class="home_slider_background"
                         style="background-image:url({{ asset('frontend/images/home_slider.jpg') }})"></div>
                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX"
                             data-animation-out="animate-out fadeOut">
                            <h1>discover</h1>
                            <h1>the world</h1>
                            <div class="button home_slider_button">
                                <div class="button_bcg"></div>
                                <a href="#">explore now<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>

                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>
                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX"
                             data-animation-out="animate-out fadeOut">
                            <h1>discover</h1>
                            <h1>the world</h1>
                            <div class="button home_slider_button">
                                <div class="button_bcg"></div>
                                <a href="#">explore now<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>

                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>
                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX"
                             data-animation-out="animate-out fadeOut">
                            <h1>discover</h1>
                            <h1>the world</h1>
                            <div class="button home_slider_button">
                                <div class="button_bcg"></div>
                                <a href="#">explore now<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home_slider_nav home_slider_prev">
                <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px"
                     viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
<defs>
    <linearGradient id='home_grad_prev'>
        <stop offset='0%' stop-color='#fa9e1b'/>
        <stop offset='100%' stop-color='#8d4fff'/>
    </linearGradient>
</defs>
                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
                    <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
					11.042,18.219 "/>
</svg>
            </div>

            <div class="home_slider_nav home_slider_next">
                <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px"
                     viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
<defs>
    <linearGradient id='home_grad_next'>
        <stop offset='0%' stop-color='#fa9e1b'/>
        <stop offset='100%' stop-color='#8d4fff'/>
    </linearGradient>
</defs>
                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
                    <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
				17.046,15.554 "/>
</svg>
            </div>

            <div class="home_slider_dots">
                <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                    <li class="home_slider_custom_dot active">
                        <div></div>
                        01.
                    </li>
                    <li class="home_slider_custom_dot">
                        <div></div>
                        02.
                    </li>
                    <li class="home_slider_custom_dot">
                        <div></div>
                        03.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- ============================ Home section end ========================================== --}}

    {{-- =====================================  search menu start ============================================--}}

    <div class="search">

        <div class="container fill_height">
            <div class="row fill_height">
                <div class="col fill_height">

                    <!-- <div class="search_tabs_container">
                    <div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                    <div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>hotels</span></div>
                    <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">car rentals</div>
                    <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
                    <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">trips</div>
                    <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">cruises</div>
                    <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">activities</div>
                    </div>
                    </div> -->

                    <div class="search_panel active">
                        <form action="#" id="search_form_1"
                              class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <!-- <div class="search_item">
                            <div>destination</div>
                            <input type="select" class="destination search_input" required="required">
                            </div> -->
                            <!-- <div class="search_item">
                            <div>Trip Type</div>
                            <input type="select" class="check_in search_input">



                            </div> -->
                            <span style="color:#fff; font-weight: bold;">Destination</span>
                            <select name="trip_type" class="check_in search_input" style="width:200px">
                                <option value="0" style="margin-left: -50px">Select Trip Type</option>
                                <option value="1">Dhaka</option>
                                <option value="2">Khulna</option>
                                <option value="3">Rajshah</option>

                            </select>


                            <span style="color:#fff; font-weight: bold;">Trip Type:</span>
                            <select name="trip_type" class="check_in search_input" style="width:160px">
                                <option value="0">Select Trip Type</option>
                                <option value="1">Dhaka</option>
                                <option value="2">Khulna</option>
                                <option value="3">Rajshah</option>

                            </select>


                            <span style="color:#fff; font-weight: bold;">Max Budget</span>
                            <input type="number" class="check_in search_input" style="width:160px">


                            <!-- <div class="search_item">
                            <div>Max Budget</div>
                            <input type="select" class="check_out search_input">
                            </div>

                             -->
                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <div class="search_panel">
                        <form action="#" id="search_form_2"
                              class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div class="search_item">
                                <div>destination</div>
                                <input type="select" class="destination search_input" required="required">
                            </div>


                            <div class="search_item">
                                <div>Maxi Budget</div>
                                <input type="select" class="destination search_input" required="required">
                            </div>


                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <div class="search_panel">
                        <form action="#" id="search_form_3"
                              class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div class="search_item">
                                <div>destination</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>
                            <div class="search_item">
                                <div>check in</div>
                                <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>check out</div>
                                <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>adults</div>
                                <select name="adults" id="adults_3" class="dropdown_item_select search_input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>children</div>
                                <select name="children" id="children_3" class="dropdown_item_select search_input">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <div class="search_panel">
                        <form action="#" id="search_form_4"
                              class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div class="search_item">
                                <div>destination</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>
                            <div class="search_item">
                                <div>check in</div>
                                <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>check out</div>
                                <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>adults</div>
                                <select name="adults" id="adults_4" class="dropdown_item_select search_input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>children</div>
                                <select name="children" id="children_4" class="dropdown_item_select search_input">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <div class="search_panel">
                        <form action="#" id="search_form_5"
                              class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div class="search_item">
                                <div>destination</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>
                            <div class="search_item">
                                <div>check in</div>
                                <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>check out</div>
                                <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>adults</div>
                                <select name="adults" id="adults_5" class="dropdown_item_select search_input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>children</div>
                                <select name="children" id="children_5" class="dropdown_item_select search_input">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <div class="search_panel">
                        <form action="#" id="search_form_6"
                              class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div class="search_item">
                                <div>destination</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>
                            <div class="search_item">
                                <div>check in</div>
                                <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>check out</div>
                                <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>adults</div>
                                <select name="adults" id="adults_6" class="dropdown_item_select search_input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>children</div>
                                <select name="children" id="children_6" class="dropdown_item_select search_input">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- =====================================  search menu end ============================================--}}

    {{-- ============================ Continent grid section start ========================================== --}}


    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="intro_title text-center">We have the best tours in almost every country</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="intro_text text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.
                            Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
                    </div>
                </div>
            </div>
            {{-- ==================================== grid first row ========================================= --}}
            <div class="row intro_items">

                @foreach($continents as $continent)
                    <div class="col-lg-4 intro_col mb-5">
                        <div class="intro_item">
                            <div class="intro_item_overlay"></div>

                            <div class="intro_item_background"><img src="<?php echo asset("$continent->photo") ?>" alt=""></div>
                            <div
                                class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_date">May 25th - June 01st</div>
                                <div class="button intro_button">
                                    <div class="button_bcg"></div>
                                    <a href="{{ $continent->id }}">see more<span></span><span></span><span></span></a>
                                </div>
                                <div class="intro_center text-center">
                                    <h1>{{ $continent->continent_name }}</h1>
                                    <div class="intro_price">From {{ $continent->starting_price }}</div>
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
                {{--                <div class="col-lg-4 intro_col">--}}
                {{--                    <div class="intro_item">--}}
                {{--                        <div class="intro_item_overlay"></div>--}}

                {{--                        <div class="intro_item_background" style="background-image:url(images/intro_2.jpg)"></div>--}}
                {{--                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">--}}
                {{--                            <div class="intro_date">May 25th - June 01st</div>--}}
                {{--                            <div class="button intro_button">--}}
                {{--                                <div class="button_bcg"></div>--}}
                {{--                                <a href="#">see more<span></span><span></span><span></span></a></div>--}}
                {{--                            <div class="intro_center text-center">--}}
                {{--                                <h1>Greece</h1>--}}
                {{--                                <div class="intro_price">From $1450</div>--}}
                {{--                                <div class="rating rating_4">--}}
                {{--                                    <i class="fa fa-star"></i>--}}
                {{--                                    <i class="fa fa-star"></i>--}}
                {{--                                    <i class="fa fa-star"></i>--}}
                {{--                                    <i class="fa fa-star"></i>--}}
                {{--                                    <i class="fa fa-star"></i>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="col-lg-4 intro_col">--}}
                {{--                    <div class="intro_item">--}}
                {{--                        <div class="intro_item_overlay"></div>--}}

                {{--                        <div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>--}}
                {{--                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">--}}
                {{--                            <div class="intro_date">May 25th - June 01st</div>--}}
                {{--                            <div class="button intro_button">--}}
                {{--                                <div class="button_bcg"></div>--}}
                {{--                                <a href="#">see more<span></span><span></span><span></span></a></div>--}}
                {{--                            <div class="intro_center text-center">--}}
                {{--                                <h1>Scotland</h1>--}}
                {{--                                <div class="intro_price">From $1450</div>--}}
                {{--                                <div class="rating rating_4">--}}
                {{--                                    <i class="fa fa-star"></i>--}}
                {{--                                    <i class="fa fa-star"></i>--}}
                {{--                                    <i class="fa fa-star"></i>--}}
                {{--                                    <i class="fa fa-star"></i>--}}
                {{--                                    <i class="fa fa-star"></i>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{-- ==================================== grid second row ========================================= --}}
                {{--                <div class="row intro_items">--}}

                {{--                    <div class="col-lg-4 intro_col">--}}
                {{--                        <div class="intro_item">--}}
                {{--                            <div class="intro_item_overlay"></div>--}}

                {{--                            <div class="intro_item_background" style="background-image:url(images/intro_1.jpg)"></div>--}}
                {{--                            <div--}}
                {{--                                class="intro_item_content d-flex flex-column align-items-center justify-content-center">--}}
                {{--                                <div class="intro_date">May 25th - June 01st</div>--}}
                {{--                                <div class="button intro_button">--}}
                {{--                                    <div class="button_bcg"></div>--}}
                {{--                                    <a href="#">see more<span></span><span></span><span></span></a></div>--}}
                {{--                                <div class="intro_center text-center">--}}
                {{--                                    <h1>Mauritius</h1>--}}
                {{--                                    <div class="intro_price">From $1450</div>--}}
                {{--                                    <div class="rating rating_4">--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                    <div class="col-lg-4 intro_col">--}}
                {{--                        <div class="intro_item">--}}
                {{--                            <div class="intro_item_overlay"></div>--}}

                {{--                            <div class="intro_item_background" style="background-image:url(images/intro_2.jpg)"></div>--}}
                {{--                            <div--}}
                {{--                                class="intro_item_content d-flex flex-column align-items-center justify-content-center">--}}
                {{--                                <div class="intro_date">May 25th - June 01st</div>--}}
                {{--                                <div class="button intro_button">--}}
                {{--                                    <div class="button_bcg"></div>--}}
                {{--                                    <a href="#">see more<span></span><span></span><span></span></a></div>--}}
                {{--                                <div class="intro_center text-center">--}}
                {{--                                    <h1>Greece</h1>--}}
                {{--                                    <div class="intro_price">From $1450</div>--}}
                {{--                                    <div class="rating rating_4">--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                    <div class="col-lg-4 intro_col">--}}
                {{--                        <div class="intro_item">--}}
                {{--                            <div class="intro_item_overlay"></div>--}}

                {{--                            <div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>--}}
                {{--                            <div--}}
                {{--                                class="intro_item_content d-flex flex-column align-items-center justify-content-center">--}}
                {{--                                <div class="intro_date">May 25th - June 01st</div>--}}
                {{--                                <div class="button intro_button">--}}
                {{--                                    <div class="button_bcg"></div>--}}
                {{--                                    <a href="#">see more<span></span><span></span><span></span></a></div>--}}
                {{--                                <div class="intro_center text-center">--}}
                {{--                                    <h1>Scotland</h1>--}}
                {{--                                    <div class="intro_price">From $1450</div>--}}
                {{--                                    <div class="rating rating_4">--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                        <i class="fa fa-star"></i>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>


    {{-- ============================ Continent grid section end ========================================== --}}

@endsection
{{-- =============================== content body section end ================================= --}}
