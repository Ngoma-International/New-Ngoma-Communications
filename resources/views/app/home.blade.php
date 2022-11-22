@extends('app.layouts.base')

@section('title')
    Triplex
@endsection

@section('content')
    <div class="card-inner active" id="home">
        <div class="row card-container" data-simplebar>
            <div class="card-wrap col col-m-12 col-t-12 col-d-9 col-d-lg-9">
                @include('app.component._home')
            </div>
        </div>
        <div class="lines-grid loaded">
            <div class="row">
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3"></div>
            </div>
        </div>
    </div>

    <div class="card-inner" id="about">
        <div class="row card-container" data-simplebar>
            @include('app.component._about')
        </div>
        <div class="lines-grid loaded">
            <div class="row">
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3"></div>
            </div>
        </div>
    </div>

    <div class="card-inner" id="sessions">
        <div class="row card-container" data-simplebar>
            @include('app.component._session')
        </div>
        <div class="lines-grid loaded">
            <div class="row">
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3"></div>
            </div>
        </div>
    </div>

    <div class="card-inner" id="contact">
        <div class="row card-container" data-simplebar>
            @include('app.domain.contact.index')
        </div>
        <div class="lines-grid loaded">
            <div class="row">
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3"></div>
            </div>
        </div>
    </div>

    <div class="card-inner" id="podcast">
        <div class="row card-container" data-simplebar>
            @include('app.domain.podcast.index')
        </div>
        <div class="lines-grid loaded">
            <div class="row">
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3"></div>
            </div>
        </div>
    </div>

    <div class="card-inner" id="events">
        <div class="row card-container" data-simplebar>
            @include('app.domain.seminar.index')
        </div>
        <div class="lines-grid">
            <div class="row">
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3"></div>
            </div>
        </div>
    </div>
@endsection
