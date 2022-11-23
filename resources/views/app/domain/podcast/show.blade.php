@extends('app.layouts.base')

@section('title')

@endsection

@section('content')
    <div class="card-inner active" id="blog">
        <div class="row card-container">
            <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
                <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url({{ asset('assets/images/bg1.jpg') }});"></div>
                <div class="content inner-top">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title-bg">Detail Podcast</div>
                        </div>
                    </div>
                </div>

                <div class="content blog-single">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="post-box card-box">
                                <h1 style="font-size: large">{{ ucfirst($viewModel->podcast->title) ?? "" }}</h1>
                                <div class="blog-detail">Published date : <span style="color: #5ac24e; font-weight: bold">{{ $viewModel->podcast->created_at->diffForHumans() ?? "" }}</span></div>
                                <div class="blog-content">
                                    @if($viewModel->podcast->type->name === 'video')
                                        <video
                                            controls
                                            src="{{ asset('storage/'. $viewModel->podcast->images_video) }}"
                                            poster="{{ asset('storage/'. $viewModel->podcast->thumbnail) }}"
                                            height="250px"
                                            style="object-fit: cover; border-radius: 10px; margin-top: -1%;"
                                            width="100%">
                                        </video>
                                    @else
                                        <audio controls>
                                            <source src="{{ asset('storage/'. $viewModel->podcast->images_video) }}" type="audio/mpeg" />
                                            <source src="{{ asset('storage/'. $viewModel->podcast->images_video) }}" type="audio/ogg" />
                                        </audio>
                                    @endif
                                        <h1 style="font-size: medium; font-weight: bold; margin-top: 0; margin-bottom: 0; opacity: .7">Detail du podcasst</h1>
                                        <ul class="list-style">
                                            <li>Type podcast : <span style="color: #5ac24e; font-weight: bold">{{ ucfirst($viewModel->podcast->type->name) ?? "" }}</span></li>
                                            <li>Intervenant : <span style="color: #5ac24e; font-weight: bold">{{ ucfirst($viewModel->podcast->user->name) ?? "" }}</span></li>
                                            <li>Offereing : <span style="color: #5ac24e; font-weight: bold">{{ ucfirst($viewModel->podcast->offering->name) ?? "" }}</span></li>
                                        </ul>
                                    <h1 style="font-size: medium; font-weight: bold; margin-top: 0; margin-bottom: 0; opacity: .7">Description</h1>
                                    <p>
                                        {!! $viewModel->podcast->description ?? "" !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lines-grid">
        <div class="row">
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
                <div class="lines">
                    <div class="line-1"></div>
                    <div class="line-2" style="animation-delay: 10s;"></div>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
                <div class="lines">
                    <div class="line-1"></div>
                </div>
            </div>
            <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3">
                <div class="lines">
                    <div class="line-1"></div>
                    <div class="line-2" style="animation-delay: 0s;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
