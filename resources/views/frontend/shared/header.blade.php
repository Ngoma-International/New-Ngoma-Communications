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

    @if(Request::url() === route('app.name'))
        @include('frontend.component.mainslider')
    @endif
</div>
