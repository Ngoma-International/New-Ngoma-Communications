@extends('frontend.layouts.base')

@section('title')
    Ngoma communication
@endsection

@section('content')
    <section class="ls section_padding_top_130 section_padding_bottom_130">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
                        @foreach($viewModel->members() as $member)
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <article class="vertical-item team-item content-padding with_background text-center">
                                    <div class="item-media-wrap">
                                        <div class="item-media">
                                            <img
                                                src="{{ asset('storage/'. $member->images) }}"
                                                alt="{{ $member->name }}">
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <span class="small-text highlight">
                                            {{ ucfirst($member->profile->role) ?? "" }}
                                        </span>
                                        <h3 class="entry-title">
                                            <a href="{{ route('member.show', $member->id) }}">
                                                {{ ucfirst($member->name) ?? "" }}
                                                {{ ucfirst($member->firstname) ?? "" }}
                                            </a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
