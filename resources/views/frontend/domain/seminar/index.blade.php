@extends('frontend.layouts.base')

@section('title')
    Ngoma communication
@endsection

@section('content')
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
                    {{ $viewModel->seminars()->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
