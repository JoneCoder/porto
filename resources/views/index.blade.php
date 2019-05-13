@extends('layouts.app')
@section('content')
    <main class="main">
        <div class="home-slider-container">
            <div class="home-slider owl-carousel owl-theme owl-theme-light">
                <div class="home-slide">
                    <div class="slide-bg owl-lazy"  data-src="{{ asset('frontendAsset/assets/images/slider/slide-1.jpg') }}"></div><!-- End .slide-bg -->
                    <div class="container">
                        <div class="home-slide-content">
                            <div class="slide-border-top">
                                <img src="{{ asset('frontendAsset/assets/images/slider/border-top.png') }}" alt="Border" width="290" height="38">
                            </div><!-- End .slide-border-top -->
                            <h3>80% off for select items</h3>
                            <h1>fashion mega sale</h1>
                            <a href="category.php" class="btn btn-primary">Shop Now</a>
                            <div class="slide-border-bottom">
                                <img src="{{ asset('frontendAsset/assets/images/slider/border-bottom.png') }}" alt="Border" width="290" height="111">
                            </div><!-- End .slide-border-bottom -->
                        </div><!-- End .home-slide-content -->
                    </div><!-- End .container -->
                </div><!-- End .home-slide -->

                <div class="home-slide">
                    <div class="slide-bg owl-lazy"  data-src="{{ asset('frontendAsset/assets/images/slider/slide-2.jpg') }}"></div><!-- End .slide-bg -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <div class="home-slide-content slide-content-big">
                                    <h3>up to 70% off</h3>
                                    <h1>Women's Hats</h1>
                                    <a href="category.php" class="btn btn-primary">Shop Now</a>
                                </div><!-- End .home-slide-content -->
                            </div><!-- End .col-lg-5 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .home-slide -->
            </div><!-- End .home-slider -->
        </div><!-- End .home-slider-container -->

        <div class="info-boxes-container">
            <div class="container">
                <div class="info-box">
                    <i class="icon-shipping"></i>

                    <div class="info-box-content">
                        <h4>FREE SHIPPING & RETURN</h4>
                        <p>Free shipping on all orders over $99.</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->

                <div class="info-box">
                    <i class="icon-us-dollar"></i>

                    <div class="info-box-content">
                        <h4>MONEY BACK GUARANTEE</h4>
                        <p>100% money back guarantee</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->

                <div class="info-box">
                    <i class="icon-support"></i>

                    <div class="info-box-content">
                        <h4>ONLINE SUPPORT 24/7</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->
            </div><!-- End .container -->
        </div><!-- End .info-boxes-container -->
        <div class="banners-group">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="{{ asset('frontendAsset/assets/images/banners/banner-1.jpg') }}" alt="banner">
                            </a>
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="{{ asset('frontendAsset/assets/images/banners/banner-2.jpg') }}" alt="banner">
                            </a>
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="{{ asset('frontendAsset/assets/images/banners/banner-3.jpg') }}" alt="banner">
                            </a>
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .banneers-group -->
        <div class="featured-products-section carousel-section">
            <div class="container">
                <h2 class="h3 title mb-4 text-center">Featured Products</h2>

                <div class="featured-products owl-carousel owl-theme">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.php" class="product-image">
                                <img src="{{ asset('frontendAsset/assets/images/products/product-10-white.jpg') }}" alt="product">
                            </a>
                            <a href="{{ asset('frontendAsset/ajax/product-quick-view.php') }}" class="btn-quickview">Quickview</a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Polo White</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$63.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>

                                <a href="product.php" class="paction add-cart" title="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>

                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.php" class="product-image">
                                <img src="{{ asset('frontendAsset/assets/images/products/product-3-white.jpg') }}" alt="product">
                            </a>
                            <a href="{{ asset('frontendAsset/ajax/product-quick-view.php') }}" class="btn-quickview">Quickview</a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Brown Slippers</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$12.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>

                                <a href="product.php" class="paction add-cart" title="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>

                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.php" class="product-image">
                                <img src="{{ asset('frontendAsset/assets/images/products/product-13-white.jpg') }}" alt="product">
                            </a>
                            <a href="{{ asset('frontendAsset/ajax/product-quick-view.php') }}" class="btn-quickview">Quickview</a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Men's Cap</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$18.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>

                                <a href="product.php" class="paction add-cart" title="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>

                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.php" class="product-image">
                                <img src="{{ asset('frontendAsset/assets/images/products/product-2-white.jpg') }}" alt="product">
                            </a>
                            <a href="{{ asset('frontendAsset/ajax/product-quick-view.php') }}" class="btn-quickview">Quickview</a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Zippered Jacket</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$39.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>

                                <a href="product.php" class="paction add-cart" title="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>

                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.php" class="product-image">
                                <img src="{{ asset('frontendAsset/assets/images/products/product-8-white.jpg') }}" alt="product">
                            </a>
                            <a href="{{ asset('frontendAsset/ajax/product-quick-view.php') }}" class="btn-quickview">Quickview</a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Leather Shoes Brown</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$58.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>

                                <a href="product.php" class="paction add-cart" title="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>

                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.php" class="product-image">
                                <img src="{{ asset('frontendAsset/assets/images/products/product-1-white.jpg') }}" alt="product">
                            </a>
                            <a href="{{ asset('frontendAsset/ajax/product-quick-view.php') }}" class="btn-quickview">Quickview</a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Felt Hat</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$39.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>

                                <a href="product.php" class="paction add-cart" title="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>

                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->
                </div><!-- End .featured-proucts -->
            </div><!-- End .container -->
        </div><!-- End .featured-proucts-section -->

        <div class="mb-5"></div><!-- margin -->
        <div class="carousel-section">
            <div class="container">
                <h2 class="h3 title mb-4 text-center">New Arrivals</h2>

                <div class="new-products owl-carousel owl-theme">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.php" class="product-image">
                                <img src="{{ asset('frontendAsset/assets/images/products/product-10.jpg') }}" alt="product">
                            </a>
                            <a href="{{ asset('frontendAsset/ajax/product-quick-view.php') }}" class="btn-quickview">Quickview</a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Polo White</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$63.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>

                                <a href="product.php" class="paction add-cart" title="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>

                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.php" class="product-image">
                                <img src="{{ asset('frontendAsset/assets/images/products/product-6.jpg') }}" alt="product">
                            </a>
                            <a href="{{ asset('frontendAsset/ajax/product-quick-view.php') }}" class="btn-quickview">Quickview</a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Cotton Sweatshirt</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$67.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>

                                <a href="product.php" class="paction add-cart" title="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>

                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.php" class="product-image">
                                <img src="{{ asset('frontendAsset/assets/images/products/product-3.jpg') }}" alt="product">
                            </a>
                            <a href="{{ asset('frontendAsset/ajax/product-quick-view.php') }}" class="btn-quickview">Quickview</a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Brown Slippers</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$12.90</span>
                            </div><!-- End .price-box -->

                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>

                                <a href="product.php" class="paction add-cart" title="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>

                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.php" class="product-image">
                                <img src="{{ asset('frontendAsset/assets/images/products/product-13.jpg') }}" alt="product">
                            </a>
                            <a href="{{ asset('frontendAsset/ajax/product-quick-view.php') }}" class="btn-quickview">Quickview</a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Men's Cap</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$18.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>

                                <a href="product.php" class="paction add-cart" title="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>

                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.php" class="product-image">
                                <img src="{{ asset('frontendAsset/assets/images/products/product-14.jpg') }}" alt="product">
                            </a>
                            <a href="{{ asset('frontendAsset/ajax/product-quick-view.php') }}" class="btn-quickview">Quickview</a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Timber Full Jacket</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$138.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>

                                <a href="product.php" class="paction add-cart" title="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>

                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.php" class="product-image">
                                <img src="{{ asset('frontendAsset/assets/images/products/product-2.jpg') }}" alt="product">
                            </a>
                            <a href="{{ asset('frontendAsset/ajax/product-quick-view.php') }}" class="btn-quickview">Quickview</a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Zippered Jacket</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$28.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-action">
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>

                                <a href="product.php" class="paction add-cart" title="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>

                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->
                </div><!-- End .news-products -->
            </div><!-- End .container -->
        </div><!-- End .carousel-section -->

        <div class="mb-5"></div><!-- margin -->
        <div class="info-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box feature-box-simple text-center">
                            <i class="icon-earphones-alt"></i>

                            <div class="feature-box-content">
                                <h3>Customer Support<span>Need Assistence?</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="feature-box feature-box-simple text-center">
                            <i class="icon-credit-card"></i>

                            <div class="feature-box-content">
                                <h3>secured payment <span>Safe & Fast</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum dolor sit amet.consectetur adipiscing elit. </p>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="feature-box feature-box-simple text-center">
                            <i class="icon-action-undo"></i>

                            <div class="feature-box-content">
                                <h3>Returns <span>Easy & Free</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus.</p>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .info-section -->
        <div class="promo-section" style="background-image: url({{ asset('frontendAsset/assets/images/promo-bg.jpg') }})">
            <div class="container">
                <h3>fashion show collection</h3>
                <a href="#" class="btn btn-dark">Shop Now</a>
            </div><!-- End .container -->
        </div><!-- End .promo-section -->
        <div class="partners-container">
            <div class="container">
                <div class="partners-carousel owl-carousel owl-theme">
                    <a href="#" class="partner">
                        <img src="{{ asset('frontendAsset/assets/images/logos/1.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('frontendAsset/assets/images/logos/2.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('frontendAsset/assets/images/logos/3.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('frontendAsset/assets/images/logos/4.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('frontendAsset/assets/images/logos/5.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('frontendAsset/assets/images/logos/2.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('frontendAsset/assets/images/logos/1.png') }}" alt="logo">
                    </a>
                </div><!-- End .partners-carousel -->
            </div><!-- End .container -->
        </div><!-- End .partners-container -->
        <div class="blog-section">
            <div class="container">
                <h2 class="h3 title text-center">From the Blog</h2>

                <div class="blog-carousel owl-carousel owl-theme">
                    <article class="entry">
                        <div class="entry-media">
                            <a href="single.php">
                                <img src="{{ asset('frontendAsset/assets/images/blog/home/post-1.png') }}" alt="Post">
                            </a>
                            <div class="entry-date">29<span>Now</span></div><!-- End .entry-date -->
                        </div><!-- End .entry-media -->

                        <div class="entry-body">
                            <h3 class="entry-title">
                                <a href="single.php">New Collection</a>
                            </h3>
                            <div class="entry-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>

                                <a href="single.php" class="btn btn-dark">Read More</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <div class="entry-media">
                            <a href="single.php">
                                <img src="{{ asset('frontendAsset/assets/images/blog/home/post-2.png') }}" alt="Post">
                            </a>
                            <div class="entry-date">30 <span>Now</span></div><!-- End .entry-date -->
                        </div><!-- End .entry-media -->

                        <div class="entry-body">
                            <h3 class="entry-title">
                                <a href="single.php">Fashion Trends</a>
                            </h3>
                            <div class="entry-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>

                                <a href="single.php" class="btn btn-dark">Read More</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <div class="entry-media">
                            <a href="single.php">
                                <img src="{{ asset('frontendAsset/assets/images/blog/home/post-3.png') }}" alt="Post">
                            </a>
                            <div class="entry-date">28 <span>Now</span></div><!-- End .entry-date -->
                        </div><!-- End .entry-media -->

                        <div class="entry-body">
                            <h3 class="entry-title">
                                <a href="single.php">Women Fashion</a>
                            </h3>
                            <div class="entry-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>

                                <a href="single.php" class="btn btn-dark">Read More</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .blog-carousel -->
            </div><!-- End .container -->
        </div><!-- End .blog-section -->
    </main><!-- End .main -->
@endsection
