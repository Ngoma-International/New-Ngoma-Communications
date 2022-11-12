@extends('admin.layout.base')

@section('title')
    Seminar Booking Stats
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            @component('admin.shared.section')
                <div class="card-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <livewire:backend.ticket-verify />
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-inner">
                                        <p>Website Design &amp; Develop the website with web applications</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endcomponent
        </div>
    </div>
@endsection
