@extends('..\layouts\layout')
@section('content')
<!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Shop</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Shop</li>
            </ul>
        </div>
    </div><!--==============================
Product Area
==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-xl-9 col-lg-8">
                    <div class="th-sort-bar">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md">
                                <p class="woocommerce-result-count">Showing 1–12 of 16 results</p>
                            </div>

                            <div class="col-md-auto">
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby" aria-label="Shop order">
                                        <option value="menu_order" selected="selected">Default Sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-40">

                        <div class="col-xl-4 col-sm-6">
                            <div class="th-product">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_1.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">Engine Plug</a></h3>
                                    <span class="price">$180.85<del>$350.99</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="th-product">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_2.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">Air Filter</a></h3>
                                    <span class="price">$190.85</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="th-product">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_3.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">CSK Red Wheel</a></h3>
                                    <span class="price">$160.85</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="th-product">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_4.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">Cools Led Light</a></h3>
                                    <span class="price">$170.85</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="th-product">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_5.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">Allion Brake Pad</a></h3>
                                    <span class="price">$120.85</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="th-product">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_6.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">USB Ports</a></h3>
                                    <span class="price">$100.85</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="th-product">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_7.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">Engine Solt</a></h3>
                                    <span class="price">$120.85</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="th-product">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_8.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">Oil Filter</a></h3>
                                    <span class="price">$100.85</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="th-product">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_9.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">BMW Brake Liver</a></h3>
                                    <span class="price">$120.85</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="th-pagination text-center pt-50">
                        <ul>
                            <li><a href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <aside class="sidebar-area sidebar-shop">
                        <div class="widget widget_search   ">
                            <form class="search-form">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="blog.html">Business Taxi</a> <span>(8)</span></li>

                                <li><a href="blog.html">Corporate Events</a> <span>(6)</span></li>

                                <li><a href="blog.html">Custom Booking</a> <span>(5)</span></li>

                                <li><a href="blog.html">Traveling</a> <span>(2)</span></li>

                                <li><a href="blog.html">Cab Booking Trips</a> <span>(7)</span></li>

                                <li><a href="blog.html">Hybrid Taxi</a> <span>(9)</span></li>
                            </ul>
                        </div>
                        <div class="widget widget_price_filter  ">
                            <h4 class="widget_title">Filter By Price</h4>
                            <div class="price_slider_wrapper">
                                <div class="price_label">
                                    Price: <span class="from">$0</span> — <span class="to">$70</span>
                                </div>
                                <div class="price_slider"></div>
                                <button type="submit" class="button">Filter</button>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud   ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">Technology</a>
                                <a href="blog.html">Advice</a>
                                <a href="blog.html">Solution</a>
                                <a href="blog.html">Consultion</a>
                                <a href="blog.html">Business</a>
                                <a href="blog.html">IT-Services</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>

        </div>
    </section>
    @endsection