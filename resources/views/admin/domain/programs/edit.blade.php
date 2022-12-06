@extends('admin.layout.base')

@section('title')
    Editer un podcast # {{ $viewModel->program->title }}
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                @component('admin.shared.content')
                    Editer le programme
                @endcomponent

                @component('admin.shared.banner')
                    <div class="nk-block-head-content">
                        <a href="{{ $viewModel->indexUrl }}"
                           class="btn btn-outline-primary btn-sm bg-white d-none d-sm-inline-flex">
                            <em class="icon ni ni-arrow-left"></em>
                            <span>Tous les programs</span>
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
                        @include('admin.domain.programs._edit')
                    </div>
                </div>
            </div>
        @endcomponent
    </div>
@endsection
