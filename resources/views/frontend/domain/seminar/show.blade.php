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
                                                Pays : {{ ucfirst($viewModel->seminar->country) ?? "" }}
                                            </li>
                                            <li>
                                                Date de l'evenement : {{ ucfirst($viewModel->seminar->date) ?? "" }}
                                            </li>
                                            <li>
                                                Heure de fin : {{ $viewModel->seminar->end_time ?? "" }}
                                            </li>
                                            <li>
                                                Adresse : {{ ucfirst($viewModel->seminar->address_seminar) ?? "" }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list2 grey">
                                            <li>
                                                Ville : {{ ucfirst($viewModel->seminar->city) ?? "" }}
                                            </li>
                                            <li>
                                                Heure de debut : {{ $viewModel->seminar->end_time ?? "" }}
                                            </li>
                                            <li>
                                                Adresse : {{ ucfirst($viewModel->seminar->address_seminar) ?? "" }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h6 class="topmargin_0">Description</h6>
                                <p>
                                    {!! $viewModel->seminar->description ?? "" !!}
                                </p>
                            </div>
                        </div>
                    </article>
                    <div class="comments-area">
                        <div class="comment-respond" id="respond">
                            <form class="comment-form columns_padding_10" method="post" action="">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group margin_0">
                                            <label for="author">Name<span class="required">*</span></label>
                                            <input
                                                type="text"
                                                value=""
                                                name="author"
                                                id="author"
                                                class="form-control"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-submit topmargin_35">
                                    <button type="submit" class="theme_button min_width_button">Reserver</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
