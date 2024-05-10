@extends('layouts.public')
@section('content')
    <!-- BANNER SECTION -->
    <section class="boxcar-banner-section-v1" style="background-image: url(../images/banner/lucy-yachts-cars.png) !important;">
        <div class="container">
            <div class="banner-content">
                <span class="wow fadeInUp">Find cars for sale and for rent near you</span>
                <h2 class="wow fadeInUp" data-wow-delay="100ms">Find Your Perfect Yacht</h2>
                <div class="form-tabs">
                    <ul class="form-tabs-list wow fadeInUp" data-wow-delay="200ms">
                    </ul>
                    <div class="form-tab-content">
                        <div class="form-tab-content wow fadeInUp" data-wow-delay="300ms">
                            <div class="form-tab-pane current" id="tab-1">
                                <form>
                                    <div class="form_boxes line-r">
                                        <div class="drop-menu">
                                            <div class="select h-100">
                                                <input id="date-input" placeholder="Date" type="date">
                                                {{-- <span>Date</span> --}}
                                                {{-- <i class="fa fa-angle-down" id="date-drop"></i> --}}
                                            </div>
                                            <input type="hidden" name="gender">
                                            {{-- <ul class="dropdown" style="display: none;">
                                            </ul> --}}
                                        </div>
                                    </div>
                                    <div class="form_boxes line-r">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Models</span>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>Sunseeker Predator 74</li>
                                                <li>Azimut S6</li>
                                                <li>Ferretti Yachts 780</li>
                                                <li>Princess Yachts V78</li>
                                                <li>Benetti Oasis 40M</li>
                                                <li>Lürssen Azzam</li>
                                                <li>Heesen Yachts Amore Mio</li>
                                                <li>Sanlorenzo SX88</li>
                                                <li>Oceanco Jubilee</li>
                                                <li>Feadship Savannah</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form_boxes">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Price/ Per Hour</span>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>Per Hour | 200$</li>
                                                <li>Per Hour | 300$</li>
                                                <li>Per Hour | 400$</li>
                                                <li>Per Hour | 500$</li>
                                                <li>Per Hour | 600$</li>
                                                <li>Per Hour | 700$</li>
                                                <li>Per Hour | 800$</li>
                                                <li>Per Hour | 900$</li>
                                                <li>Per Hour | 1000$</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-submit">
                                        <button type="submit" class="theme-btn" style="border-radius: 30px;"><i class="flaticon-search"></i>Search
                                            Yacht</button>
                                    </div>
                                </form>
                            </div>
                            <div class="form-tab-pane" id="tab-2">
                                <form>
                                    <div class="form_boxes line-r">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <li><input type="date"></li>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form_boxes line-r">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Models</span>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>Sunseeker Predator 74</li>
                                                <li>Azimut S6</li>
                                                <li>Ferretti Yachts 780</li>
                                                <li>Princess Yachts V78</li>
                                                <li>Benetti Oasis 40M</li>
                                                <li>Lürssen Azzam</li>
                                                <li>Heesen Yachts Amore Mio</li>
                                                <li>Sanlorenzo SX88</li>
                                                <li>Oceanco Jubilee</li>
                                                <li>Feadship Savannah</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form_boxes">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Price/per hours</span>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>per hours | 200$</li>
                                                <li>per hours | 300$</li>
                                                <li>per hours | 400$</li>
                                                <li>per hours | 500$</li>
                                                <li>per hours | 600$</li>
                                                <li>per hours | 700$</li>
                                                <li>per hours | 800$</li>
                                                <li>per hours | 900$</li>
                                                <li>per hours | 1000$</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-submit">
                                        <button type="submit" class="theme-btn"><i class="flaticon-search"></i>Search
                                            Yacht</button>
                                    </div>
                                </form>
                            </div>
                            <div class="form-tab-pane" id="tab-3">
                                <form>
                                    <div class="form_boxes line-r">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <li><input type="date"></li>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form_boxes line-r">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Models</span>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>Sunseeker Predator 74</li>
                                                <li>Azimut S6</li>
                                                <li>Ferretti Yachts 780</li>
                                                <li>Princess Yachts V78</li>
                                                <li>Benetti Oasis 40M</li>
                                                <li>Lürssen Azzam</li>
                                                <li>Heesen Yachts Amore Mio</li>
                                                <li>Sanlorenzo SX88</li>
                                                <li>Oceanco Jubilee</li>
                                                <li>Feadship Savannah</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form_boxes">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Price/per hours</span>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>per hours | 200$</li>
                                                <li>per hours | 300$</li>
                                                <li>per hours | 400$</li>
                                                <li>per hours | 500$</li>
                                                <li>per hours | 600$</li>
                                                <li>per hours | 700$</li>
                                                <li>per hours | 800$</li>
                                                <li>per hours | 900$</li>
                                                <li>per hours | 1000$</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-submit">
                                        <button type="submit" class="theme-btn"><i class="flaticon-search"></i>Search
                                            Yacht</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <span class="wow fadeInUp" data-wow-delay="400ms" style="position: relative; z-index: -1;">Or Browse Featured Model</span>
                        <ul class="model-links">
                            <li>
                                <a href="#" title="">
                                    <img src="images/icons/jet-ski.png" width="40px" class="m-3" alt="">
                                    Jet Ski
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <img src="images/icons/yacht.png" width="40px" class="m-3" alt="">
                                    Luxury Yachts
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <img src="images/icons/yacht.png" width="40px" class="m-3" alt="">

                                    Fishing Boat
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <img src="images/icons/yacht.png" width="40px" class="m-3" alt="">

                                    Pontoons
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION END -->

    <!-- brand section -->
    <section class="boxcar-brand-section section-radius-top bg-1">
        <div class="boxcar-container">
            <div class="boxcar-title">
                <h2 class="wow fadeInUp">Explore Our Premium Brands</h2>
                <a href="{{route('yachts-list')}}" class="btn-title">Show All Brands<svg xmlns="http://www.w3.org/2000/svg"
                        width="14" height="14" viewbox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_601_3199)">
                            <path
                                d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                fill="#050B20"></path>
                        </g>
                        <defs>
                            <clippath id="clip0_601_3199">
                                <rect width="14" height="14" fill="white"></rect>
                            </clippath>
                        </defs>
                    </svg></a>
            </div>
            <div class="row">
                <!-- cars-block -->
                <div class="cars-block style-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/brands/Sealine.png"
                                        alt=""></a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="#">Sealine</a></h6>
                        </div>
                    </div>
                </div>
                <!-- cars-block -->
                <div class="cars-block style-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp" data-wow-delay="100ms">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/brands/fountaine pajot.png"
                                        alt=""></a></figure>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="#">Fountaine Pajot</a></h6>
                        </div>
                    </div>
                </div>
                <!-- cars-block -->
                <div class="cars-block style-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/brands/Thwlutssen.png"
                                        alt=""></a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="#">Thwlutssen</a></h6>
                        </div>


                    </div>
                </div>
                <!-- cars-block -->
                <div class="cars-block style-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/brands/oceanoco.png"
                                        alt=""></a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href=".html">Oceanco</a></h6>
                        </div>
                    </div>
                </div>
                <!-- cars-block -->
                <div class="cars-block style-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp" data-wow-delay="400ms">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/brands/beneteau.png"
                                        alt=""></a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="#">Beneteau</a></h6>
                        </div>
                    </div>
                </div>
                <!-- cars-block -->
                <div class="cars-block style-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp" data-wow-delay="500ms">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/brands/3.png" alt=""></a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="#">Ferretti Group</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End brand section -->

    <!-- cars-section-three -->
    <section class="cars-section-three">
        <div class="boxcar-container">
            <div class="boxcar-title wow fadeInUp">
                <h2>Explore All Yachts</h2>
                <a href="#" class="btn-title">View All<svg xmlns="http://www.w3.org/2000/svg" width="14"
                        height="14" viewbox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_601_243)">
                            <path
                                d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                fill="#050B20"></path>
                        </g>
                        <defs>
                            <clippath id="clip0_601_243">
                                <rect width="14" height="14" fill="white"></rect>
                            </clippath>
                        </defs>
                    </svg>
                </a>
            </div>
            <nav class="wow fadeInUp" data-wow-delay="100ms">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">New Yachts</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Used
                        Yachts</button>
                </div>
            </nav>
        </div>

        <div class="tab-content wow fadeInUp" data-wow-delay="200ms" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row car-slider-three slider-layout-1" data-preview="4.8">
                    <!-- car-block-three -->

                    <div class="box-car car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="slider-thumb">
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/50ft Al Shali.jpeg" alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/50ft Al Shali -2.jpeg" alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/50ft Al Shali -3.jpeg" alt=""></a></div>
                                </div>
                                <a href="#" title="" class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewbox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_601_1274)">
                                            <path
                                                d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1274">
                                                <rect width="12" height="12" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="content-box">
                                <h6 class="title"><a href="al-shani-details.html">50ft Al Shali - 50ft/15m - <br`>
                                            Yacht</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>15 Guests</li>
                                    <li><i class="flaticon-speedometer"></i>50 Feet</li>
                                </ul>
                                <div class="btn-box">
                                    <span> Per Hours ($789)</span>
                                    <small>$789</small>
                                    <a href="{{route('yachts-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-car car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="slider-thumb">
                                    <div class="image"><a href="#"><img src="images/Yachts images/SKYRA.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img src="images/Yachts images/SKYRA-1.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img src="images/Yachts images/SKYRA-2.png"
                                                alt=""></a></div>

                                </div>
                                <a href="#" title="" class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewbox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_601_1274)">
                                            <path
                                                d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1274">
                                                <rect width="12" height="12" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="content-box">
                                <h6 class="title"><a href="{{route('yachts-details', 123)}}">SKYRA - 76ft/23M - <br> Yacht</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>5 Guests</li>
                                    <li><i class="flaticon-speedometer"></i>76ft/23m</li>
                                </ul>
                                <div class="btn-box">
                                    <span>Per Hours ($789)</span>
                                    <small>$399</small>
                                    <a href="{{route('yachts-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-car car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="slider-thumb">
                                    <div class="image"><a href="#"><img src="images/Yachts images/Gold Yacht.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/Gold Yacht 1.png" alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/Gold Yacht 2.png" alt=""></a></div>

                                </div>
                                <a href="#" title="" class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewbox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_601_1274)">
                                            <path
                                                d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1274">
                                                <rect width="12" height="12" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="content-box">
                                <h6 class="title"><a href="gold-yacht-details.html">Gold Yacht - 90ft/27m <br>
                                        Yacht</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>190 Guests</li>
                                    <li><i class="flaticon-speedometer"></i>90ft/27m</li>
                                </ul>
                                <div class="btn-box">
                                    <span>Per Hours ($789)</span>
                                    <small>$399</small>
                                    <a href="{{route('yachts-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-car car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="slider-thumb">
                                    <div class="image"><a href="#"><img src="images/Yachts images/MAZAYEL.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img src="images/Yachts images/MAZAYEL  1.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img src="images/Yachts images/MAZAYEL 2.png"
                                                alt=""></a></div>

                                </div>
                                <a href="#" title="" class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewbox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_601_1274)">
                                            <path
                                                d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1274">
                                                <rect width="12" height="12" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="content-box">
                                <h6 class="title"><a href="inventory-page-single-v2.html">135ft MAZAYEL - 135ft/41m
                                        - Yacht</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>190 Guests</li>
                                    <li><i class="flaticon-speedometer"></i>90ft/27m</li>
                                </ul>
                                <div class="btn-box">
                                    <span>Per Hours ($789)</span>
                                    <small>$399</small>
                                    <a href="{{route('yachts-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-car car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="slider-thumb">
                                    <div class="image"><a href="#"><img src="images/Yachts images/Sunseeker.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/Sunseeker (1).png" alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/Sunseeker (2).png" alt=""></a></div>

                                </div>
                                <a href="#" title="" class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewbox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_601_1274)">
                                            <path
                                                d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1274">
                                                <rect width="12" height="12" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="content-box">
                                <h6 class="title"><a href="inventory-page-single-v2.html">Sunseeker 90ft - 90ft/27m
                                        (2018) - Yacht</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>40 Guests</li>
                                    <li><i class="flaticon-speedometer"></i>90ft/27m</li>
                                </ul>
                                <div class="btn-box">
                                    <span>Per Hours ($789)</span>
                                    <small>$399</small>
                                    <a href="{{route('yachts-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-car car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="slider-thumb">
                                    <div class="image"><a href="#"><img src="images/Yachts images/jet ski.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg"
                                                alt=""></a></div>
                                </div>
                                <a href="#" title="" class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewbox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_601_1274)">
                                            <path
                                                d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1274">
                                                <rect width="12" height="12" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="content-box">
                                <h6 class="title"><a href="jetski.html">Yacht charter in Kaštela ·
                                        Seadoo — Gtx Pro 130 Ibr</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>2 people</li>
                                    <li><i class="flaticon-speedometer"></i>3.5 meters</li>
                                </ul>
                                <div class="btn-box">
                                    <span>Per Hours ($789)</span>
                                    <small>$399</small>
                                    <a href="{{route('yachts-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row car-slider-three slider-layout-1" data-preview="4.8">
                    <!-- car-block-three -->
                    <div class="box-car car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="slider-thumb">
                                    <div class="image"><a href="#"><img src="images/Yachts images/jet ski.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg"
                                                alt=""></a></div>
                                </div>
                                <a href="#" title="" class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewbox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_601_1274)">
                                            <path
                                                d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1274">
                                                <rect width="12" height="12" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="content-box">
                                <h6 class="title"><a href="inventory-page-single-v2.html">Yacht charter in Kaštela ·
                                        Seadoo — Gtx Pro 130 Ibr</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>2 people</li>
                                    <li><i class="flaticon-speedometer"></i>3.5 meters</li>
                                </ul>
                                <div class="btn-box">
                                    <span>Per Hours ($789)</span>
                                    <small>$399</small>
                                    <a href="{{route('yachts-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-car car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="slider-thumb">
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/50ft Al Shali.jpeg" alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/50ft Al Shali -2.jpeg" alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/50ft Al Shali -3.jpeg" alt=""></a></div>
                                </div>
                                <a href="#" title="" class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewbox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_601_1274)">
                                            <path
                                                d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1274">
                                                <rect width="12" height="12" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="content-box">
                                <h6 class="title"><a href="inventory-page-single-v2.html">50ft Al Shali - 50ft/15m -
                                        Yacht</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>15 Guests</li>
                                    <li><i class="flaticon-speedometer"></i>50 Feet</li>
                                </ul>
                                <div class="btn-box">
                                    <span> Per Hours ($789)</span>
                                    <small>$789</small>
                                    <a href="{{route('yachts-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-car car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="slider-thumb">
                                    <div class="image"><a href="#"><img src="images/Yachts images/SKYRA.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img src="images/Yachts images/SKYRA-1.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img src="images/Yachts images/SKYRA-2.png"
                                                alt=""></a></div>

                                </div>
                                <a href="#" title="" class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewbox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_601_1274)">
                                            <path
                                                d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1274">
                                                <rect width="12" height="12" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="content-box">
                                <h6 class="title"><a href="inventory-page-single-v2.html">SKYRA - 76ft/23M - <br>
                                        Yacht</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>5 Guests</li>
                                    <li><i class="flaticon-speedometer"></i>76ft/23m</li>
                                </ul>
                                <div class="btn-box">
                                    <span>Per Hours ($789)</span>
                                    <small>$399</small>
                                    <a href="{{route('yachts-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-car car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="slider-thumb">
                                    <div class="image"><a href="#"><img src="images/Yachts images/Gold Yacht.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/Gold Yacht 1.png" alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/Gold Yacht 2.png" alt=""></a></div>

                                </div>
                                <a href="#" title="" class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewbox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_601_1274)">
                                            <path
                                                d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1274">
                                                <rect width="12" height="12" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="content-box">
                                <h6 class="title"><a href="inventory-page-single-v2.html">Gold Yacht - 90ft/27m <br>
                                        Yacht</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>190 Guests</li>
                                    <li><i class="flaticon-speedometer"></i>90ft/27m</li>
                                </ul>
                                <div class="btn-box">
                                    <span>Per Hours ($789)</span>
                                    <small>$399</small>
                                    <a href="{{route('yachts-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-car car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="slider-thumb">
                                    <div class="image"><a href="#"><img src="images/Yachts images/MAZAYEL.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img src="images/Yachts images/MAZAYEL  1.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img src="images/Yachts images/MAZAYEL 2.png"
                                                alt=""></a></div>

                                </div>
                                <a href="#" title="" class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewbox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_601_1274)">
                                            <path
                                                d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1274">
                                                <rect width="12" height="12" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="content-box">
                                <h6 class="title"><a href="inventory-page-single-v2.html">135ft MAZAYEL - 135ft/41m
                                        - Yacht</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>190 Guests</li>
                                    <li><i class="flaticon-speedometer"></i>90ft/27m</li>
                                </ul>
                                <div class="btn-box">
                                    <span>Per Hours ($789)</span>
                                    <small>$399</small>
                                    <a href="{{route('yachts-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-car car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="slider-thumb">
                                    <div class="image"><a href="#"><img src="images/Yachts images/Sunseeker.png"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/Sunseeker (1).png" alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="images/Yachts images/Sunseeker (2).png" alt=""></a></div>

                                </div>
                                <a href="#" title="" class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewbox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_601_1274)">
                                            <path
                                                d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1274">
                                                <rect width="12" height="12" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="content-box">
                                <h6 class="title"><a href="inventory-page-single-v2.html">Sunseeker 90ft - 90ft/27m
                                        (2018) - Yacht</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>40 Guests</li>
                                    <li><i class="flaticon-speedometer"></i>90ft/27m</li>
                                </ul>
                                <div class="btn-box">
                                    <span>Per Hours ($789)</span>
                                    <small>$399</small>
                                    <a href="{{route('yachts-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End shop section two -->

    <!-- pricing section -->
    <section class="boxcar-pricing-section pb-0 pt-0">
        <div class="large-container">
            <div class="row g-0">
                <!-- image-column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/banner/lucy-yachts-cars.png"
                                        alt=""></a>
                            </figure>
                            <a href="https://www.youtube.com/watch?v=AC1cREPIw_o&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0"
                                class="play-now" data-fancybox="gallery" data-caption=""><i class="fa fa-play"
                                    aria-hidden="true"></i><span class="ripple"></span></a>
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="boxcar-title wow fadeInUp">
                            <h2>Get A Fair Price For Your Yacht Rental To Us Today</h2>
                            <div class="text">We are committed to providing our customers with exceptional service,
                                competitive pricing, and a wide range of.</div>
                        </div>
                        <ul class="list-style-one wow fadeInUp" data-wow-delay="100ms">
                            <li><i class="fa-solid fa-check"></i>We are the Miami's largest provider, with more
                                patrols
                                in more places</li>
                            <li><i class="fa-solid fa-check"></i>You get 24/7 roadside assistance</li>
                            <li><i class="fa-solid fa-check"></i>We fix 4 out of 5 cars at the roadside</li>
                        </ul>
                        <a href="about.html" class="read-more wow fadeInUp" data-wow-delay="200ms">get started<svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14"
                                fill="none">
                                <g clip-path="url(#clip0_634_2156)">
                                    <path
                                        d="M13.6106 0H5.05509C4.84013 0 4.66619 0.173943 4.66619 0.388901C4.66619 0.603859 4.84013 0.777802 5.05509 0.777802H12.6719L0.113453 13.3362C-0.0384687 13.4881 -0.0384687 13.7342 0.113453 13.8861C0.189396 13.962 0.288927 14 0.388422 14C0.487917 14 0.587411 13.962 0.663391 13.8861L13.2218 1.3277V8.94447C13.2218 9.15943 13.3957 9.33337 13.6107 9.33337C13.8256 9.33337 13.9996 9.15943 13.9996 8.94447V0.388901C13.9995 0.173943 13.8256 0 13.6106 0Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clippath id="clip0_634_2156">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clippath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End pricing section -->

    <br>
    <div class="boxcar-team-section-two pt-0">
        <div class="boxcar-container">
            <div class="boxcar-title wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <h2 data-sider-select-id="0882ebfe-3599-4e89-9840-ab5431eb8cf3">Our Team</h2>
            </div>
            <div class="row">
                <!-- team-block -->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/team2-1.jpg"
                                        alt=""></a>
                            </figure>
                            <div class="contact-info">
                                <span><a href="#">enyle@lucyyatchtsandcars.com</a></span>
                                <small><a href="#">+30 595 59 291 2</a></small>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="team-single.html">Enyle</a></h4>
                            <span>CEO</span>
                        </div>
                    </div>
                </div>
                <!-- team-block -->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="100ms"
                        style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/team2-2.jpg"
                                        alt=""></a>
                            </figure>
                            <div class="contact-info">
                                <span><a href="#">Joe@lucyyatchtsandcars</a></span>
                                <small><a href="#">+30 595 59 291 2</a></small>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="team-single.html">Joe Gonzallez</a></h4>
                            <span>Software Tester</span>
                        </div>
                    </div>
                </div>
                <!-- team-block -->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="200ms"
                        style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/team2-3.jpg"
                                        alt=""></a>
                            </figure>
                            <div class="contact-info">
                                <span><a href="#">ryandiaz@lucyyatchtsandcars</a></span>
                                <small><a href="#">+30 595 59 291 2</a></small>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="team-single.html">Ryan Diaz</a></h4>
                            <span>Software Developer</span>
                        </div>
                    </div>
                </div>
                <!-- team-block -->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="300ms"
                        style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/team2-4.jpg"
                                        alt=""></a>
                            </figure>
                            <div class="contact-info">
                                <span><a href="#">jenny@lucyyatchtsandcars</a></span>
                                <small><a href="#">+30 595 59 291 2</a></small>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="team-single.html">Jenny</a></h4>
                            <span>CSR</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Fact Section-->
    <section class="boxcar-testimonial-section-three">
        <div class="large-container">
            <div class="right-box">
                <div class="row">
                    <!-- content-column -->
                    <div class="content-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="boxcar-title light">
                                <h2>Who is Miami Luxury Yachts and Cars</h2>
                                <div class="text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id es</div>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial-block -->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="row">
                            <!-- testimonial-block-three -->
                            <div class="testimonial-block-three col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <span>Great</span>
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <small>Based on 5,801 reviews</small>
                                        <figure class="image"><a href="#"><img src="images/resource/testi3-1.png"
                                                    alt=""></a></figure>
                                    </div>
                                </div>
                            </div>
                            <!-- testimonial-block-three -->
                            <div class="testimonial-block-three col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box v2">
                                    <div class="content-box">
                                        <span>Great</span>
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <small>Based on 5,801 reviews</small>
                                        <figure class="image"><a href="#"><img src="images/resource/testi3-2.png"
                                                    alt=""></a></figure>
                                    </div>
                                </div>
                            </div>
                            <!-- testimonial-block-three -->
                            <div class="testimonial-block-three col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box v3">
                                    <div class="content-box">
                                        <span>Great</span>
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <small>Based on 5,801 reviews</small>
                                        <figure class="image"><a href="#"><img src="images/resource/testi3-3.png"
                                                    alt=""></a></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>

    <section class="brand-boxcar-banner-section">
        <div class="boxcar-container">
            <div class="row">
                <div class="content-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInUp animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <h2 class="title">We make finding the right yacht simple</h2>
                        <a href="#" class="btn">Find Out More<svg xmlns="http://www.w3.org/2000/svg"
                                width="15" height="14" viewBox="0 0 15 14" fill="none">
                                <g clip-path="url(#clip0_634_2178)">
                                    <path
                                        d="M14.1109 0H5.55533C5.34037 0 5.16643 0.173943 5.16643 0.388901C5.16643 0.603859 5.34037 0.777802 5.55533 0.777802H13.1721L0.613697 13.3362C0.461775 13.4881 0.461775 13.7342 0.613697 13.8861C0.68964 13.962 0.789171 14 0.888666 14C0.988161 14 1.08766 13.962 1.16363 13.8861L13.722 1.3277V8.94447C13.722 9.15943 13.8959 9.33337 14.1109 9.33337C14.3259 9.33337 14.4998 9.15943 14.4998 8.94447V0.388901C14.4998 0.173943 14.3258 0 14.1109 0Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_634_2178">
                                        <rect width="14" height="14" fill="white"
                                            transform="translate(0.5)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- blog section -->
    <section class="blog-section">
        <div class="boxcar-container">
            <div class="boxcar-title wow fadeInUp">
                <h2>Latest Blog Posts</h2>
            </div>
            <div class="row">
                <!-- blog-block -->
                <div class="blog-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single.html"><img src="images/resource/blog-1.jpg"
                                        alt=""></a></figure>
                            <span class="date">news</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li>Ali Tufan</li>
                                <li>April 20, 2023</li>
                            </ul>
                            <h6 class="title"><a href="blog-single.html" title="">This Long-Awaited Technology
                                    May
                                    Finally Change the World</a></h6>
                        </div>
                    </div>
                </div>
                <!-- blog-block -->
                <div class="blog-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="100ms">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single.html"><img src="images/resource/blog-2.jpg"
                                        alt=""></a></figure>
                            <span class="date">news</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li>Ali Tufan</li>
                                <li>April 20, 2023</li>
                            </ul>
                            <h6 class="title"><a href="blog-single.html" title="">This Long-Awaited Technology
                                    May
                                    Finally Change the World</a></h6>
                        </div>
                    </div>
                </div>
                <!-- blog-block -->
                <div class="blog-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single.html"><img src="images/resource/blog-3.jpg"
                                        alt=""></a></figure>
                            <span class="date">news</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li>Ali Tufan</li>
                                <li>April 20, 2023</li>
                            </ul>
                            <h6 class="title"><a href="blog-single.html" title="">This Long-Awaited Technology
                                    May
                                    Finally Change the World</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog-section -->
@endsection
