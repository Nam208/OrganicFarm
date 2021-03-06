@extends('layouts.master')
@section('title','Product Detail')
@section('content')
    <div class="product-details__container">
        <!-- Start Product Details Area -->
{{--        {{dd($product)}}--}}
        <section class="product-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="product-details-image"><img src="{{$product->thumbnail}}"></div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="product-details-desc">
                                    <h3>{{$product->name}}</h3>
                                    <div class="price">
                                        <span class="new-price">{{$product->price}}</span>
                                        <span class="old-price">{{$product->price}}</span>
                                    </div>
                                    <div class="product-review">
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <a href="#" class="rating-count">3 reviews</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <div class="product-add-to-cart">
                                        <div class="input-counter">
                                            <span class="minus-btn">
                                                <i class='bx bx-minus'></i>
                                            </span>
                                            <input type="text" min="1" value="1">
                                            <span class="plus-btn">
                                                <i class='bx bx-plus'></i>
                                            </span>
                                        </div>
                                        <button type="submit" class="default-btn">
                                            Add to cart
                                            <span></span>
                                        </button>
                                    </div>

                                    <div class="buy-checkbox-btn">
                                        <div class="item">
                                            <input class="inp-cbx" id="cbx" type="checkbox">
                                            <label class="cbx" for="cbx">
                                                <span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                </span>
                                                <span>I agree with the terms and conditions</span>
                                            </label>
                                        </div>
                                        <div class="item">
                                            <a href="#" class="btn btn-light">Buy it now!</a>
                                        </div>
                                    </div>

                                    <div class="products-share">
                                        <ul class="social">
                                            <li><span>Share:</span></li>
                                            <li>
                                                <a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab products-details-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <ul class="tabs">
                                        <li>
                                            <a href="#">
                                                <div class="dot"></div>
                                                Description
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="dot"></div>
                                                Reviews
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="tab_content">
                                        <div class="tabs_item">
                                            <div class="products-details-tab-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="products-details-tab-content">
                                                <div class="product-review-form">
                                                    <h3>Customer Reviews</h3>
                                                    <div class="review-title">
                                                        <div class="rating">
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                        </div>
                                                        <p>Based on 3 reviews</p>
                                                        <a href="#" class="default-btn">
                                                            Write a Review
                                                        </a>
                                                    </div>
                                                    <div class="review-comments">
                                                        <div class="review-item">
                                                            <div class="rating">
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                            </div>
                                                            <h3>Good</h3>
                                                            <span><strong>Admin</strong> on <strong>Sep 21, 2020</strong></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                            <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                        </div>
                                                        <div class="review-item">
                                                            <div class="rating">
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                            </div>
                                                            <h3>Good</h3>
                                                            <span><strong>Admin</strong> on <strong>Sep 21, 2020</strong></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                            <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                        </div>
                                                        <div class="review-item">
                                                            <div class="rating">
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                            </div>
                                                            <h3>Good</h3>
                                                            <span><strong>Admin</strong> on <strong>Sep 21, 2020</strong></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                            <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-form">
                                                        <h3>Write a Review</h3>
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <input type="text" id="review-title" name="review-title" placeholder="Enter your review a title" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <textarea name="review-body" id="review-body" cols="30" rows="7" placeholder="Write your comments here" class="form-control"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <button type="submit" class="default-btn">
                                                                        Submit Review
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="related-shop">
                            <h4>Related Products</h4>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="top-products-item">
                                        <div class="products-image">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/top-products/top-products-1.jpg')}}" alt="image"></a>

                                            <ul class="products-action">
                                                <li>
                                                    <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                                        <i class="flaticon-search"></i>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="sale">
                                                <span>Sale</span>
                                            </div>
                                        </div>

                                        <div class="products-content">
                                            <h3>
                                                <a href="shop-details.html">Darling Oranges</a>
                                            </h3>
                                            <div class="price">
                                                <span class="new-price">$38.00</span>
                                                <span class="old-price">$125.00</span>
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bx-star'></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="top-products-item">
                                        <div class="products-image">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/top-products/top-products-2.jpg')}}" alt="image"></a>

                                            <ul class="products-action">
                                                <li>
                                                    <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                                        <i class="flaticon-search"></i>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="sale">
                                                <span>Sale</span>
                                            </div>
                                        </div>

                                        <div class="products-content">
                                            <h3>
                                                <a href="shop-details.html">Strawberry</a>
                                            </h3>
                                            <div class="price">
                                                <span class="new-price">$30.00</span>
                                                <span class="old-price">$116.00</span>
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bx-star'></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="top-products-item">
                                        <div class="products-image">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/top-products/top-products-3.jpg')}}" alt="image"></a>

                                            <ul class="products-action">
                                                <li>
                                                    <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                                        <i class="flaticon-search"></i>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="sale">
                                                <span>Sale</span>
                                            </div>
                                        </div>

                                        <div class="products-content">
                                            <h3>
                                                <a href="shop-details.html">Cabbage</a>
                                            </h3>
                                            <div class="price">
                                                <span class="new-price">$40.00</span>
                                                <span class="old-price">$179.00</span>
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bx-star'></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="top-products-item">
                                        <div class="products-image">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/top-products/top-products-4.jpg')}}" alt="image"></a>

                                            <ul class="products-action">
                                                <li>
                                                    <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                                        <i class="flaticon-search"></i>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="sale">
                                                <span>Sale</span>
                                            </div>
                                        </div>

                                        <div class="products-content">
                                            <h3>
                                                <a href="shop-details.html">Nectarine</a>
                                            </h3>
                                            <div class="price">
                                                <span class="new-price">$45.00</span>
                                                <span class="old-price">$135.00</span>
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bx-star'></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            <section class="widget widget_search">
                                <h3 class="widget-title">Search</h3>

                                <form class="search-form">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search...">
                                    </label>
                                    <button type="submit">
                                        <i class="flaticon-search"></i>
                                    </button>
                                </form>
                            </section>

                            <section class="widget price_list_widget">
                                <h3 class="widget-title">Price</h3>

                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="$10">
                                    </div>
                                </form>
                            </section>

                            <section class="widget widget_popular_products">
                                <h3 class="widget-title">Popular Products</h3>

                                <article class="item">
                                    <a href="#" class="thumb">
                                        <span class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <span>$49.00</span>
                                        <h4 class="title usmall"><a href="#">Random Romance Novel Title Generator</a></h4>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                    </div>
                                </article>

                                <article class="item">
                                    <a href="#" class="thumb">
                                        <span class="fullimage cover bg2" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <span>$59.00</span>
                                        <h4 class="title usmall"><a href="#">Writing Exercises Story Title Ideas</a></h4>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                    </div>
                                </article>

                                <article class="item">
                                    <a href="#" class="thumb">
                                        <span class="fullimage cover bg3" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <span>$69.00</span>
                                        <h4 class="title usmall"><a href="#">Amaze Story Kitt Net's Book Ideas</a></h4>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                    </div>
                                </article>
                            </section>

                            <section class="widget widget_tag_cloud">
                                <h3 class="widget-title">Popular Tags</h3>

                                <div class="tagcloud">
                                    <a href="#">Architecture</a>
                                    <a href="#">Interior Design</a>
                                    <a href="#">Designing</a>
                                    <a href="#">Construction</a>
                                    <a href="#">Buildings</a>
                                    <a href="#">Industrial Factory</a>
                                    <a href="#">Material</a>
                                    <a href="#">Organic</a>
                                    <a href="#">Food</a>
                                    <a href="#">Tasty</a>
                                </div>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Details Area -->

        <!-- Start Featured Products Area -->
        <section class="featured-products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Featured  Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-1.jpg')}}" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Bean</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$3.00</span>
                                    <span class="old-price">$12.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-2.jpg')}}" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Pomegranate</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$30.00</span>
                                    <span class="old-price">$122.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-3.jpg')}}" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Avocado</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$40.00</span>
                                    <span class="old-price">$140.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-4.jpg')}}" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Capsicum</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$33.00</span>
                                    <span class="old-price">$133.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-5.jpg')}}" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">WaterMelon</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$23.00</span>
                                    <span class="old-price">$125.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-6.jpg')}}" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Crab Apples</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$45.00</span>
                                    <span class="old-price">$120.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-7.jpg')}}" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Pea-nut</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$65.00</span>
                                    <span class="old-price">$156.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-8.jpg')}}" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Mint</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$49.00</span>
                                    <span class="old-price">$133.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Featured Products Area -->
    </div>
@endsection
@section('script-tag')
    <script></script>
@endsection
