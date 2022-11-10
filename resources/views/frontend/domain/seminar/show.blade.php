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
                                <span class="categories-links">
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
                                <div class="entry-meta content-justify v-spacing small-text big-spacing">
                                    <div>
                                        <div class="inline-content highlightlinks">
                                            <span>
                                                <i class="tmi-user grey"></i>
                                                <a>{{ ucfirst($viewModel->seminar->user->name) ?? "" }}</a>
                                            </span>
                                            <span>
                                                <i class="tmi-calendar grey"></i>
                                                <a href="">
                                                    <time datetime="{{ $viewModel->seminar->created_at->diffForHumans() ?? "" }}">
                                                        {{ $viewModel->seminar->created_at->diffForHumans() ?? "" }}
                                                    </time>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <span class="categories-links" style="background: transparent !important;">
                                    <span>{{ ucfirst($viewModel->seminar->category->name) ?? "" }}</span>
                                </span>
                            <div class="entry-content">
                                <span style="font-size: 16px; color: #0b1219;font-family: 'Roboto Medium',sans-serif; ">
                                    Attend
                                </span>
                                <p>
                                    {{ ucfirst($viewModel->seminar->attend) ?? "" }}
                                </p>
                                <p>
                                    {!! $viewModel->seminar->description ?? "" !!}
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
