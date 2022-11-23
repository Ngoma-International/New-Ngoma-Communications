@extends('app.layouts.base')

@section('title')
    Detail du seminaire
@endsection

@section('content')
    <div class="card-inner active" id="blog">
        <div class="row card-container">
            <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
                <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url({{ asset('assets/images/bg1.jpg') }});"></div>
                <div class="content inner-top">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title-bg">Detail seminar</div>
                        </div>
                    </div>
                </div>

                <div class="content blog-single">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="post-box card-box">
                                <h1>{{ ucfirst($viewModel->seminar->name) ?? "" }}</h1>
                                <div class="blog-detail">{{ $viewModel->seminar->created_at->diffForHumans() ?? "" }}</div>
                                <div class="blog-content">
                                    <img
                                        src="{{ asset('storage/'. $viewModel->seminar->images) }}"
                                        height="250px"
                                        width="100%"
                                        style="object-fit: cover; border-radius: 10px; margin-top: -1%;"
                                        alt="{{ $viewModel->seminar->name ?? "" }}">
                                    <p style="margin-top: 1%">
                                        {{ $viewModel->seminar->attend ?? "" }}
                                    </p>
                                    <h1 style="font-size: medium; font-weight: bold; margin-top: 0; margin-bottom: 0">Detail du seminar</h1>
                                    <ul class="list-style">
                                        <div style="display: flex; flex-shrink: inherit; justify-content:space-between; align-items: inherit">
                                            <div>
                                                <li>Country : <span style="color: #5ac24e; font-weight: bold">{{ ucfirst($viewModel->seminar->country) ?? "" }}</span></li>
                                                <li>City : <span style="color: #5ac24e; font-weight: bold">{{ ucfirst($viewModel->seminar->city) ?? "" }}</span></li>
                                                <li>Address : <span style="color: #5ac24e; font-weight: bold">{{ ucfirst($viewModel->seminar->address_seminar) ?? "" }}</span></li>
                                                <li>Start Time : <span style="color: #5ac24e; font-weight: bold">{{ $viewModel->seminar->renderStartTimeFormat() ?? "" }}</span></li>
                                                <li>End Time : <span style="color: #5ac24e; font-weight: bold">{{ $viewModel->seminar->renderEndTimeFormat() ?? "" }}</span></li>
                                            </div>
                                            <div>
                                                <li>Prices : <span style="color: #5ac24e; font-weight: bold">$ {{ $viewModel->seminar->prices ?? 0 }}</span></li>
                                                <li>Date : <span style="color: #5ac24e; font-weight: bold">{{ $viewModel->seminar->date ?? "" }}</span></li>
                                                <li>Category : <span style="color: #5ac24e; font-weight: bold">{{ ucfirst($viewModel->seminar->category->name) ?? "" }}</span></li>
                                                <li>Seminar Type : <span style="color: #5ac24e; font-weight: bold">{{ ucfirst($viewModel->seminar->seminarType->name) ?? "" }}</span></li>
                                                <li>Facilitator : <span style="color: #5ac24e; font-weight: bold">{{ ucfirst($viewModel->seminar->user->name) ?? "" }}-{{ ucfirst($viewModel->seminar->user->firstname) ?? "" }}</span></li>
                                            </div>
                                        </div>
                                    </ul>
                                    <p>
                                        {{$viewModel->seminar->overview ?? ""}}
                                    </p>
                                    <h1 style="font-size: medium; font-weight: bold; margin-top: 0; margin-bottom: 0">Description</h1>
                                    <p>
                                        {!! $viewModel->seminar->description ?? "" !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title">
                                <span>Book</span> a Ticket</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="post-box card-box comments-form">
                                <livewire:frontend.store-booking seminar="{{ $viewModel->seminar->id }}" />
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
