@extends('admin.layout.base')

@section('title')
    Seminar Booking Stats
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            @component('admin.shared.section')
                <livewire:backend.ticket-verify />
            @endcomponent
        </div>
    </div>
@endsection
