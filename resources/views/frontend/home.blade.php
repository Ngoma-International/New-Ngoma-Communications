@extends('frontend.layouts.base')

@section('title')
    Ngoma communication
@endsection

@section('content')
    <div class="card-inner card-started active" id="home-card">
        <div class="row card-container">
            <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
                <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url({{ asset('assets/images/profile.jpg') }});"></div>
                <div class="content inner-top">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title-bg">About Me</div>
                            <div class="text">
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content services">
                    <div class="row service-items">
                        <div class="col col-m-12 col-t-4 col-d-4 col-d-lg-4">
                            <div class="service-item card-box">
                                <div class="name">Web Development</div>>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-4 col-d-4 col-d-lg-4">
                            <div class="service-item card-box">
                                <div class="name">Music Writing</div>
                            </div>
                        </div>

                        <div class="col col-m-12 col-t-4 col-d-4 col-d-lg-4">
                            <div class="service-item card-box">
                                <div class="name">Advetising</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-wrap blogs-content col col-m-12 col-t-12 col-d-9 col-d-lg-9">

                    <!--
                        Inner Top
                    -->
                    <div class="content inner-top">
                        <div class="row">
                            <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                <div class="title-bg">My Blog</div>
                            </div>
                        </div>
                    </div>

                    <!--
                        Blog
                    -->
                    <div class="content blog">
                        <div class="row">
                            <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                                <!-- title -->
                                <div class="title"><span>My</span> Blog</div>

                            </div>
                        </div>

                        <!-- blog items -->
                        <div class="row">

                            <!-- blog item -->
                            <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
                                <div class="box-item card-box">
                                    <div class="image">
                                        <a href="blog-post.html">
                                            <img src="images/blog/blog1.jpg" alt="" />
                                            <span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
                                            <span class="date"><strong>20</strong>Jun</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="blog-post.html" class="name">By spite about do of do allow blush</a>
                                        <div class="category">Design</div>
                                    </div>
                                </div>
                            </div>

                            <!-- blog item -->
                            <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
                                <div class="box-item card-box">
                                    <div class="image">
                                        <a href="blog-post.html">
                                            <img src="images/blog/blog2.jpg" alt="" />
                                            <span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
                                            <span class="date"><strong>19</strong>Jun</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="blog-post.html" class="name">Two Before Arrow Not Relied</a>
                                        <div class="category">Coding</div>
                                    </div>
                                </div>
                            </div>

                            <!-- blog item -->
                            <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
                                <div class="box-item card-box">
                                    <div class="image">
                                        <a href="blog-post.html">
                                            <img src="images/blog/blog3.jpg" alt="" />
                                            <span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
                                            <span class="date"><strong>20</strong>Jun</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="blog-post.html" class="name">By spite about do of do allow blush</a>
                                        <div class="category">Travel</div>
                                    </div>
                                </div>
                            </div>

                            <!-- blog item -->
                            <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
                                <div class="box-item card-box">
                                    <div class="image">
                                        <a href="blog-post.html">
                                            <img src="images/blog/blog2.jpg" alt="" />
                                            <span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
                                            <span class="date"><strong>19</strong>Jun</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="blog-post.html" class="name">Two Before Arrow Not Relied</a>
                                        <div class="category">Coding</div>
                                    </div>
                                </div>
                            </div>

                            <!-- blog item -->
                            <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
                                <div class="box-item card-box">
                                    <div class="image">
                                        <a href="blog-post.html">
                                            <img src="images/blog/blog1.jpg" alt="" />
                                            <span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
                                            <span class="date"><strong>20</strong>Jun</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="blog-post.html" class="name">By spite about do of do allow blush</a>
                                        <div class="category">Design</div>
                                    </div>
                                </div>
                            </div>

                            <!-- blog item -->
                            <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
                                <div class="box-item card-box">
                                    <div class="image">
                                        <a href="blog-post.html">
                                            <img src="images/blog/blog2.jpg" alt="" />
                                            <span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
                                            <span class="date"><strong>19</strong>Jun</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="blog-post.html" class="name">Two Before Arrow Not Relied</a>
                                        <div class="category">Coding</div>
                                    </div>
                                </div>
                            </div>

                            <!-- blog item -->
                            <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
                                <div class="box-item card-box">
                                    <div class="image">
                                        <a href="blog-post.html">
                                            <img src="images/blog/blog3.jpg" alt="" />
                                            <span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
                                            <span class="date"><strong>20</strong>Jun</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="blog-post.html" class="name">By spite about do of do allow blush</a>
                                        <div class="category">Travel</div>
                                    </div>
                                </div>
                            </div>

                            <!-- blog item -->
                            <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
                                <div class="box-item card-box">
                                    <div class="image">
                                        <a href="blog-post.html">
                                            <img src="images/blog/blog2.jpg" alt="" />
                                            <span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
                                            <span class="date"><strong>19</strong>Jun</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="blog-post.html" class="name">Two Before Arrow Not Relied</a>
                                        <div class="category">Coding</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="pager">
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="next page-numbers" href="#">Next</a>
                        </div>

                    </div>

                </div>

                <div class="card-wrap blogs-sidebar col col-m-12 col-t-12 col-d-3 col-d-lg-3">
                    <aside id="secondary" class="widget-area">
                        <div class="widget widget_search">
                            <form role="search" method="get" class="search-form">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search …" value="">
                                </label>
                                <input type="submit" class="search-submit" value="Search">
                            </form>
                        </div>
                        <div class="widget widget_recent_entries">
                            <h2 class="widget-title">Recent Posts</h2>
                            <ul>
                                <li>
                                    <a href="#">By spite about do of do allow</a>
                                </li>
                                <li>
                                    <a href="#">Creativity Is More Than A Song And Dance Act</a>
                                </li>
                                <li>
                                    <a href="#">Creativity Is More Than A Song And Dance Act</a>
                                </li>
                                <li>
                                    <a href="#">Music Player Design</a>
                                </li>
                                <li>
                                    <a href="#">Two Before Arrow Not Relied</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_recent_comments">
                            <h2 class="widget-title">Recent Comments</h2>
                            <ul id="recentcomments">
                                <li class="recentcomments">
                                    <span class="comment-author-link">Adam Doe</span> on
                                    <a href="#">Creativity Is More Than A Song And Dance Act</a>
                                </li>
                                <li class="recentcomments">
                                    <span class="comment-author-link">JOHN Smith</span> on
                                    <a href="#">By spite about do of do allow</a>
                                </li>
                                <li class="recentcomments">
                                    <span class="comment-author-link">Adam Smith</span> on
                                    <a href="#">Creativity Is More Than A Song And Dance Act</a>
                                </li>
                                <li class="recentcomments">
                                    <span class="comment-author-link">JESSE DOE</span> on
                                    <a href="#">Music Player Design</a>
                                </li>
                                <li class="recentcomments">
                                    <span class="comment-author-link">JESSE PITMAN</span> on
                                    <a href="#">Music Player Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_archive">
                            <h2 class="widget-title">Archives</h2>
                            <ul>
                                <li><a href="#">August 2018</a></li>
                            </ul>
                        </div>
                        <div class="widget widget_categories">
                            <h2 class="widget-title"><span class="widget-title-span">Categories</span></h2>
                            <ul>
                                <li class="cat-item cat-item-2"><a href="#">Design</a></li>
                                <li class="cat-item cat-item-3"><a href="#">Music</a></li>
                            </ul>
                        </div>
                        <div class="widget widget_meta">
                            <h2 class="widget-title">Meta</h2>
                            <ul>
                                <li><a href="#">Log in</a></li>
                                <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                <li><a href="#">WordPress.org</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>

        </div>
    </div>

    <div class="card-inner" id="about-card">
        <div class="row card-container">
            <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
                <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(images/profile.jpg);"></div>
                <div class="content inner-top">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title-bg">About Me</div>
                            <div class="text">
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content services">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title"><span>Our</span> Services</div>
                        </div>
                    </div>
                    <div class="row service-items">
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="service-item card-box">
                                <div class="icon"><i class="la la-html5"></i></div>
                                <div class="name">Web Development</div>
                                <p>
                                    Modern and mobile-ready website that will help of your marketing.
                                </p>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="service-item card-box">
                                <div class="icon"><i class="la la-music"></i></div>
                                <div class="name">Music Writing</div>
                                <p>
                                    Music copying, transcription, arranging and composition Services.
                                </p>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="service-item card-box">
                                <div class="icon"><i class="la la-bullhorn"></i></div>
                                <div class="name">Advetising</div>
                                <p>
                                    Advertising services include television, radio, print, mail and web.
                                </p>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="service-item card-box">
                                <div class="icon"><i class="la la-gamepad"></i></div>
                                <div class="name">Game Development</div>
                                <p>
                                    Developing memorable and unique mobile android, ios games.
                                </p>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="service-item card-box">
                                <div class="icon"><i class="la la-area-chart"></i></div>
                                <div class="name">Analytics</div>
                                <p>
                                    Basic, advanced, custom implementations and online media analysis.
                                </p>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="service-item card-box">
                                <div class="icon"><i class="la la-camera-retro"></i></div>
                                <div class="name">Hosting</div>
                                <p>
                                    Full-day or half-day photo shoots with all necessary equipment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content pricing">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title"><span>Pricing</span> Tables</div>
                        </div>
                    </div>

                    <div class="row pricing-items">
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="pricing-item card-box">
                                <div class="icon"><i class="la la-tachometer"></i></div>
                                <div class="name">Basic</div>
                                <div class="amount">
                                    <span class="dollar">$</span>
                                    <span class="number">22</span>
                                    <span class="period">hour</span>
                                </div>
                                <div class="feature-list">
                                    <ul>
                                        <li>Web Development</li>
                                        <li>Advetising</li>
                                        <li>Game Development</li>
                                        <li class="disable">Music Writing</li>
                                        <li class="disable">Photography <strong>new</strong></li>
                                    </ul>
                                </div>
                                <div class="lnks">
                                    <a href="#" class="lnk">Buy <span>Basic</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="pricing-item card-box">
                                <div class="icon"><i class="la la-rocket"></i></div>
                                <div class="name">Pro</div>
                                <div class="amount">
                                    <span class="dollar">$</span>
                                    <span class="number">48</span>
                                    <span class="period">hour</span>
                                </div>
                                <div class="feature-list">
                                    <ul>
                                        <li>Web Development</li>
                                        <li>Advetising</li>
                                        <li>Game Development</li>
                                        <li>Music Writing</li>
                                        <li>Photography <strong>new</strong></li>
                                    </ul>
                                </div>
                                <div class="lnks">
                                    <a href="#" class="lnk">Buy <span>Pro</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content fuct">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title"><span>Fun</span> Facts</div>
                        </div>
                    </div>
                    <div class="row fuct-items">
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="fuct-item card-box">
                                <div class="icon"><i class="la la-headphones"></i></div>
                                <div class="name">47 Albumes Listened</div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="fuct-item card-box">
                                <div class="icon"><i class="la la-trophy"></i></div>
                                <div class="name">15 Awards Won</div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="fuct-item card-box">
                                <div class="icon"><i class="la la-lightbulb-o"></i></div>
                                <div class="name">54 Projects Completed</div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="fuct-item card-box">
                                <div class="icon"><i class="la la-flag-o"></i></div>
                                <div class="name">10 Countries Visited</div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="fuct-item card-box">
                                <div class="icon"><i class="la la-book"></i></div>
                                <div class="name">50+ Books Readed</div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="fuct-item card-box">
                                <div class="icon"><i class="la la-code"></i></div>
                                <div class="name">100 000 Lines of Code</div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="fuct-item card-box">
                                <div class="icon"><i class="la la-smile-o"></i></div>
                                <div class="name">49 Satisfied Customers</div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="fuct-item card-box">
                                <div class="icon"><i class="la la-bicycle"></i></div>
                                <div class="name">1250 km Cycled</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content clients">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title"><span>Our</span> Clients</div>
                        </div>
                    </div>
                    <div class="row client-items">
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="client-item card-box">
                                <div class="image">
                                    <a target="_blank" href="https://www.google.com/">
                                        <img src="images/clients/client_1.png" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="client-item card-box">
                                <div class="image">
                                    <a target="_blank" href="https://www.google.com/">
                                        <img src="images/clients/client_3.png" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="client-item card-box">
                                <div class="image">
                                    <a target="_blank" href="https://www.google.com/">
                                        <img src="images/clients/client_4.png" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="client-item card-box">
                                <div class="image">
                                    <a target="_blank" href="https://www.google.com/">
                                        <img src="images/clients/client_1.png" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="client-item card-box">
                                <div class="image">
                                    <a target="_blank" href="https://www.google.com/">
                                        <img src="images/clients/client_3.png" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="client-item card-box">
                                <div class="image">
                                    <a target="_blank" href="https://www.google.com/">
                                        <img src="images/clients/client_4.png" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="client-item card-box">
                                <div class="image">
                                    <a target="_blank" href="https://www.google.com/">
                                        <img src="images/clients/client_1.png" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="client-item card-box">
                                <div class="image">
                                    <a target="_blank" href="https://www.google.com/">
                                        <img src="images/clients/client_3.png" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-inner" id="contacts-card">
        <div class="row card-container">
            <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
                <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6">
                    <div class="map" id="map"></div>
                </div>
                <div class="content inner-top">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title-bg">Contacts</div>
                        </div>
                    </div>
                </div>
                <div class="content contacts-info">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title"><span>Get</span> in Touch</div>
                        </div>
                    </div>
                    <div class="row contacts-items">
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="contacts-item card-box">
                                <div class="icon"><i class="la la-map-marker"></i></div>
                                <div class="name">Address</div>
                                <p>
                                    France, Paris.
                                </p>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="contacts-item card-box">
                                <div class="icon"><i class="la la-at"></i></div>
                                <div class="name">Email</div>
                                <p>
                                    adlard@example.com
                                </p>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="contacts-item card-box">
                                <div class="icon"><i class="la la-phone"></i></div>
                                <div class="name">Phone</div>
                                <p>
                                    +123 654 78900
                                </p>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="contacts-item card-box">
                                <div class="icon"><i class="la la-check-square"></i></div>
                                <div class="name">Freelance</div>
                                <p>
                                    Available
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content contacts-form">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title"><span>Contact</span> Form</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="contact_form card-box">
                                <form id="cform" method="post">
                                    <div class="row">
                                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                            <div class="group-val">
                                                <input type="text" name="name" placeholder="Full Name" />
                                            </div>
                                        </div>
                                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                            <div class="group-val">
                                                <input type="text" name="email" placeholder="Email Address" />
                                            </div>
                                        </div>
                                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                            <div class="group-val">
                                                <textarea name="message" placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="align-left">
                                        <a href="#" class="button" onclick="$('#cform').submit(); return false;">
                                            <span class="text">Send Message</span>
                                            <span class="icon"><i class="la la-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </form>
                                <div class="alert-success">
                                    <p>Thanks, your message is sent successfully.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
