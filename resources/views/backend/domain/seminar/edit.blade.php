@extends('backend.layout.base')

@section('title')
    Editer un podcast # {{ $viewModels->seminar->name }}
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                @component('backend.shared.content')
                    {{ $viewModels->seminar->name }}
                @endcomponent

                @component('backend.shared.banner')
                    <div class="nk-block-head-content">
                        <a href="{{ $viewModels->indexUrl }}"
                           class="btn btn-outline-light btn-sm bg-white d-none d-sm-inline-flex">
                            <em class="icon ni ni-arrow-left"></em>
                            <span>Tous les podcasts</span>
                        </a>
                    </div>
                @endcomponent
            </div>
        </div>
        @component('backend.shared.section')
            <div class="card-inner card-inner-lg">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @include('backend.shared._alert')
                        @include('backend.domain.seminar._edit')
                    </div>
                </div>
            </div>
        @endcomponent
    </div>
@endsection

