@extends('frontend.layouts.base')

@section('title')
    Ngoma communication
@endsection

@section('content')
    <section class="ls section_padding_top_130 section_padding_bottom_130 columns_padding_30">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-8 col-md-push-4 col-lg-push-4">
                    @foreach($viewModel->podcasts() as $podcast)
                        @include('frontend.component.podcast', with($podcast))
                    @endforeach
                    {{ $viewModel->podcasts()->links() }}
                </div>
                <aside class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-md-pull-8 col-lg-pull-8 col-sm-offset-3 col-md-offset-0">
                    <div class="with_background with_padding">
                        <div class="widget widget_categories">
                            <h3 class="widget-title">Offering</h3>
                            <ul class="greylinks">
                                @foreach($viewModel->offerings() as $offering)
                                    <li>
                                        <a href="offering={{ $offering->id }}">{{ ucfirst($offering->name) ?? "" }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
