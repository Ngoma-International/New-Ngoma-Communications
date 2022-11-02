@extends('frontend.layouts.base')

@section('title')
    Ngoma communication
@endsection

@section('content')
    <section id="about" class="ls ms background_cover section_padding_top_130 section_padding_bottom_130">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-7 col-lg-6 text-center text-sm-left"> <span class="above_heading highlight">welcome to our company</span>
                    <h2 class="section_header">About Us</h2>
                    <p class="section_excerpt grey">To meet <span class="highlight2">today's challenges</span>, we've created a unique, more personal approach to Financial Services solutions.</p>
                    <p class="fontsize_18">With a community of over 400 million users (and a majority age group being 18 to 29), wouldn’t you want to make sure you’re monitoring what people are posting on social networks? Especially if the demographic of your audience falls in that age
                        range.</p>
                    <p class="fontsize_18">Etiam ante elit, suscipit ut enim id, vehicula vehicula odio. Suspendisse egestas accumsan leo. Vivamus facilisis, velit sit amet lobortis congue, dui dolor maximus enim, et placerat risus turpis id neque. Proin eget diam leo. Sed a felis sit amet
                        neque ornare sollicitudin. </p>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="ds section_padding_top_90 section_padding_bottom_90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">Our Team</h2>
                    <p class="grey">Our team is our proud. Each of the team members is dedicated to delivering the best results to the clients. Meet some of our expert who will work on your case:</p>
                </div>
            </div>
        </div>
    </section>
    <section class="ls section_padding_bottom_130 fluid_padding_0 columns_padding_0 columns_margin_0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="owl-carousel owl-center-scale" data-dots="true" data-nav="false" data-loop="true" data-center="true" data-margin="0" data-responsive-xlg="5" data-responsive-lg="4" data-responisve-md="3" data-responisve-sm="3" data-responsive-xs="2">
                        <article class="vertical-item">
                            <div class="item-media"> <img src="images/team/team-01.jpg" alt=""> <a href="team-single.html" class="abs-link"></a> </div>
                            <div class="item-content">
                                <header class="entry-header"> <span class="small-text highlight">ceo / founder</span>
                                    <h3 class="entry-title"> <a href="team-single.html">Gareth Brown</a> </h3>
                                </header>
                            </div>
                        </article>
                        <article class="vertical-item">
                            <div class="item-media"> <img src="images/team/team-02.jpg" alt=""> <a href="team-single.html" class="abs-link"></a> </div>
                            <div class="item-content">
                                <header class="entry-header"> <span class="small-text highlight">Financial expert</span>
                                    <h3 class="entry-title"> <a href="team-single.html">Wanda Cook</a> </h3>
                                </header>
                            </div>
                        </article>
                        <article class="vertical-item">
                            <div class="item-media"> <img src="images/team/team-03.jpg" alt=""> <a href="team-single.html" class="abs-link"></a> </div>
                            <div class="item-content">
                                <header class="entry-header"> <span class="small-text highlight">Compiance specialist</span>
                                    <h3 class="entry-title"> <a href="team-single.html">Ethane Robinson</a> </h3>
                                </header>
                            </div>
                        </article>
                        <article class="vertical-item">
                            <div class="item-media"> <img src="images/team/team-04.jpg" alt=""> <a href="team-single.html" class="abs-link"></a> </div>
                            <div class="item-content">
                                <header class="entry-header"> <span class="small-text highlight">Risk managment</span>
                                    <h3 class="entry-title"> <a href="team-single.html">Edison Chesterton</a> </h3>
                                </header>
                            </div>
                        </article>
                        <article class="vertical-item">
                            <div class="item-media"> <img src="images/team/team-05.jpg" alt=""> <a href="team-single.html" class="abs-link"></a> </div>
                            <div class="item-content">
                                <header class="entry-header"> <span class="small-text highlight">Human resourses</span>
                                    <h3 class="entry-title"> <a href="team-single.html">Lyle Foster</a> </h3>
                                </header>
                            </div>
                        </article>
                        <article class="vertical-item">
                            <div class="item-media"> <img src="images/team/team-06.jpg" alt=""> <a href="team-single.html" class="abs-link"></a> </div>
                            <div class="item-content">
                                <header class="entry-header"> <span class="small-text highlight">Project manager</span>
                                    <h3 class="entry-title"> <a href="team-single.html">Colin Dean</a> </h3>
                                </header>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="ls ms background_cover section_padding_top_130 section_padding_bottom_125">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-6 text-center text-md-left">
                    <h2 class="section_header">What Clients Say</h2>
                    <hr class="divider_60_2">
                    <div class="owl-carousel testimonials-owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-dots="true" data-nav="false">
                        <div>
                            <div class="star-rating" title="Rated 4.00 out of 5"> <span style="width:80%">
								<strong class="rating">4.00</strong> out of 5
							</span> </div>
                            <blockquote>
                                <p>"I had an overall amazing experience at RCA's Lighthouse location. The building and physical amenities were well beyond.</p>
                                <footer class="media inline-block">
                                    <div class="media-left media-middle"> <img src="images/faces/01.jpg" alt=""> </div>
                                    <div class="media-body media-middle"> <cite>
                                            Anna Of Sewell, NJ
                                            <span class="highlight">client</span>
                                        </cite> </div>
                                </footer>
                            </blockquote>
                        </div>
                        <div>
                            <div class="star-rating" title="Rated 9.00 out of 5"> <span style="width:100%">
								<strong class="rating">5.00</strong> out of 5
							</span> </div>
                            <blockquote>
                                <p>Maecenas sit amet lorem tristique, rutrum nibh at, venenatis elit. Orci varius natoque penatibus et magnis dis parturient montes.</p>
                                <footer class="media inline-block">
                                    <div class="media-left media-middle"> <img src="images/faces/02.jpg" alt=""> </div>
                                    <div class="media-body media-middle"> <cite>
                                            Jerry Mayville, NJ
                                            <span class="highlight">client</span>
                                        </cite> </div>
                                </footer>
                            </blockquote>
                        </div>
                        <div>
                            <div class="star-rating" title="Rated 4.50 out of 5"> <span style="width:90%">
								<strong class="rating">4.50</strong> out of 5
							</span> </div>
                            <blockquote>
                                <p>Sed hendrerit erat massa, ac laoreet felis posuere non. Nunc laoreet, augue sed pharetra rutrum, justo ipsum porttitor velit, quis mattis dolor quam vitae nulla.</p>
                                <footer class="media inline-block">
                                    <div class="media-left media-middle"> <img src="images/faces/03.jpg" alt=""> </div>
                                    <div class="media-body media-middle"> <cite>
                                            Julia Baudoin, NJ
                                            <span class="highlight">client</span>
                                        </cite> </div>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="footer-subscribe" class="ds section_padding_top_90 section_padding_bottom_90">
        <div class="container">
            <div class="row flex-wrap v-center">
                <div class="col-xs-12 col-md-6 text-center text-md-left">
                    <h2 class="section_header">Stay In Touch</h2>
                </div>
                <div class="col-xs-12 col-md-6 text-center">
                    <div class="widget widget_mailchimp">
                        <form class="signup" action="http://webdesign-finder.com/html/eximgroup/" method="get">
                            <div class="form-group"> <input class="mailchimp_email form-control" name="email" type="email" placeholder="Email Address"> <button type="submit" class="theme_button">Subscribe</button> </div>
                            <div class="response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
