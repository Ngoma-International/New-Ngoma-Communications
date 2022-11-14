@extends('frontend.layouts.base')

@section('title')
    Ngoma communication
@endsection

@section('content')
    <section class="ls section_padding_top_130 section_padding_bottom_130 columns_padding_30">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-push-1">
                    <article class="single-post post vertical-item content-padding big-padding with_background">
                        <div class="item-media-wrap">
                            <div class="entry-thumbnail item-media">
                                <img
                                    src="{{ asset('storage/'.$viewModel->seminar->images) }}"
                                    alt="{{ $viewModel->seminar->name ?? "" }}"
                                    title="{{ $viewModel->seminar->name ?? "" }}"
                                >
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <span class="categories-links small" style="background: #2c3782 !important; color: white;">
                                    <span>{{ $viewModel->seminar->created_at->diffForHumans() ?? "" }}</span>
                                </span>
                                <span class="categories-links small">
                                    <span>{{ ucfirst($viewModel->seminar->seminarType->name) ?? "" }}</span>
                                </span>
                                <span class="categories-links" style="background: #138f6e !important; color: white;">
                                    <span>{{ ucfirst($viewModel->seminar->category->name) ?? "" }}</span>
                                </span>
                                <h3 class="entry-title big">
                                    <span>
                                        {{ ucfirst($viewModel->seminar->name) ?? "" }}
                                    </span>
                                </h3>
                            </header>
                            <div class="entry-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list2 grey">
                                            <li>
                                                Date de l'evenement : {{ ucfirst($viewModel->seminar->date) ?? "" }}
                                            </li>
                                            <li>
                                                Heure de debut : {{ $viewModel->seminar->renderStartTimeFormat() ?? "" }}
                                            </li>
                                            <li>
                                                Heure de fin : {{ $viewModel->seminar->renderEndTimeFormat() ?? "" }}
                                            </li>
                                            <li>
                                                Prix de billet : ${{ $viewModel->seminar->prices ?? "" }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list2 grey">
                                            <li>
                                                Pays : {{ ucfirst($viewModel->seminar->country) ?? "" }}
                                            </li>
                                            <li>
                                                Ville : {{ ucfirst($viewModel->seminar->city) ?? "" }}
                                            </li>
                                            <li>
                                                Adresse : {{ ucfirst($viewModel->seminar->address_seminar) ?? "" }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h6 class="topmargin_0">Pour Participer</h6>
                                <p>
                                    {{ $viewModel->seminar->attend ?? "" }}
                                </p>
                                <h6 class="topmargin_0">Vue d'ensemble</h6>
                                <p>
                                    {{ $viewModel->seminar->overview ?? "" }}
                                </p>
                                <h6 class="topmargin_0">Description</h6>
                                <p>
                                    {!! $viewModel->seminar->description ?? "" !!}
                                </p>
                            </div>
                        </div>
                    </article>
                    <div class="comments-area">
                        @if(session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <button type="button" class="close" data-dismiss="alert">
                                    <span aria-hidden="true">×</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <strong>{{ session('success') }}</strong>
                            </div>
                        @endif
                        <div class="comment-respond" id="respond">
                            <livewire:frontend.store-booking :seminar="$viewModel->seminar->id" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
