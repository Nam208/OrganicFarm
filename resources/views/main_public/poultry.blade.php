@extends('layouts.master')
@section('title','Poultry')
@section('content')
    <section class="fruits-container">
        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Fruits</h2>
                            <ul>
                                <li>
                                    <a href="{{ route('home-page') }}">Home</a>
                                </li>
                                <li>Fruits</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Top Products Area -->
        <section class="top-products-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="orgo-grid-sorting row align-items-center">
                            <div class="col-lg-6 col-md-6 result-count">
                                <p>We found <span class="count">15</span> products available for you</p>
                            </div>

                            <div class="col-lg-6 col-md-6 ordering">
                                <div class="select-box">
                                    <label>Sort By:</label>
                                    <select>
                                        <option>Default</option>
                                        <option>Popularity</option>
                                        <option>Latest</option>
                                        <option>Price: low to high</option>
                                        <option>Price: high to low</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            @foreach ($poultry as $item)
                            <div class="col-lg-4 col-md-6">
                                <div class="top-products-item">
                                    <div class="products-image">
                                        <a href="shop-details.html"><img src="assets/img/product/{{$item->thumbnail}}" alt="image"></a>

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
                                            <a href="shop-details.html">{{$item->name}}</a>
                                        </h3>
                                        <div class="price">
                                            <span class="new-price">${{number_format($item->price,2)}}</span>
                                            <span class="old-price">${{number_format($item->price * 1.1,2)}}</span>
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
                            @endforeach

                            <div class="col-lg-12 col-md-12">
                                <div class="pagination-area">
                                    <a href="#" class="prev page-numbers">
                                        <i class="flaticon-left-arrow"></i>
                                    </a>
                                    <span class="page-numbers current" aria-current="page">1</span>
                                    <a href="#" class="page-numbers">2</a>
                                    <a href="#" class="page-numbers">3</a>
                                    <a href="#" class="page-numbers">4</a>
                                    <a href="#" class="next page-numbers">
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
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
        <!-- End Top Products Area -->
    </section>
@endsection
@section('script-tag')
    <script></script>
@endsection
