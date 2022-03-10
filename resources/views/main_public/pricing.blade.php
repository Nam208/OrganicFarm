@extends('layouts.master')
@section('title','Pricing')
@section('content')
    <section class="pricing-container">
        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Pricing</h2>
                            <ul>
                                <li>
                                    <a href="{{ route('home-page') }}">Home</a>
                                </li>
                                <li>Pricing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Pricing Area -->
        <section class="pricing-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Pricing Plan</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-pricing-box">
                            <div class="pricing-header">
                                <h3>Basic Plan</h3>
                            </div>

                            <div class="price">
                                $60 <span>Weekly</span>
                            </div>

                            <ul class="pricing-features">
                                <li>
                                    <i class='bx bx-check'></i>
                                    Cherry Tomatoes
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Imported Snap Peas
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Cucumbers
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    White Potatoes
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Organic Vegetables
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Unlimited Creative Ideas
                                </li>
                            </ul>

                            <div class="pricing-btn">
                                <a href="#" class="default-btn">
                                    Purchase Plan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-pricing-box">
                            <div class="pricing-header">
                                <h3>Standard Plan</h3>
                            </div>

                            <div class="price">
                                $149 <span>Monthly</span>
                            </div>

                            <ul class="pricing-features">
                                <li>
                                    <i class='bx bx-check'></i>
                                    Cherry Tomatoes
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Imported Snap Peas
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Cucumbers
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    White Potatoes
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Organic Vegetables
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Unlimited Creative Ideas
                                </li>
                            </ul>

                            <div class="pricing-btn">
                                <a href="#" class="default-btn">
                                    Purchase Plan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-pricing-box">
                            <div class="pricing-header">
                                <h3>Premium Plan</h3>
                            </div>

                            <div class="price">
                                $179 <span>Yearly</span>
                            </div>

                            <ul class="pricing-features">
                                <li>
                                    <i class='bx bx-check'></i>
                                    Cherry Tomatoes
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Imported Snap Peas
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Cucumbers
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    White Potatoes
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Organic Vegetables
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Unlimited Creative Ideas
                                </li>
                            </ul>

                            <div class="pricing-btn">
                                <a href="#" class="default-btn">
                                    Purchase Plan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing Area -->
    </section>
@endsection
@section('script-tag')
    <script></script>
@endsection
