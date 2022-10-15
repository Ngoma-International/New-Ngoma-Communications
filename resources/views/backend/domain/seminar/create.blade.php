@extends('backend.layout.base')

@section('title')
    Ajouter un event
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                @component('backend.shared.content')
                    Ajouter un event
                @endcomponent

                @component('backend.shared.banner')
                    <div class="nk-block-head-content">
                        <a class="btn btn-primary btn-dim btn-sm" href="{{ $viewModels->indexUrl }}">
                            <em class="icon ni ni-arrow-long-left"></em>
                            <span>Tout les events</span>
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
                        @include('backend.domain.seminar._form', with($viewModels))
                    </div>
                </div>
            </div>
        @endcomponent
    </div>
@endsection

