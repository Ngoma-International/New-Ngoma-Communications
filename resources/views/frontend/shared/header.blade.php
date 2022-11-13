<div class="{{ Request::url() === route('app.name') ? "top_sm_wrapper darkblue_gradient" : "header_v1_wrapper ds darkblue_gradient background_cover" }}">
    @if(Request::url() === route('app.name'))
        <div class="transparent_wrapper">
            @include('frontend.component.wrapper')
            <header class="page_header header_v2 header_darkgrey darkblue_gradient toggler_relative">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="header_mainmenu">
                                <nav class="mainmenu_wrapper">
                                    <ul class="mainmenu nav sf-menu">
                                        @include('frontend.component._link', [
                                            'route' => route('app.name'),
                                            'name' => "Home"
                                        ])
                                        @include('frontend.component._link', [
                                            'route' => route('seminar.index'),
                                            'name' => "Seminar"
                                        ])
                                        @include('frontend.component._link', [
                                            'route' => route('podcast.index'),
                                            'name' => "Podcasts"
                                        ])
                                        @include('frontend.component._link', [
                                            'route' => route('app.name'),
                                            'name' => "Ours Members"
                                        ])
                                        @include('frontend.component._link', [
                                            'route' => route('about.index'),
                                            'name' => "About us"
                                        ])
                                        @include('frontend.component._link', [
                                            'route' => route('login'),
                                            'name' => "Login"
                                        ])
                                        @include('frontend.component._link', [
                                            'route' => route('register'),
                                            'name' => "Register"
                                        ])
                                    </ul>
                                </nav>
                                <span class="toggle_menu">
                                <span></span>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <section class="intro_section page_mainslider ds darkblue_gradient all-scr-cover">
            <div class="flexslider" data-dots="true" data-nav="false">
                <ul class="slides">
                    <li>
                        <div class="slide-image-wrap">
                            <img src="{{ asset('assets/images/') }}" alt="" />
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="slide_description_wrapper">
                                        <div class="slide_description">
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <p>We help organisations and individuals to reach a higher level of excellence.</p>
                                            </div>
                                            <div style="padding-bottom: .5rem; margin-top: .2rem;" >
                                                <p style="font-size: 16px; color: #fff;font-weight: 200;font-family: 'Roboto Black',sans-serif;">
                                                    Grounded in ongoing research and 15 years of experience developing successful business leaders,
                                                    our offerings address the three aspects of leadership: Leading Youself;
                                                    Leading People; Leading Organisations.
                                                </p>
                                            </div>
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <div class="slide_buttons">
                                                    <a href="{{ route('seminar.index') }}" class="theme_button inverse min_width_button">View Ours Seminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    @else
        @include('frontend.component.wrapper')
        <header class="page_header header_v2 header_darkgrey darkblue_gradient toggler_relative">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="header_mainmenu">
                            <nav class="mainmenu_wrapper">
                                <ul class="mainmenu nav sf-menu">
                                    @include('frontend.component._link', [
                                        'route' => route('app.name'),
                                        'name' => "Home"
                                    ])
                                    @include('frontend.component._link', [
                                        'route' => route('seminar.index'),
                                        'name' => "Seminar"
                                    ])
                                    @include('frontend.component._link', [
                                        'route' => route('podcast.index'),
                                        'name' => "Podcasts"
                                    ])
                                    @include('frontend.component._link', [
                                        'route' => route('membre.index'),
                                        'name' => "Ours Members"
                                    ])
                                    @include('frontend.component._link', [
                                        'route' => route('about.index'),
                                        'name' => "About us"
                                    ])
                                    @include('frontend.component._link', [
                                        'route' => route('login'),
                                        'name' => "Login"
                                    ])
                                    @include('frontend.component._link', [
                                        'route' => route('register'),
                                        'name' => "Register"
                                    ])
                                </ul>
                            </nav>
                            <span class="toggle_menu">
                                <span></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    @endif
</div>
