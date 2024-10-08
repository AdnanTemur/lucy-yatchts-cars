@extends('layouts.public')
@section('content')
<section class="inventory-pager style-1">
    <div class="boxcar-container">
        <form class="inventory-form">
            {{-- <div class="form_boxes line-r">
                <div class="drop-menu">
                    <div class="select">
                        <span>Used Cars</span>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="dropdown" style="display: none;">
                        <li>Audi</li>
                        <li>Honda</li>
                    </ul>
                </div>
            </div> --}}
            <div class="form_boxes line-r">
                <div class="drop-menu">
                    <div class="select">
                        <span>Makes</span>
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
                        <span>Models</span>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="dropdown" style="display: none;">
                        <li>A3</li>
                        <li>Accord</li>
                    </ul>
                </div>
            </div>
            <div class="form_boxes line-r">
                <div class="drop-menu">
                    <div class="select">
                        <span>Price</span>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="dropdown" style="display: none;">
                        <li>200$</li>
                        <li>300$</li>
                    </ul>
                </div>
            </div>
            {{-- <div class="form_boxes">
                <a href="#" title="" class="filter-popup"><img src="{{asset('images/icons/filter.svg" alt="" /> More Filters</a>
            </div> --}}
            <div class="form-submit">
                <button type="submit" class="theme-btn"><i class="flaticon-search"></i>Search Cars</button>
            </div>
        </form>
    </div>
</section><!--inventory-pager end-->


<div class="wrap-fixed-sidebar">
    <div class="sidebar-backdrop"></div>
    <div class="widget-sidebar-filter">
        <div class="fixed-sidebar-title">
            <h3>More Filter</h3>
            <a href="#" title="" class="close-filters">
                <img src="{{ asset('images/icons/close.svg') }}" alt="" />
            </a>
        </div>
        <div class="inventory-sidebar">
            <div class="inventroy-widget widget-location">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form_boxes">
                            <label>Location</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>New York</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>New York</li>
                                    <li>Los Vegas</li>
                                    <li>California</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form_boxes">
                            <label>Search within</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>200 miles</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>200 miles</li>
                                    <li>200 miles</li>
                                    <li>200 miles</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form_boxes">
                            <label>Zip Code</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>02111</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>02111</li>
                                    <li>02111</li>
                                    <li>02111</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form_boxes">
                            <label>Condition</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>New and Used</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>New York</li>
                                    <li>Los Vegas</li>
                                    <li>California</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="categories-box">
                            <h6 class="title">Type</h6>
                            <div class="cheak-box">
                                <label class="contain">SUV  (1,456)
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Sedan  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Hatchback  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Coupe  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Convertible  (1,456)
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form_boxes">
                            <label>Make</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>Add Make</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>New York</li>
                                    <li>Los Vegas</li>
                                    <li>California</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form_boxes">
                            <label>Model</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>Add Model</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>New York</li>
                                    <li>Los Vegas</li>
                                    <li>California</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form_boxes">
                            <label>Min year</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>2019</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>2020</li>
                                    <li>2021</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form_boxes">
                            <label>Max year</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>2023</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>2020</li>
                                    <li>2021</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form_boxes">
                            <label>Mileage</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>Any Mileage</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>New York</li>
                                    <li>Los Vegas</li>
                                    <li>California</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form_boxes">
                            <label>Drive Type</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>Any Type</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>New York</li>
                                    <li>Los Vegas</li>
                                    <li>California</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="price-box">
                            <h6 class="title">Price</h6>
                            <form class="row g-0">
                                <div class="form-column col-lg-6">
                                    <div class="form_boxes">
                                        <label>Min price</label>
                                        <div class="drop-menu">
                                            <!-- <input type="text" id="slider-range-value1" name="gender"> -->
                                            <span id="slider-range-value1"></span>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="form-column v2 col-lg-6">
                                    <div class="form_boxes">
                                        <label>Max price</label>
                                        <div class="drop-menu">
                                        <span id="slider-range-value2"></span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="widget-price">
                                
                                <div id="slider-val"></div>
                                <div class="slider-labels">
                                    <input type="hidden" name="min-value" value="">
                                    <input type="hidden" name="max-value" value="">                                                                                  
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="categories-box border-none-bottom">
                            <h6 class="title">Transmission</h6>
                            <div class="cheak-box">
                                <label class="contain">Automatic  (1,456)
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Manual  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">CVT  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="categories-box border-none-bottom">
                            <h6 class="title">Fuel Type</h6>
                            <div class="cheak-box">
                                <label class="contain">Diesel  (1,456)
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Petrol  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Hybird  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Electric  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form_boxes">
                            <label>Exterior Color</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>Blue</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>New York</li>
                                    <li>Los Vegas</li>
                                    <li>California</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form_boxes">
                            <label>Interior Color</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>Black</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>New York</li>
                                    <li>Los Vegas</li>
                                    <li>California</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form_boxes">
                            <label>Doors</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>3</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>New York</li>
                                    <li>Los Vegas</li>
                                    <li>California</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form_boxes">
                            <label>Cylinders</label>
                            <div class="drop-menu">
                                <div class="select">
                                    <span>6</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown" style="display: none;">
                                    <li>New York</li>
                                    <li>Los Vegas</li>
                                    <li>California</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="categories-box border-none-bottom m-0">
                            <h6 class="title">Key Features</h6>
                            <div class="cheak-box">
                                <label class="contain">360-degree camera  (1,456)
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Bluetooth  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Keyless start  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Navigation System  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Active head restraints  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Brake assist  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="contain">Parking assist systems  (1,456)
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <a href="#" title="" class="show-more">Show 8 more</a>
                        </div>
                    </div>
                </div>
            </div><!--widget end-->
        </div>
    </div>
    
