@extends('layouts.public')
@section('content')
    <section class="checkout-section" style="border-radius: none;">
        <div class="boxcar-container">
            <div class="boxcar-title-three">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><span>Checkout</span></li>
                </ul>
                <h2>Shop Checkout</h2>
            </div>
            <div class="row">
                <!-- content-column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h6 class="title">Billing details</h6>
                        <form class="row g-0">
                            <div class="form-column col-lg-6">
                                <div class="form_boxes">
                                    <label>First Name</label>
                                    <input type="text" name="name" placeholder="Ali" />
                                </div>
                            </div>
                            <div class="form-column col-lg-6">
                                <div class="form_boxes">
                                    <label>Last Name</label>
                                    <input type="text" name="last-name" placeholder="Tufan" />
                                </div>
                            </div>
                            <div class="form-column col-lg-12">
                                <div class="form_boxes">
                                    <label>Company Name</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Select</span>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>Select</li>
                                            <li>Select</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-column col-lg-12">
                                <div class="form_boxes">
                                    <label>Country / Region *</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Select</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>pakistan</li>
                                            <li>america</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-column col-lg-12">
                                <div class="form_boxes">
                                    <label>House number and street name</label>
                                    <input type="text" name="addresss" placeholder="Home" />
                                </div>
                            </div>
                            <div class="form-column col-lg-12">
                                <div class="form_boxes">
                                    <label>Apartment, suite, unit, etc. (optional)</label>
                                    <input type="text" name="addresss2" placeholder="Ali" />
                                </div>
                            </div>
                            <div class="form-column col-lg-12">
                                <div class="form_boxes">
                                    <label>Town / City *</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Select</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>pakistan</li>
                                            <li>america</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-column col-lg-12">
                                <div class="form_boxes">
                                    <label>State</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Ali Tufan</span>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>Ali Tufan</li>
                                            <li>Ali Tufan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-column col-lg-12">
                                <div class="form_boxes">
                                    <label>Zip Code</label>
                                    <input type="number" name="zip" placeholder="02111" />
                                </div>
                            </div>
                            <div class="form-column col-lg-12">
                                <div class="form_boxes">
                                    <label>Phone</label>
                                    <input type="number" name="phone" placeholder="+70 8485 283 181" />
                                </div>
                            </div>
                            <div class="form-column col-lg-12">
                                <div class="form_boxes">
                                    <label>Email Address</label>
                                    <input type="email" name="email" placeholder="Creativelayers088@Gmail.Com" />
                                </div>
                            </div>
                            <div class="form-column col-lg-12">
                                <h6 class="title">Additional information</h6>
                                <div class="form_boxes v2">
                                    <label>Order Notes (optional)</label>
                                    <div class="drop-menu">
                                        <textarea name="text" placeholder="Lorem Ipsum Dolar Sit Amet"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- side-bar -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="side-bar">
                        <div class="order-box">
                            <h6 class="title">Your order</h6>
                            <ul class="order-list">
                                <li>Product<span>Subtotal</span></li>
                                <li class="v2">12v Compact Battery Jump Starter x2<span>$59.00</span></li>
                                <li class="v2 v3">Road and Track Suspensio x 3<span>$67.00</span></li>
                                <li>Subtotal<span>$178.00</span></li>
                                <li>Shipping<span>$178.00</span></li>
                                <li>Total<span>$9,218.00</span></li>
                            </ul>
                        </div>
                        <div class="payment-options">
                            <ul>
                                <li>
                                    <div class="shipp">
                                        <input type="radio" id="c4" name="cc2">
                                        <label for="c4"><span></span>
                                            <small>Direct Bank Transfer</small>
                                        </label>
                                    </div>
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the
                                        payment reference. Your order won’t be shipped until the funds have cleared in our
                                        account.</p>
                                </li>
                                <li>
                                    <div class="shipp">
                                        <input type="radio" id="c5" name="cc2">
                                        <label for="c5"><span></span>
                                            <small>Check Payments</small>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="shipp">
                                        <input type="radio" id="c6" name="cc2">
                                        <label for="c6"><span></span>
                                            <small>Cash on Delivery</small>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="shipp">
                                        <input type="radio" id="c7" name="cc2">
                                        <label for="c7"><span></span>
                                            <small>PayPal</small>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="theme-btn w-100">Place order <img src="images/arrow.svg"
                                    alt="" /></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
