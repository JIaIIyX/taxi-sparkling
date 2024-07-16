@extends('..\layouts\layout')
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Blog Right Sidebar</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Blog Right Sidebar</li>
            </ul>
        </div>
    </div><!--==============================
Blog Area
==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-1.jpg" alt="Blog Image"></a>
                        </div>

                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>By Alex Michel</a>
                                <a href="blog.html"><i class="fa-solid fa-calendar-days"></i>10 July,
                                    2024</a>
                                <a href="blog-details.html"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Maintaining Health and Beauty Through
                                    Spas</a>
                            </h2>
                            <p class="blog-text">Uniquely iterate e-business catalysts for change without cross functional
                                supply chains. Completely harness extensible infrastructures via future-proof infomediaries.
                                Rapaciously grow competitive collaboration and idea-sharing without intuitive.</p>
                            <a href="blog-details.html" class="th-btn">READ MORE<i class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img th-carousel">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-2.jpg" alt="Blog Image"></a>
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-3.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>By-Admin, 2024</a>
                                <a href="blog.html"><i class="fa-solid fa-calendar-days"></i>02 March</a>
                                <a href="blog-details.html"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Do Massages Have Real Health Benefits?</a>
                            </h2>
                            <p class="blog-text">Uniquely iterate e-business catalysts for change without cross functional supply chains. Completely harness extensible infrastructures via future-proof infomediaries. Rapaciously grow competitive collaboration and idea-sharing without intuitive. </p>
                            <a href="blog-details.html" class="th-btn">READ MORE<i class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-3.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>By-Admin, 2024</a>
                                <a href="blog.html"><i class="fa-solid fa-calendar-days"></i>02 March</a>
                                <a href="blog-details.html"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Ultra Glam Gold Nail Polishes for Holiday.</a>
                            </h2>
                            <p class="blog-text">Uniquely iterate e-business catalysts for change without cross functional supply chains. Completely harness extensible infrastructures via future-proof infomediaries. Rapaciously grow competitive collaboration and idea-sharing without intuitive..</p>
                            <a href="blog-details.html" class="th-btn">READ MORE<i class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-4.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>By-Admin, 2024</a>
                                <a href="blog.html"><i class="fa-solid fa-calendar-days"></i>02 March</a>
                                <a href="blog-details.html"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">A Relaxation of the Senses with Their Help</a>
                            </h2>
                            <p class="blog-text">Uniquely iterate e-business catalysts for change without cross functional supply chains. Completely harness extensible infrastructures via future-proof infomediaries. Rapaciously grow competitive collaboration and idea-sharing without intuitive..</p>
                            <a href="blog-details.html" class="th-btn">READ MORE<i class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>




                    <div class="th-pagination  ">
                        <ul>
                            <li><a href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
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
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-calendar-days"></i>22th May, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Lighting The Way With Guest Daniel Stern</a></h4>

                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-4.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-calendar-days"></i>25th May, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Why Auto Driving Will Help You To Pass</a></h4>

                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-5.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-calendar-days"></i>27th May, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">How to Overcome Your Fear of Driving</a></h4>

                                    </div>
                                </div>
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