@extends('layouts.public')
@section('content')
    <!-- inventory-section -->
    <section class="inventory-section v1 pb-0" style="border-radius: none;">
        <div class="boxcar-container">
            <div class="boxcar-title-three">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><span>Yachts for Rental</span></li>
                </ul>
                <h1>SKYRA</h1>
                <h4 class="">SKYRA - 76ft/23m (2009) - Yacht</h4>

                <div class="content-box">
                    <div class="btn-box v2">
                        <div class="share-btn">
                            <span>Share</span>
                            <a href="#" class="share"><img src="{{ asset('images/resource/share.svg') }}"></a>
                        </div>
                        <div class="share-btn">
                            <span>Save</span>
                            <a href="#" class="share"><img src="{{ asset('images/resource/share1-1.svg') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="inspection-column v2 col-xl-8 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="gallery-sec">
                            <div class="image-column wrap-gallery-box">
                                <div class="inner-column inventry-slider-two">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ asset('images/yachts images/SKYRA.png') }}"
                                                data-fancybox="gallery">
                                                <img src="{{ asset('images/yachts images/SKYRA.png') }}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ asset('images/yachts images/SKYRA-1.png') }}"
                                                data-fancybox="gallery">
                                                <img src="{{ asset('images/yachts images/SKYRA-1.png') }}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <ul class="video-list">
                                        <li>
                                            <a href="{{ asset('images/yachts images/SKYRA.png') }}" data-fancybox="gallery">
                                                <img src="{{ asset('images/resource/video1-4.svg') }}">All Photos
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- features-sec -->
                        <div class="features-sec v2">
                            <h4 class="title">Feature Highlights</h4>
                            <div class="row">
                                <!-- list-column -->
                                <div class="list-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-column">
                                        <ul class="feature-list">
                                            <li><i class="fa-solid fa-check"></i>Free Refreshments</li>
                                            <li><i class="fa-solid fa-check"></i>Insurance Included</li>
                                            <li><i class="fa-solid fa-check"></i>Quality Speakers </li>
                                            <li><i class="fa-solid fa-check"></i>Music System </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- list-column -->
                                <div class="list-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-column">
                                        <ul class="feature-list">
                                            <li><i class="fa-solid fa-check"></i>Free Towels</li>
                                            <li><i class="fa-solid fa-check"></i>Free Fuel</li>
                                            <li><i class="fa-solid fa-check"></i>Kids Welcome</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4 class="title">Service guarantee included</h4>
                                <span>Service Guarantee by Bookanyboat.com, created for your peace of mind. If you see this
                                    badge on any boat listing, we guarantee the following expectations:</span>

                            </div>
                        </div>
                        <!-- faq-section -->
                        <div class="faqs-section v2">
                            <div class="inner-container">
                                <!-- FAQ Column -->
                                <h4 class="title">Amenities</h4>
                                <div class="faq-column wow fadeInUp" data-wow-delay="400ms">
                                    <div class="inner-column">
                                        <ul class="widget-accordion wow fadeInUp">
                                            <!--Block-->
                                            <li class="accordion block active-block">
                                                <div class="acc-btn active">Complimentary Inclusions<div
                                                        class="icon fa fa-angle-down"></div>
                                                </div>
                                                <div class="acc-content current">
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="list-column col-lg-8 col-md-6 col-sm-12">
                                                                <div class="inner-column">
                                                                    <ul class="spects-list">
                                                                        <li><span>✔️Soft Drinks (Juices)</span>✔️Ice
                                                                        </li>
                                                                        <li><span> ✔️Towels</span> ✔️Insurance</li>
                                                                        <li><span> ✔️Bed Linen</span> ✔️Fuel</li>
                                                                        <li><span> ✔️Water</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <!--Block-->
                                            <li class="accordion block">
                                                <div class="acc-btn">Connectivity<div class="icon fa fa-angle-down"></div>
                                                </div>
                                                <div class="acc-content">
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="list-column col-lg-8 col-md-6 col-sm-12">
                                                                <div class="inner-column">
                                                                    <ul class="spects-list">
                                                                        <li><span> ✔️Bluetooth</span> ✔️AUX Cable
                                                                        </li>
                                                                        <li><span> ✔️USB Port</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <!--Block-->
                                            <li class="accordion block v2">
                                                <div class="acc-btn">Navigation and Safety<div
                                                        class="icon fa fa-angle-down"></div>
                                                </div>
                                                <div class="acc-content">
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="list-column col-lg-6 col-md-6 col-sm-12">
                                                                <div class="inner-column">
                                                                    <ul class="spects-list">
                                                                        <li><span> ✔️Generator</span> ✔️Bow Thruster
                                                                        </li>
                                                                        <li><span> ✔️Bimini</span> ✔️Outside GPS Plotter
                                                                        </li>
                                                                        <li><span> ✔️Eletric winches
                                                                            </span> ✔️Autopilot</li>
                                                                        <li><span> ✔️Life Jackets</span> ✔️Invertor</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="accordion block v2">
                                                <div class="acc-btn">Saloon & Cabin Facilities<div
                                                        class="icon fa fa-angle-down"></div>
                                                </div>
                                                <div class="acc-content">
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="list-column col-lg-6 col-md-6 col-sm-12">
                                                                <div class="inner-column">
                                                                    <ul class="spects-list">
                                                                        <li><span> ✔️Fridge</span> ✔️Shower
                                                                        </li>
                                                                        <li><span> ✔️Sink</span> ✔️Dinnerware & Cups
                                                                            (Plastic)

                                                                        </li>
                                                                        <li><span> ✔️Pillows and Blankets

                                                                            </span> ✔️Microwave</li>
                                                                        <li><span> ✔️Air Conditioning
                                                                            </span> ✔️Kitchen Utensils
                                                                        </li>
                                                                        <li><span> ✔️Heating
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="accordion block v2">
                                                <div class="acc-btn">Entertainment<div class="icon fa fa-angle-down">
                                                    </div>
                                                </div>
                                                <div class="acc-content">
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="list-column col-lg-6 col-md-6 col-sm-12">
                                                                <div class="inner-column">
                                                                    <ul class="spects-list">
                                                                        <li><span> ✔️Outside Speakers</span> ✔️TV
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-review-box">
                            <div class="review-sec v2">
                                <h4 class="title">Customer Reviews</h4>
                                <div class="review-box">
                                    <div class="rating-box">
                                        <div class="content-box">
                                            <span>Overall Rating</span>
                                            <h3 class="title">4.8</h3>
                                            <small>Out Of 5</small>
                                        </div>
                                    </div>
                                    <div class="content-box-three">
                                        <ul class="review-list two">
                                            <li>
                                                <div class="review-title">
                                                    <span>Comfort</span>
                                                    <small>Excellent</small>
                                                </div>
                                                <sub><i class="fa fa-star"></i>5.0</sub>
                                            </li>
                                            <li>
                                                <div class="review-title">
                                                    <span>Performance</span>
                                                    <small>Excellent</small>
                                                </div>
                                                <sub><i class="fa fa-star"></i>5.0</sub>
                                            </li>
                                            <li>
                                                <div class="review-title">
                                                    <span>Exterior styling</span>
                                                    <small>Excellent</small>
                                                </div>
                                                <sub><i class="fa fa-star"></i>5.0</sub>
                                            </li>
                                        </ul>
                                        <ul class="review-list">
                                            <li>
                                                <div class="review-title">
                                                    <span>Interior design</span>
                                                    <small>Excellent</small>
                                                </div>
                                                <sub><i class="fa fa-star"></i>5.0</sub>
                                            </li>
                                            <li>
                                                <div class="review-title">
                                                    <span>Value for the money</span>
                                                    <small>Excellent</small>
                                                </div>
                                                <sub><i class="fa fa-star"></i>5.0</sub>
                                            </li>
                                            <li>
                                                <div class="review-title">
                                                    <span>Reliability</span>
                                                    <small>Excellent</small>
                                                </div>
                                                <sub><i class="fa fa-star"></i>5.0</sub>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <div class="content-box">
                                    <div class="auther-name">
                                        <span>A.T</span>
                                        <h6 class="name">Ali Tufan</h6>
                                        <small>April 2023</small>
                                    </div>
                                    <div class="rating-list">
                                        <ul class="list">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Take this tour!--its fantastic!</span>
                                    </div>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                        enim ad minim veniam.
                                    </div>
                                    <div class="image-box">
                                        <img src="{{ asset('images/resource/blog5-4.jpg') }}">
                                        <img src="{{ asset('images/resource/blog5-5.jpg') }}">
                                        <img src="{{ asset('images/resource/blog5-6.jpg') }}">
                                    </div>
                                    <div class="btn-box">
                                        <a href="#" class="like-btn"><i
                                                class="fa-solid fa-thumbs-up"></i>Helpful</a>
                                        <a href="#" class="like-btn"><i class="fa-solid fa-thumbs-down"></i>Not
                                            helpful</a>
                                    </div>
                                </div>
                                <div class="content-box two">
                                    <div class="auther-name">
                                        <span>A.T</span>
                                        <h6 class="name">Ali Tufan</h6>
                                        <small>April 2023</small>
                                    </div>
                                    <div class="rating-list">
                                        <ul class="list">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Take this tour!--its fantastic!</span>
                                    </div>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                        sint occaecat cupidatat non proident.
                                    </div>
                                    <div class="btn-box">
                                        <a href="#" class="like-btn"><i
                                                class="fa-solid fa-thumbs-up"></i>Helpful</a>
                                        <a href="#" class="like-btn"><i class="fa-solid fa-thumbs-down"></i>Not
                                            helpful</a>
                                    </div>
                                    <a href="#" class="review">See more reviews<svg
                                            xmlns="http://www.w3.org/2000/svg" width="15" height="14"
                                            viewbox="0 0 15 14" fill="none">
                                            <g clip-path="url(#clip0_881_13248)">
                                                <path
                                                    d="M14.1106 0H5.55509C5.34013 0 5.16619 0.173943 5.16619 0.388901C5.16619 0.603859 5.34013 0.777802 5.55509 0.777802H13.1719L0.613453 13.3362C0.461531 13.4881 0.461531 13.7342 0.613453 13.8861C0.689396 13.962 0.788927 14 0.888422 14C0.987917 14 1.08741 13.962 1.16339 13.8861L13.7218 1.3277V8.94447C13.7218 9.15943 13.8957 9.33337 14.1107 9.33337C14.3256 9.33337 14.4996 9.15943 14.4996 8.94447V0.388901C14.4995 0.173943 14.3256 0 14.1106 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_881_13248">
                                                    <rect width="14" height="14" fill="white"
                                                        transform="translate(0.5)"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="reply-c-box">
                            <div class="Reply-sec">
                                <h6 class="title">Leave a Reply</h6>
                                <div class="text">Your email address will not be published. Required fields are marked *
                                </div>
                                <div class="right-box">
                                    <div class="rating-list two">
                                        <div class="list-box">
                                            <span>Comfort</span>
                                            <ul class="list">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="list-box">
                                            <span>Exterior Styling</span>
                                            <ul class="list">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="list-box">
                                            <span>Performance</span>
                                            <ul class="list">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rating-list">
                                        <div class="list-box">
                                            <span>Interior Design</span>
                                            <ul class="list">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="list-box">
                                            <span>Value For The Money</span>
                                            <ul class="list">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="list-box">
                                            <span>Reliability</span>
                                            <ul class="list">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="row">
                                <div class="col-lg-6">
                                    <div class="form_boxes">
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Ali Tufan">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_boxes">
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="Creativelayers088@Gmail.Com">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_boxes">
                                        <label>Title</label>
                                        <input type="text" name="title" placeholder="Good Cars">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_boxes v2">
                                        <label>Comment</label>
                                        <textarea name="message" placeholder="Lorem Ipsum Dolar Sit Amet" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-submit">
                                        <button type="submit" class="theme-btn">Post Comment <svg
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewbox="0 0 14 14" fill="none">
                                                <g clip-path="url(#clip0_711_3214)">
                                                    <path
                                                        d="M13.6106 0H5.05509C4.84013 0 4.66619 0.173943 4.66619 0.388901C4.66619 0.603859 4.84013 0.777802 5.05509 0.777802H12.6719L0.113453 13.3362C-0.0384687 13.4881 -0.0384687 13.7342 0.113453 13.8861C0.189396 13.962 0.288927 14 0.388422 14C0.487917 14 0.587411 13.962 0.663391 13.8861L13.2218 1.3277V8.94447C13.2218 9.15943 13.3957 9.33337 13.6107 9.33337C13.8256 9.33337 13.9996 9.15943 13.9996 8.94447V0.388901C13.9995 0.173943 13.8256 0 13.6106 0Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="clip0_711_3214">
                                                        <rect width="14" height="14" fill="white"></rect>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="side-bar-column v2 v3 v4 col-xl-4  col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-box-two v2">
                            <span>Our Price</span>
                            <h3 class="title">Per Hours ($789)</h3>
                            <div class="btn-box">
                                <a href="{{route('checkout', 123)}}" class="side-btn">
                                    <img src="{{ asset('images/resource/tag.svg') }}">
                                    Make An Offer Price
                                </a>
                            </div>
                        </div>
                        <!-- overview-sec -->
                        <div class="overview-box">
                            <h4 class="title">Boat Specifications</h4>
                            <ul class="list v2">
                                <li><span><img src="{{ asset('images/resource/insep1-1.svg') }}">Year of
                                        Manufacure</span>2009</li>
                                <li><span><img src="{{ asset('images/resource/insep1-2.svg') }}">Length</span>76ft/23m
                                </li>
                                <li><span><img src="{{ asset('images/resource/insep1-3.svg') }}">Engine</span>2x0hp</li>
                                <li><span><img src="{{ asset('images/resource/insep1-4.svg') }}">Fuel Tank</span>2023</li>
                                <li><span><img src="{{ asset('images/resource/insep1-5.svg') }}">Captain &
                                        Crew</span>Included</li>
                                <li><span><img src="{{ asset('images/resource/insep1-6.svg') }}">Guests Capacity</span>35
                                </li>
                                <li><span><img src="{{ asset('images/resource/insep1-7.svg') }}">Sleeps</span>-</li>
                                <li><span><img src="{{ asset('images/resource/insep1-8.svg') }}">Bathroom/Toilets</span>3
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- cars-section-three -->
        <div class="cars-section-three">
            <div class="boxcar-container">
                <div class="boxcar-title wow fadeInUp">
                    <h2>Related Listings</h2>
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

                <div class="row car-slider-three" data-preview="4">
                    <!-- car-block-three -->
                    <div class="box-car car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="slider-thumb">
                                    <div class="image"><a href="#"><img
                                                src="{{ asset('images/yachts images/jet ski.png') }}" alt=""></a>
                                    </div>
                                    <div class="image"><a href="#"><img
                                                src="{{ asset('images/resource/shop3-2.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="image"><a href="#"><img
                                                src="{{ asset('images/resource/shop3-3.jpg') }}" alt=""></a>
                                    </div>
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
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
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
                                                src="{{ asset('images/yachts images/50ft Al Shali.jpeg') }}"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="{{ asset('images/yachts images/50ft Al Shali -2.jpeg') }}"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="{{ asset('images/yachts images/50ft Al Shali -3.jpeg') }}"
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
                                <h6 class="title"><a href="jetski.html">50ft Al Shali - 50ft/15m - Yacht</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>15 Guests</li>
                                    <li><i class="flaticon-speedometer"></i>50 Feet</li>
                                </ul>
                                <div class="btn-box">
                                    <span> Per Hours ($789)</span>
                                    <small>$789</small>
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
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
                                                src="{{ asset('images/yachts images/SKYRA.png') }}" alt=""></a>
                                    </div>
                                    <div class="image"><a href="#"><img
                                                src="{{ asset('images/yachts images/SKYRA-1.png') }}" alt=""></a>
                                    </div>
                                    <div class="image"><a href="#"><img
                                                src="{{ asset('images/yachts images/SKYRA-2.png') }}" alt=""></a>
                                    </div>
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
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
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
                                                src="{{ asset('images/yachts images/Gold Yacht.png') }}"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="{{ asset('images/yachts images/Gold Yacht 1.png') }}"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="{{ asset('images/yachts images/Gold Yacht 2.png') }}"
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
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
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
                                                src="{{ asset('images/yachts images/MAZAYEL.png') }}" alt=""></a>
                                    </div>
                                    <div class="image"><a href="#"><img
                                                src="{{ asset('images/yachts images/MAZAYEL  1.png') }}"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="{{ asset('images/yachts images/MAZAYEL 2.png') }}"
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
                                <h6 class="title"><a href="inventory-page-single-v2.html">135ft MAZAYEL - 135ft/41m -
                                        Yacht</a>
                                </h6>
                                <ul>
                                    <li><i class="flaticon-user"></i>190 Guests</li>
                                    <li><i class="flaticon-speedometer"></i>90ft/27m</li>
                                </ul>
                                <div class="btn-box">
                                    <span>Per Hours ($789)</span>
                                    <small>$399</small>
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
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
                                                src="{{ asset('images/yachts images/Sunseeker.png') }}"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="{{ asset('images/yachts images/Sunseeker (1).png') }}"
                                                alt=""></a></div>
                                    <div class="image"><a href="#"><img
                                                src="{{ asset('images/yachts images/Sunseeker (2).png') }}"
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
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
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
        <!-- End shop section two -->
    </section>
    <!-- End inventory-section -->
@endsection
