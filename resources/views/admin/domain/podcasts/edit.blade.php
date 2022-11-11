@extends('admin.layout.base')

@section('title')
    Editer un podcast # {{ $viewModels->podcast->title }}
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                @component('admin.shared.content')
                    {{ $viewModels->podcast->title }}
                @endcomponent

                @component('admin.shared.banner')
                    <div class="nk-block-head-content">
                        <a href="{{ $viewModels->indexUrl }}"
                           class="btn btn-outline-primary btn-sm">
                            <em class="icon ni ni-arrow-long-left"></em>
                            <span>All Podcasts</span>
                        </a>
                    </div>
                @endcomponent
            </div>
        </div>
        @component('admin.shared.section')
            <div class="card-inner card-inner-lg">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @include('admin.shared._alert')
                        @include('admin.domain.podcasts._edit')
                    </div>
                </div>
            </div>
        @endcomponent
    </div>
@endsection
