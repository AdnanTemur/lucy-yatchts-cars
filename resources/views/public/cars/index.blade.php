@extends('layouts.public')
@section('content')
    <!-- BANNER SECTION -->
    <section class="boxcar-banner-section-v1">
        <div class="container">
            <div class="banner-content">
                <span class="wow fadeInUp">Find cars for sale and for rent near you</span>
                <h2 class="wow fadeInUp" data-wow-delay="100ms">Find Your Perfect Car</h2>
                <div class="form-tabs">
                    <ul class="form-tabs-list wow fadeInUp" data-wow-delay="200ms" style="display: none;">
                        <li class="current" data-tab="tab-1">All</li>
                        <li data-tab="tab-2">New</li>
                        <li data-tab="tab-3">Used</li>
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
                                    <div class="form-submit" id="icon-submit">
                                        <button type="submit" id="icon-button" class="theme-btn"><i class="flaticon-search" style="margin: 0; width: fit-content"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="form-tab-pane" id="tab-2">
                                <form>
                                    <div class="form_boxes line-r">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Any Makes</span>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>Audi</li>
                                                <li>Honda</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form_boxes line-r">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Any Models</span>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>A3</li>
                                                <li>Accord</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form_boxes">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Any Price</span>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>200$</li>
                                                <li>300$</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-submit">
                                        <button type="submit" class="theme-btn">Search Cars</button>
                                    </div>
                                </form>
                            </div>
                            <div class="form-tab-pane" id="tab-3">
                                <form>
                                    <div class="form_boxes line-r">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Any Makes</span>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>Audi</li>
                                                <li>Honda</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form_boxes line-r">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Any Models</span>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>A3</li>
                                                <li>Accord</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form_boxes">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Any Price</span>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>200$</li>
                                                <li>300$</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-submit">
                                        <button type="submit" class="theme-btn">Search Cars</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <span class="wow fadeInUp" data-wow-delay="400ms" style="display: none;">Or Browse Featured
                            Model</span>
                        <ul class="model-links" style="display: none;">
                            <li>
                                <a href="#" title="">
                                    <i class="flaticon-car"></i>
                                    SUV
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="flaticon-car-1"></i>
                                    Sedan
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="flaticon-van"></i>
                                    Hatchback
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="flaticon-convertible-car"></i>
                                    Coupe
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="flaticon-electric-car-1"></i>
                                    Hybrid
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION END -->

    <!-- boxcar-brand-section-three -->
    <section class="boxcar-brand-section-four">
        <div class="boxcar-container">
            <div class="boxcar-title text-center">
                <h2>Browse by Type</h2>
            </div>
            <div class="right-box">
                <!-- brand-block-four -->
                <div class="brand-block-four">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-car"></i>
                        </div>
                        <h6 class="title"><a href="#">SUV</a></h6>
                    </div>
                </div>
                <!-- brand-block-four -->
                <div class="brand-block-four">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-car-1"></i>
                        </div>
                        <h6 class="title"><a href="#">Sedan</a></h6>
                    </div>
                </div>
                <!-- brand-block-four -->
                <div class="brand-block-four">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-van"></i>
                        </div>
                        <h6 class="title"><a href="#">Hatchback</a></h6>
                    </div>
                </div>
                <!-- brand-block-four -->
                <div class="brand-block-four">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-convertible-car"></i>
                        </div>
                        <h6 class="title"><a href="#">Coupe</a></h6>
                    </div>
                </div>
                <!-- brand-block-four -->
                <div class="brand-block-four">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-electric-car-1"></i>
                        </div>
                        <h6 class="title"><a href="#">Hybrid</a></h6>
                    </div>
                </div>
                <!-- brand-block-four -->
                <div class="brand-block-four">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-electric-car-1"></i>
                        </div>
                        <h6 class="title"><a href="#">Convertible</a></h6>
                    </div>
                </div>
                <!-- brand-block-four -->
                <div class="brand-block-four">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-van"></i>
                        </div>
                        <h6 class="title"><a href="#">Van</a></h6>
                    </div>
                </div>
                <!-- brand-block-four -->
                <div class="brand-block-four">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-pick-up-truck"></i>
                        </div>
                        <h6 class="title"><a href="#">Truck</a></h6>
                    </div>
                </div>
                <!-- brand-block-four -->
                <div class="brand-block-four">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-electric-car-2"></i>
                        </div>
                        <h6 class="title"><a href="#">Electric</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End boxcar-brand-section-three -->

     <!-- cars-section-five -->
     <section class="cars-section-eight pt-0">
        <div class="boxcar-container">
            <div class="boxcar-title text-center wow fadeInUp">
                <h2>The Most Searched Cars</h2>
            </div>
            <nav class="wow fadeInUp" data-wow-delay="100ms">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">SUV</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Hatchback</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Sedan</button>
                    <button class="nav-link" id="nav-Hybird-tab" data-bs-toggle="tab" data-bs-target="#nav-Hybird" type="button" role="tab" aria-controls="nav-Hybird" aria-selected="false">Hybird</button>
                    <button class="nav-link" id="nav-Coupe-tab" data-bs-toggle="tab" data-bs-target="#nav-Coupe" type="button" role="tab" aria-controls="nav-Coupe" aria-selected="false">Coupe</button>
                </div>
            </nav>
            <div class="tab-content wow fadeInUp" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row car-slider-three" data-preview="4">
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                 
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                    </div>
                                    <span>Low Mileage</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box two">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                    </div>
                                    <span>Great Price</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-6.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <span>Low Mileage</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box two">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                    </div>
                                    <span>Great Price</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-6.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
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
                    <div class="row car-slider-three" data-preview="4">
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                 
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                    </div>
                                    <span>Low Mileage</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box two">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                    </div>
                                    <span>Great Price</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-6.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <span>Low Mileage</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box two">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                    </div>
                                    <span>Great Price</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-6.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row car-slider-three" data-preview="4">
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                 
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                    </div>
                                    <span>Low Mileage</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box two">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                    </div>
                                    <span>Great Price</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-6.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <span>Low Mileage</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box two">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                    </div>
                                    <span>Great Price</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-6.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-Hybird" role="tabpanel" aria-labelledby="nav-Hybird-tab">
                    <div class="row car-slider-three" data-preview="4">
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                 
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                    </div>
                                    <span>Low Mileage</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box two">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                    </div>
                                    <span>Great Price</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-6.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <span>Low Mileage</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box two">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                    </div>
                                    <span>Great Price</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-6.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-Coupe" role="tabpanel" aria-labelledby="nav-Coupe-tab">
                    <div class="row car-slider-three" data-preview="4">
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                 
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                    </div>
                                    <span>Low Mileage x2</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box two">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                    </div>
                                    <span>Great Price</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-6.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <span>Low Mileage</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box two">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                    </div>
                                    <span>Great Price</span>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-block-three -->
                        <div class="box-car car-block-five col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="slider-thumb">
                                        <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                        <div class="image"><a href="#"><img src="images/resource/shop3-6.jpg" alt=""></a></div>
                                    </div>
                                    <a href="#" class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_601_1274)">
                                            <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                                    <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                    <ul>
                                        <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                        <li><i class="flaticon-speedometer"></i>Petrol</li>
                                        <li><i class="flaticon-gearbox"></i>Automatic</li>
                                    </ul>
                                    <div class="btn-box">
                                        <span>$789</span>
                                        <small>$399</small>
                                        <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_634_448)">
                                              <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_634_448">
                                                <rect width="14" height="14" fill="white"/>
                                              </clipPath>
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
        </div>
    </section>
    <!-- End shop section five -->

    <!-- why choose us section -->
    <section class="why-choose-us-section-three pt-0">
        <div class="large-container">
            <div class="right-box">
                <div class="boxcar-title text-center wow fadeInUp">
                    <h2 class="title">Why Choose Us?</h2>
                </div>
                <div class="row">
                    <!-- choose-us-block -->
                    <div class="choose-us-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp">
                            <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="51" height="60" viewBox="0 0 51 60" fill="none">
                                <g clip-path="url(#clip0_24_628)">
                                    <path d="M22.9688 52.9676C22.9688 52.732 22.827 52.5195 22.6096 52.4289C20.0682 51.3695 18.2812 48.8627 18.2812 45.9375V23.4375C18.2812 20.5123 20.0682 18.0054 22.6096 16.9461C22.827 16.8555 22.9688 16.6429 22.9688 16.4074V16.4062H18.2812C14.398 16.4062 11.25 19.5543 11.25 23.4375V45.9375C11.25 49.8207 14.398 52.9688 18.2812 52.9688H22.9688V52.9676Z" fill="#EEF1FB"/>
                                    <path d="M23.3708 41.3167L36.6292 28.0583" stroke="#FF5CF4" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M30 21.0938L44.0625 2.34375" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.9375 2.34375L25.3895 12.9483" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M48.75 30V23.4375C48.75 19.5543 45.602 16.4062 41.7188 16.4062H38.0747C36.4508 13.6159 33.4612 11.7188 30 11.7188C26.5388 11.7188 23.5493 13.6159 21.9253 16.4062H18.2812C14.398 16.4062 11.25 19.5543 11.25 23.4375V45.9375C11.25 49.8207 14.398 52.9688 18.2812 52.9688H21.9253C23.5492 55.7591 26.5388 57.6562 30 57.6562C33.4612 57.6562 36.4507 55.7591 38.0747 52.9688H41.7188C45.602 52.9688 48.75 49.8207 48.75 45.9375V39.375" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_24_628">
                                    <rect width="51" height="60" fill="white"/>
                                    </clipPath>
                                </defs>
                                </svg>
                            </div>
                            <div class="content-box">
                                <h6 class="title">Special Financing Offers</h6>
                                <div class="text">Our stress-free finance department that can find financial solutions to save you money.</div>
                            </div>
                        </div>
                    </div>
                    <!-- choose-us-block -->
                    <div class="choose-us-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="100ms">
                            <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                <path d="M30 2.34375V7.03125" stroke="#FF5CF4" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M48.75 2.34375L44.0625 7.03125" stroke="#FF5CF4" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.4738 36.6607C14.3072 35.4056 13.5938 33.7236 13.5938 31.875C13.5938 30.7464 13.8596 29.68 14.3323 28.7347L19.0198 19.3597C20.1732 17.0529 22.5579 15.4688 25.3125 15.4688H18.2812C15.5266 15.4688 13.142 17.0529 11.9885 19.3597L7.30102 28.7347C6.8284 29.68 6.5625 30.7464 6.5625 31.875C6.5625 33.7236 7.27594 35.4056 8.44254 36.6607L26.5658 56.1592C27.4218 57.0802 28.6436 57.6562 30 57.6562C31.3564 57.6562 32.5782 57.0802 33.4342 56.1593L33.5156 56.0716L15.4738 36.6607Z" fill="#EEF1FB"/>
                                <path d="M48.0115 19.3597L52.699 28.7347C53.1716 29.6798 53.4375 30.7464 53.4375 31.875C53.4375 33.7236 52.7241 35.4057 51.5575 36.6608L33.4342 56.1593C32.5782 57.0802 31.3564 57.6562 30 57.6562C28.6436 57.6562 27.4218 57.0802 26.5658 56.1593L8.44254 36.6608C7.27594 35.4057 6.5625 33.7236 6.5625 31.875C6.5625 30.7464 6.8284 29.6798 7.30102 28.7347L11.9885 19.3597C13.142 17.0528 15.5266 15.4688 18.2812 15.4688H41.7188C44.4734 15.4688 46.858 17.0528 48.0115 19.3597Z" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.25 2.34375L15.9375 7.03125" stroke="#FF5CF4" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.3849 29.5312H42.6151" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M25.3125 24.8438L30 29.5312L34.6875 24.8438" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M30 43.5938V29.7306" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="content-box">
                                <h6 class="title">Trusted Car Dealership</h6>
                                <div class="text">Our stress-free finance department that can find financial solutions to save you money.</div>
                            </div>
                        </div>
                    </div>
                    <!-- choose-us-block -->
                    <div class="choose-us-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                            <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                <g clip-path="url(#clip0_24_681)">
                                <path d="M8.75576 36.7478L35.3054 10.198C37.136 8.36741 40.104 8.36741 41.9346 10.198L36.8955 5.15894C35.0649 3.32837 32.097 3.32837 30.2664 5.15894L3.71671 31.7087C1.88613 33.5393 1.88613 36.5073 3.71671 38.3378L8.75576 43.3768C6.92518 41.5462 6.92518 38.5783 8.75576 36.7478Z" fill="#EEF1FB"/>
                                <path d="M50.1537 18.4171C51.9843 20.2477 51.9843 23.2157 50.1537 25.0463L23.6039 51.5959C21.7734 53.4265 18.8054 53.4265 16.9748 51.5959L3.71671 38.3378C1.88613 36.5072 1.88613 33.5392 3.71671 31.7086L30.2664 5.15894C32.097 3.32836 35.0649 3.32836 36.8955 5.15894L43.5247 11.7881L52.9689 2.34387" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18.9633 31.0458C18.7631 32.4554 19.2051 33.9388 20.2894 35.0231C22.12 36.8537 25.088 36.8537 26.9186 35.0231C28.7492 33.1926 28.7492 30.2246 26.9186 28.394C25.088 26.5634 25.088 23.5954 26.9186 21.7648C28.7492 19.9342 31.7172 19.9342 33.5478 21.7648C34.6321 22.8491 35.0741 24.3325 34.8739 25.7421" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.9749 38.3378L20.2894 35.0232" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M33.5476 21.765L36.8621 18.4504" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M43.5938 57.6562L57.6563 43.5937" stroke="#FF5CF4" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_24_681">
                                <rect width="60" height="60" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </div>
                            <div class="content-box">
                                <h6 class="title">Transparent Pricing</h6>
                                <div class="text">Our stress-free finance department that can find financial solutions to save you money.</div>
                            </div>
                        </div>
                    </div>
                    <!-- choose-us-block -->
                    <div class="choose-us-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                            <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                <path d="M23.5465 4.45312C19.8452 4.45312 16.4904 6.63082 14.9836 10.0114L8.88656 23.6906C5.23148 23.9418 2.34375 26.9843 2.34375 30.7031V36.0938C2.34375 39.3298 4.96711 41.9531 8.20312 41.9531H9.80918C9.81785 41.5022 9.82934 41.0514 9.84375 40.6005C9.4623 39.823 9.24727 38.949 9.24727 38.0245L9.14062 33.8672C9.14062 30.7927 9.76617 29.6094 12.0483 29.1497C13.1331 28.9311 14.0413 28.192 14.4858 27.1786L22.0148 10.0114C23.5215 6.63082 26.8764 4.45312 30.5777 4.45312H23.5465Z" fill="#EEF1FB"/>
                                <path d="M8.20312 41.9531C4.96711 41.9531 2.34375 39.3298 2.34375 36.0938V30.7031C2.34375 26.9843 5.23148 23.9418 8.88656 23.6906L14.9836 10.0114C16.4903 6.63082 19.8451 4.45312 23.5465 4.45312H34.2217C37.7441 4.45312 40.9692 6.4275 42.5711 9.56461L45.5859 15.4688M57.6562 30.7031C57.6562 26.8199 54.5082 23.6719 50.625 23.6719H18.6328M28.2422 15.4688V4.57031M32.4609 41.9531H27.1873M20.742 37.2656C18.1532 37.2656 16.0545 39.3643 16.0545 41.9531C16.0545 44.5419 18.1532 46.6406 20.742 46.6406C23.3307 46.6406 25.4295 44.5419 25.4295 41.9531C25.4295 39.3643 23.3309 37.2656 20.742 37.2656Z" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M57.6562 41.6016C57.6562 46.0997 54.0098 49.8047 49.5117 49.8047C45.0136 49.8047 41.3672 46.1583 41.3672 41.6602C41.3672 37.162 45.0722 33.5156 49.5703 33.5156M43.5352 48.1055L36.0938 55.5469" stroke="#FF5CF3" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="content-box">
                                <h6 class="title">Expert Car Service</h6>
                                <div class="text">Our stress-free finance department that can find financial solutions to save you money.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End why choose us section -->

    <!-- cars-section-seven -->
    <section class="cars-section-seven pt-0">
        <div class="boxcar-container">
            <div class="boxcar-title text-center wow fadeInUp">
                <h2>Latest Cars</h2>
            </div>
            <div class="row car-slider-three">
                <!-- car-block-seven -->
                <div class="box-car car-block-seven col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="slider-thumb">
                                <div class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                            </div>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                    <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_601_1274">
                                    <rect width="12" height="12" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_634_448)">
                                      <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_634_448">
                                        <rect width="14" height="14" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-seven -->
                <div class="box-car car-block-seven col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="slider-thumb">
                                <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                            </div>
                            <a href="#" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                    <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_601_1274">
                                    <rect width="12" height="12" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_634_448)">
                                      <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_634_448">
                                        <rect width="14" height="14" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-seven -->
                <div class="box-car car-block-seven col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box two">
                            <div class="slider-thumb">
                                <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                            </div>
                            <span>Great Price</span>
                            <a href="#" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                    <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_601_1274">
                                    <rect width="12" height="12" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_634_448)">
                                      <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_634_448">
                                        <rect width="14" height="14" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-seven -->
                <div class="box-car car-block-seven col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="slider-thumb">
                                <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-6.jpg" alt=""></a></div>
                            </div>
                            <a href="#" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                    <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_601_1274">
                                    <rect width="12" height="12" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_634_448)">
                                      <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_634_448">
                                        <rect width="14" height="14" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-seven -->
                <div class="box-car car-block-seven col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="slider-thumb">
                                <div class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                            </div>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                    <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_601_1274">
                                    <rect width="12" height="12" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_634_448)">
                                      <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_634_448">
                                        <rect width="14" height="14" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-seven -->
                <div class="box-car car-block-seven col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></figure>
                            <a href="#" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                    <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_601_1274">
                                    <rect width="12" height="12" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_634_448)">
                                      <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_634_448">
                                        <rect width="14" height="14" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-seven -->
                <div class="box-car car-block-seven col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box two">
                            <div class="slider-thumb">
                                <div class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                            </div>
                            <span>Great Price</span>
                            <a href="#" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                    <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_601_1274">
                                    <rect width="12" height="12" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_634_448)">
                                      <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_634_448">
                                        <rect width="14" height="14" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-seven -->
                <div class="box-car car-block-seven col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="slider-thumb">
                                <div class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-5.jpg" alt=""></a></div>
                                <div class="image"><a href="#"><img src="images/resource/shop3-7.jpg" alt=""></a></div>
                            </div>
                            <a href="#" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                    <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_601_1274">
                                    <rect width="12" height="12" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="{{route('cars-details', 123)}}">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="{{route('cars-details', 123)}}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_634_448)">
                                      <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_634_448">
                                        <rect width="14" height="14" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End shop section five -->

    <!-- inspiration section -->
    <section class="boxcar-inspiration-section pt-0">
        <div class="boxcar-container">
            <div class="boxcar-title wow fadeInUp">
                <h2>Need Some Inspiration?</h2>
            </div>
            <div class="right-box wow fadeInUp" data-wow-delay="100ms">
                <ul class="service-list">
                    <li><a href="#">Automatics Cars</a></li>
                    <li><a href="#">SUVs</a></li>
                    <li><a href="#">Electrics Cars</a></li>
                    <li><a href="#">New in Stock</a></li>
                    <li><a href="#">Petrol</a></li>
                    <li><a href="#">Diesel</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End inspiration section  -->

    <!-- boxcar-testimonial-section-three -->
    <section class="boxcar-testimonial-section-three">
        <div class="large-container">
            <div class="right-box">
                <div class="row">
                    <!-- content-column -->
                    <div class="content-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="boxcar-title light">
                                <h2>Who is BoxCar</h2>
                                <div class="text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id es</div>
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
                                        <figure class="image"><a href="#"><img src="images/resource/testi3-1.png" alt=""></a></figure>
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
                                        <figure class="image"><a href="#"><img src="images/resource/testi3-2.png" alt=""></a></figure>
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
                                        <figure class="image"><a href="#"><img src="images/resource/testi3-3.png" alt=""></a></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End boxcar-testimonial-section-three -->

    <!-- boxcar-team-section -->
    <section class="boxcar-team-section-two">
        <div class="boxcar-container">
            <div class="boxcar-title text-center wow fadeInUp">
                <h2>Our Team</h2>
            </div>
            <div class="row">
                <!-- team-block -->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/team2-1.jpg" alt=""></a></figure>
                            <div class="contact-info">
                                <span><a href="#">henry@boxcars.com</a></span>
                                <small><a href="#">+30 595 59 291 2</a></small>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="team-single.html">Courtney Henry</a></h4>
                            <span>Software Development Manager</span>
                        </div>
                    </div>
                </div>
                <!-- team-block -->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp" data-wow-delay="100ms">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/team2-2.jpg" alt=""></a></figure>
                            <div class="contact-info">
                                <span><a href="#">henry@boxcars.com</a></span>
                                <small><a href="#">+30 595 59 291 2</a></small>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="team-single.html">Jerome Bell</a></h4>
                            <span>Software Tester</span>
                        </div>
                    </div>
                </div>
                <!-- team-block -->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/team2-3.jpg" alt=""></a></figure>
                            <div class="contact-info">
                                <span><a href="#">henry@boxcars.com</a></span>
                                <small><a href="#">+30 595 59 291 2</a></small>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="team-single.html">Arlene McCoy</a></h4>
                            <span>Software Developer</span>
                        </div>
                    </div>
                </div>
                <!-- team-block -->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/team2-4.jpg" alt=""></a></figure>
                            <div class="contact-info">
                                <span><a href="#">henry@boxcars.com</a></span>
                                <small><a href="#">+30 595 59 291 2</a></small>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="team-single.html">Jenny Wilson</a></h4>
                            <span>UI/UX Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End boxcar-team-section -->

    <!-- blog section -->
    <section class="blog-section pt-0">
        <div class="boxcar-container">
            <div class="boxcar-title text-center wow fadeInUp">
                <h2>Latest Blog Posts</h2>
            </div>
            <div class="row">
                <!-- blog-block -->
                <div class="blog-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/blog-1.jpg" alt=""></a></figure>
                            <span class="date">news</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li>Ali Tufan</li>
                                <li>April 20, 2023</li>
                            </ul>
                            <h6 class="title"><a href="blog-single.html" title="">This Long-Awaited Technology May Finally Change the World</a></h6>
                        </div>
                    </div>
                </div>
                <!-- blog-block -->
                <div class="blog-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="100ms">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/blog-2.jpg" alt=""></a></figure>
                            <span class="date">news</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li>Ali Tufan</li>
                                <li>April 20, 2023</li>
                            </ul>
                            <h6 class="title"><a href="blog-single.html" title="">This Long-Awaited Technology May Finally Change the World</a></h6>
                        </div>
                    </div>
                </div>
                <!-- blog-block -->
                <div class="blog-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/blog-3.jpg" alt=""></a></figure>
                            <span class="date">news</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li>Ali Tufan</li>
                                <li>April 20, 2023</li>
                            </ul>
                            <h6 class="title"><a href="blog-single.html" title="">This Long-Awaited Technology May Finally Change the World</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog-section -->

        <!-- brand section-three -->
        <section class="boxcar-brand-section-three">
            <div class="large-container">
                <div class="right-box">
                    <div class="row">
                        <div class="content-column col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-column">
                                <div  class="boxcar-title">
                                    <h2>Explore Our Premium Brands</h2>
                                    <div class="text">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id es
                                    </div>
                                    <a href="{{route('cars-list')}}" class="brand-btn">Show All Brands<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_771_3204)">
                                          <path d="M13.6106 0H5.05509C4.84013 0 4.66619 0.173943 4.66619 0.388901C4.66619 0.603859 4.84013 0.777802 5.05509 0.777802H12.6719L0.113453 13.3362C-0.0384687 13.4881 -0.0384687 13.7342 0.113453 13.8861C0.189396 13.962 0.288927 14 0.388422 14C0.487917 14 0.587411 13.962 0.663391 13.8861L13.2218 1.3277V8.94447C13.2218 9.15943 13.3957 9.33337 13.6107 9.33337C13.8256 9.33337 13.9996 9.15943 13.9996 8.94447V0.388901C13.9995 0.173943 13.8256 0 13.6106 0Z" fill="white"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_771_3204">
                                            <rect width="14" height="14" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="image-column col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-column">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="images/resource/brandf.png" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End brand section-three -->
@endsection