</div>

<!-- cars-section-three -->
<section class="cars-section-four v1 layout-radius">
    <div class="boxcar-container">
        <div class="boxcar-title-three wow fadeInUp">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><span>Cars for Sale</span></li>
            </ul>
            <h2>New and Used Cars For Sale</h2>
        </div>
        <div class="text-box">
            <div class="text">Showing 1 to 16 of 1559 vehicles</div>
            <form>
                <div class="form_boxes v3">
                    <small>Sort by</small>
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
            </form>
        </div>
        <div class="row wow fadeInUp">
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="#">
                            <img src="{{ asset('images/resource/shop3-1.jpg') }}" alt="">
                        </a>
                    </figure>
                        <span>Low Mileage</span>
                        <a class="icon-box">
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
                        <h6 class="title"><a href="#">Range Rover, Defender 110</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_601_4346)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_601_4346">
                                <rect width="14" height="14" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#">
                            <img src="{{ asset('images/resource/shop3-2.jpg') }}" alt="">
                        </a></figure>
                        <a class="icon-box">
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
                        <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_601_4346)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_601_4346">
                                <rect width="14" height="14" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box two">
                        <figure class="image"><a href="#">
                            <img src="{{ asset('images/resource/shop3-3.jpg') }}" alt="">
                        </a></figure>
                        <span>Great Price</span>
                        <a class="icon-box">
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
                        <h6 class="title"><a href="#">New Range Rover, Evoque</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_601_4346)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_601_4346">
                                <rect width="14" height="14" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('images/resource/shop3-4.jpg')}}" alt=""></a></figure>
                        <a class="icon-box">
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
                        <h6 class="title"><a href="#">Audi, Q5</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_601_4346)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_601_4346">
                                <rect width="14" height="14" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('images/resource/shop12-1.jpg')}}" alt=""></a></figure>
                        <a class="icon-box">
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
                        <h6 class="title"><a href="#">Volkswagen, Tiguan</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_601_4346)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_601_4346">
                                <rect width="14" height="14" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box two">
                        <figure class="image"><a href="#"><img src="{{asset('images/resource/shop12-8.jpg')}}" alt=""></a></figure>
                        <a class="icon-box">
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
                        <h6 class="title"><a href="#">Honda, Accord</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_601_4346)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_601_4346">
                                <rect width="14" height="14" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('images/resource/shop12-3.jpg')}}" alt=""></a></figure>
                        <a class="icon-box">
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
                        <h6 class="title"><a href="#">Volkswagen, CC</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_601_4346)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_601_4346">
                                <rect width="14" height="14" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('images/resource/shop3-6.jpg')}}" alt=""></a></figure>
                        <a class="icon-box">
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
                        <h6 class="title"><a href="#">Hyundai, Exter</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_601_4346)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_601_4346">
                                <rect width="14" height="14" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('images/resource/shop12-4.jpg')}}" alt=""></a></figure>
                        <a class="icon-box">
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
                        <h6 class="title"><a href="#">BMW X1</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_601_4346)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_601_4346">
                                <rect width="14" height="14" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box two">
                        <figure class="image"><a href="#"><img src="{{asset('images/resource/shop12-5.jpg')}}" alt=""></a></figure>
                        <a class="icon-box">
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
                        <h6 class="title"><a href="#">Mercedes-Benz, GLA</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_601_4346)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_601_4346">
                                <rect width="14" height="14" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('images/resource/shop12-6.jpg')}}" alt=""></a></figure>
                        <a class="icon-box">
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
                        <h6 class="title"><a href="#">Mercedes-Benz, S Class</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_601_4346)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_601_4346">
                                <rect width="14" height="14" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="{{asset('images/resource/shop12-7.jpg')}}" alt=""></a></figure>
                        <a class="icon-box">
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
                        <h6 class="title"><a href="#">BMW 6 Series</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_601_4346)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_601_4346">
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
        
        <div class="pagination-sec">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.57983 5.99989C2.57983 5.7849 2.66192 5.56987 2.82573 5.4059L7.98559 0.24617C8.31382 -0.0820565 8.84598 -0.0820565 9.17408 0.24617C9.50217 0.574263 9.50217 1.10632 9.17408 1.43457L4.60841 5.99989L9.17376 10.5654C9.50185 10.8935 9.50185 11.4256 9.17376 11.7537C8.84566 12.0821 8.31366 12.0821 7.98544 11.7537L2.82555 6.59404C2.66176 6.42999 2.57983 6.21495 2.57983 5.99989Z" fill="#050B20"/>
                            </svg> 
                      </span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">...</a></li>
                  <li class="page-item"><a class="page-link" href="#">20</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2880_6407)">
                                <path d="M9.42017 6.00011C9.42017 6.2151 9.33808 6.43013 9.17427 6.5941L4.01441 11.7538C3.68618 12.0821 3.15402 12.0821 2.82592 11.7538C2.49783 11.4257 2.49783 10.8937 2.82592 10.5654L7.39159 6.00011L2.82624 1.43461C2.49815 1.10652 2.49815 0.574382 2.82624 0.246315C3.15434 -0.0820709 3.68634 -0.0820709 4.01457 0.246315L9.17446 5.40596C9.33824 5.57001 9.42017 5.78505 9.42017 6.00011Z" fill="#050B20"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2880_6407">
                                <rect width="12" height="12" fill="white" transform="translate(12 12) rotate(-180)"/>
                                </clipPath>
                                </defs>
                            </svg>    
                      </span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
                <div class="text">Showing results 1-30 of 1,415</div>
              </nav>
        </div>
    </div>
</section>
@endsection