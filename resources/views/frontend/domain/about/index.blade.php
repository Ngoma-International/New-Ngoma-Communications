@extends('frontend.layouts.base')

@section('title')
    Ngoma communication
@endsection

@section('content')
    <section id="about" class="ls ms background_cover section_padding_top_130 section_padding_bottom_130">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-7 col-lg-6 text-center text-sm-left">
                    <h2 class="section_header">About Us</h2>
                    <p class="section_excerpt grey">To meet
                        <span class="highlight2">today's challenges</span>,
                        we've created a unique, more personal approach to Financial Services solutions.
                    </p>
                    <p class="fontsize_18">
                        With a community of over 400 million users (and a majority age group being 18 to 29),
                        wouldn’t you want to make sure you’re monitoring what people are posting on social networks? Especially
                        if the demographic of your audience falls in that age range.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="ds section_padding_top_90 section_padding_bottom_90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">Our Team</h2>
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
                            <div class="item-media">
                                <img src="" alt="">
                                <a href="" class="abs-link"></a>
                            </div>
                            <div class="item-content">
                                <header class="entry-header">
                                    <span class="small-text highlight">ceo / founder</span>
                                    <h3 class="entry-title">
                                        <a href="">Gareth Brown</a>
                                    </h3>
                                </header>
                            </div>
                        </article>
                        <article class="vertical-item">
                            <div class="item-media">
                                <img src="" alt="">
                                <a href="" class="abs-link"></a>
                            </div>
                            <div class="item-content">
                                <header class="entry-header">
                                    <span class="small-text highlight">Financial expert</span>
                                    <h3 class="entry-title">
                                        <a href="">Wanda Cook</a>
                                    </h3>
                                </header>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
