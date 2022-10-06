@extends('backend.layout.base')

@section('title')
    Configuration
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('backend.shared.content')
                        Configuration
                    @endcomponent
                </div>
            </div>
            @component('backend.shared.section')

            @endcomponent
        </div>
    </div>
@endsection
