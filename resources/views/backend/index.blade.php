@php use App\Models\Podcast;use App\Models\Seminary;use App\Models\Ticket;use App\Models\User; @endphp
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
            'name' => "Seminaries",
            'count' => Seminary::count(),
            'icons' => "ti-gift text-primary-color"
        ])
        @include('backend.component._card', [
            'name' => "Podcast",
            'count' => Podcast::count(),
            'icons' => "ti-gift text-primary-color"
        ])
        @include('backend.component._card', [
            'name' => "Booking",
            'count' => Ticket::count(),
            'icons' => "ti-gift text-primary-color"
        ])
        @include('backend.component._card', [
            'name' => "Users",
            'count' => User::count(),
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
