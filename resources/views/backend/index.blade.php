@extends('backend.layouts.base')

@section('title')
    Pannel administration
@endsection

@section('content')
    @component('backend.component.brandcrump')
        Dashboard
    @endcomponent
    <div class="row dashboard-header">
        @include('backend.component._card', [
            'name' => "",
            'count' => 0,
            'icons' => "ti-gift text-primary-color"
        ])
        @include('backend.component._card', [
            'name' => "",
            'count' => 0,
            'icons' => "ti-gift text-primary-color"
        ])
        @include('backend.component._card', [
            'name' => "",
            'count' => 0,
            'icons' => "ti-gift text-primary-color"
        ])
        @include('backend.component._card', [
            'name' => "",
            'count' => 0,
            'icons' => "ti-gift text-primary-color"
        ])
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Bar chart</h5>
                </div>
                <div class="card-block">
                    <div id="barchart" style="min-width: 250px; height: 330px; margin: 0 auto"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
