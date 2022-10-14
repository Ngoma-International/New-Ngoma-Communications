@extends('backend.layout.base')

@section('title')
    Booking Invoice
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('backend.shared.content')
                        Booking Invoice
                    @endcomponent

                    @component('backend.shared.banner')
                            <div class="nk-block-head-content">
                                <a href="{{ route('admins.users.index') }}"
                                   class="btn btn-outline-light btn-sm bg-white d-none d-sm-inline-flex">
                                    <em class="icon ni ni-arrow-left"></em>
                                    <span>Back</span>
                                </a>
                            </div>
                    @endcomponent
                </div>
            </div>
            @component('backend.shared.section')

            @endcomponent
        </div>
    </div>
@endsection