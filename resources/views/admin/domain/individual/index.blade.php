@extends('admin.layout.base')

@section('title')
    Membres individuel
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        Members individual
                    @endcomponent
                </div>
            </div>
            @component('admin.shared.section')
                <div class="card-inner">

                </div>
            @endcomponent
        </div>
    </div>
@endsection
