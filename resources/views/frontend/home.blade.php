@extends('frontend.layouts.base')

@section('title')
    Ngoma communication
@endsection

@section('content')
    <section id="features" class="cs fluid_padding_0 columns_padding_0 columns_margin_0">
        <div class="container-fluid">
            <div class="row flex-wrap v-content-equalize">
                <div class="col-xs-12 col-sm-6 col-md-4 text-center text-sm-left">
                    <div class="with_padding big-padding bg_teaser after_cover gradient_bg_color1">
                        <h3 class="topmargin_0">Leading Youself<br> <span class="thin big">Services</span></h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 text-center text-sm-left">
                    <div class="with_padding big-padding bg_teaser after_cover gradient_bg_color2">
                        <h3 class="topmargin_0">Leading People<br> <span class="thin big">Solutions</span></h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 text-center text-sm-left">
                    <div class="with_padding big-padding bg_teaser after_cover gradient_bg_color3">
                        <h3 class="topmargin_0">Leading Organisations<br> <span class="thin big">Research</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($viewModel->seminars()->count() > 0)
        <section class="ls section_padding_top_130 section_padding_bottom_130">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
                            @forelse($viewModel->seminars() as $seminar)
                                <div class="isotope-item col-xs-12 col-sm-6 col-md-4">
                                    @include('frontend.component._seminar', with($seminar))
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="ls ms section_404 section_padding_top_130 section_padding_bottom_130">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h1>Oops, Content Not</h1>
                        <p>
                            <a href="{{ route('app.name') }}" class="theme_button min_width_button">
                                Refresh page
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
