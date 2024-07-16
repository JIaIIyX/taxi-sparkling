@extends('..\layouts\layout')
@section('content')
<!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Shop Details</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Shop Details</li>
            </ul>
        </div>
    </div><!--==============================
    Product Details
    ==============================-->
    <section class="th-product-wrapper product-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img"><img src="assets/img/product/product_details_1_1.jpg" alt="Product Image"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">
                        <p class="price">$180.85<del>$350.99</del></p>
                        <h2 class="product-title">Aero Rear Diffuser</h2>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                            <a href="shop-details.html" class="woocommerce-review-link">(<span class="count">3</span> customer reviews)</a>
                        </div>
                        <p class="text">Syndicate customized growth strategies prospective human capital leverage other's optimal e-markets without transparent catalysts for change. Credibly coordinate highly efficient methods of empowerment cross unit solutions.</p>
                        <div class="checklist style3">
                            <ul>
                                <li>Lifetime structural, one year face finish warranty</li>
                                <li>Mapped from “Center Caps” under ” tment” tab</li>
                                <li>Fully copatible with OEM equimpent</li>
                            </ul>
                        </div>
                        <div class="actions">
                            <div class="quantity">
                                <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="1" title="Qty">
                                <button class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button>
                                <button class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button>
                            </div>
                            <button class="th-btn">Add to Cart</button>
                        </div>
                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">wheel-fits-chevy-camaro</span></span>
                            <span class="posted_in">Category: <a href="shop.html" rel="tag">Tires & Wheels</a></span>
                            <span>Tags: <a href="shop.html">automotive parts</a><a href="shop.html">wheels</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">description</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn active" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="true">reviews</a>
                </li>
            </ul>
            <div class="tab-content" id="productTabContent">
                <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <p>Conveniently build adaptive users with front-end human capital. Appropriately unleash team building technology for goal-oriented paradigms. Dynamically generate interoperable e-business vis-a-visgoal-oriented value. Completely pursue fully tested content whereas multifunctional core competencies. Progressively scale team driven process improvements before premier functionalities. Holisticly cultivate intermandated methodologies rather than virtual technology. Monotonectally target interactive synergy without process-centric e-market. Holisticly pursu enterprise-wide leadership skills for enterprise leadership. Collaboratively underwhelm standardized expertise after effective bandwidth. Conveniently productivate holistic collaboration and idea-sharing rather than granular strategic theme areas. </p>
                    <p>Enthusiastically aggregate ethical systems for standardized mindshare. Energistically target resource maximizing leadership skills without backward-compatible action items. Credibly impact alternative expertise vis-a-vis economically sound results. Dynamically synergize empowered benefits through functional partnerships. Authoritatively empower prospective infomediaries for interactive content. Synergistically embrace 2.0 paradigms through professional intellectual capital. Interactively strategize parallel growth strategies without out-of-the-box web services. Assertively reinvent installed base.</p>
                </div>
                <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <div class="woocommerce-Reviews">
                        <div class="th-comments-wrap  ">
                            <ul class="comment-list">
                                <li class="review th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <h4 class="name">Mark Jack</h4>
                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i>22 March, 2024</span>
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod magna aliqua.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="review th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/comment-author-2.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <h4 class="name">Alexa Deo</h4>
                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i>26 March, 2024</span>
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <p class="text">Completely build enabled web-readiness and distributed customer service. Proactively customize.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="review th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <h4 class="name">Tara sing</h4>
                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i>26 March, 2024</span>
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <p class="text">The passage experienced a surge in popularity during the 1960s when dry-transfer sheets.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="review th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/comment-author-4.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <h4 class="name">Tara sing</h4>
                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i>26 March, 2024</span>
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <p class="text">Completely build enabled web-readiness and distributed customer service. Proactively customize.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- Comment Form -->
                        <div class="th-comment-form  ">
                            <div class="form-title">
                                <h3 class="blog-inner-title ">Add a review</h3>
                            </div>
                            <div class="row">
                                <div class="form-group rating-select d-flex align-items-center">
                                    <label>Your Rating</label>
                                    <p class="stars">
                                        <span>
                                            <a class="star-1" href="#">1</a>
                                            <a class="star-2" href="#">2</a>
                                            <a class="star-3" href="#">3</a>
                                            <a class="star-4" href="#">4</a>
                                            <a class="star-5" href="#">5</a>
                                        </span>
                                    </p>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea placeholder="Write a Message" class="form-control"></textarea>
                                    <i class="text-title far fa-pencil-alt"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Your Name" class="form-control">
                                    <i class="text-title far fa-user"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Your Email" class="form-control">
                                    <i class="text-title far fa-envelope"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <input id="reviewcheck" name="reviewcheck" type="checkbox">
                                    <label for="reviewcheck">Save my name, email, and website in this browser for the next time I comment.<span class="checkmark"></span></label>
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button class="th-btn">Post Review</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--==============================
		Related Product  
		==============================-->
            <div class="space-extra-top mb-30">
                <div class="title-area text-center">
                    <h2 class="sec-title">Related Products</h2>
                </div>
                <div class="row th-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">

                    <div class="col-xl-3 col-lg-4 col-sm-6">
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

                    <div class="col-xl-3 col-lg-4 col-sm-6">
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

                    <div class="col-xl-3 col-lg-4 col-sm-6">
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

                    <div class="col-xl-3 col-lg-4 col-sm-6">
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

                    <div class="col-xl-3 col-lg-4 col-sm-6">
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

                    <div class="col-xl-3 col-lg-4 col-sm-6">
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

                    <div class="col-xl-3 col-lg-4 col-sm-6">
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

                    <div class="col-xl-3 col-lg-4 col-sm-6">
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

                    <div class="col-xl-3 col-lg-4 col-sm-6">
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
            </div>
        </div>
    </section>
    @endsection