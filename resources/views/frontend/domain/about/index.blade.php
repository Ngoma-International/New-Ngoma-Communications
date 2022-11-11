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
                    <p class="section_excerpt grey">Established in 2015, Ngoma Communications is purposed to help corporates,
                        <span class="highlight2">small and medium size organisations as well as individuals to develop themselves and to achieve their goals.</span>,
                        We provide learning programmes which include leadership and personal development skills. Ngoma Communications also offers executive coaching and keynote speaking.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_bottom_130 fluid_padding_0 columns_padding_0 columns_margin_0">
        <div class="container-fluid">
            <div class="row">
                @foreach($teams as $team)
                    <div class="col-xs-12 text-center">
                        <div class="owl-carousel owl-center-scale" data-dots="true" data-nav="false" data-loop="true" data-center="true" data-margin="0" data-responsive-xlg="5" data-responsive-lg="4" data-responisve-md="3" data-responisve-sm="3" data-responsive-xs="2">
                            <article class="vertical-item">
                                <div class="item-media">
                                    <img src="{{ asset('storage/'. $team->images) }}" alt="">
                                    <a href="" class="abs-link"></a>
                                </div>
                                <div class="item-content">
                                    <header class="entry-header">
                                        <span class="small-text highlight">{{ $team->profile }}</span>
                                        <h3 class="entry-title">
                                            <a href="">{{ $team->name }} - {{ $team->firstname }}</a>
                                        </h3>
                                    </header>
                                </div>
                            </article>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
