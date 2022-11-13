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
                    <p style="color: black; font-size: 19px;line-height: 1.4; text-align: justify; font-weight:lighter;margin-bottom: 4%;font-family: 'Roboto Black', sans-serif;">
                        We maintain a pool of highly qualified facilitators, coaches, and keynotes speakers who are all business
                        people with executive-level backgrounds working for international corporations.
                        Grounded in ongoing research and 15 years of experience developing successful business leaders,
                        our work address the three aspects of leadership: Leading Youself; Leading People; Leading Organisations.
                    </p>
                    <p style="color: black; font-size: 19px;line-height: 1.4; text-align: justify; font-weight:lighter;font-family: 'Roboto Black', sans-serif;">
                        We are an international training company specialising in business leadership development. Over the past 15 years, we have delivered in 45 countries around the world hundreds of open and in-house training seminars as well as keynote speeches on various topics relating to business leadership. We have also provided hundreds of executive coaching to professional men and women, from top executives, to middle managers, to personal assistants, to entrepreneurs.
                    </p>
                </div>
                <div class="col-xs-12 col-md-5 col-lg-6 text-center">
                    <img
                        src="{{ asset('assets/images/about.png') }}"
                        alt="Image de ngoma"
                        style="width: 60%;height: 60%; margin-top: 20%;"
                    >
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" style="margin-top: -5rem" class="ls ms background_cover section_padding_top_130 section_padding_bottom_125">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-6 text-center text-md-left">
                    <h2 class="section_header">Ours Teams</h2>
                    <hr class="divider_60_2">
                    <div class="owl-carousel testimonials-owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-dots="true" data-nav="false">
                        <div>
                            <blockquote>
                                <p>"I had an overall amazing experience at RCA's Lighthouse location. The building and physical amenities were well beyond.</p>
                                <footer class="media inline-block">
                                    <div class="media-left media-middle">
                                        <img src="{{ asset('assets/images/image2.jpg') }}" alt="">
                                    </div>
                                    <div class="media-body media-middle">
                                        <cite>
                                            Anna Of Sewell, NJ
                                            <span class="highlight">client</span>
                                        </cite>
                                    </div>
                                </footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote>
                                <p>"I had an overall amazing experience at RCA's Lighthouse location. The building and physical amenities were well beyond.</p>
                                <footer class="media inline-block">
                                    <div class="media-left media-middle">
                                        <img src="{{ asset('assets/images/image1.jpg') }}" alt="">
                                    </div>
                                    <div class="media-body media-middle">
                                        <cite>
                                            Anna Of Sewell, NJ
                                            <span class="highlight">client</span>
                                        </cite>
                                    </div>
                                </footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote>
                                <p>"I had an overall amazing experience at RCA's Lighthouse location. The building and physical amenities were well beyond.</p>
                                <footer class="media inline-block">
                                    <div class="media-left media-middle">
                                        <img src="{{ asset('assets/images/image3.jpg') }}" alt="">
                                    </div>
                                    <div class="media-body media-middle">
                                        <cite>
                                            Anna Of Sewell, NJ
                                            <span class="highlight">client</span>
                                        </cite>
                                    </div>
                                </footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote>
                                <p>"I had an overall amazing experience at RCA's Lighthouse location. The building and physical amenities were well beyond.</p>
                                <footer class="media inline-block">
                                    <div class="media-left media-middle">
                                        <img src="{{ asset('assets/images/image4.png') }}" alt="">
                                    </div>
                                    <div class="media-body media-middle">
                                        <cite>
                                            Anna Of Sewell, NJ
                                            <span class="highlight">client</span>
                                        </cite>
                                    </div>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
