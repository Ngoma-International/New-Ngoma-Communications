@extends('backend.layout.base')

@section('title')
    Create Seminars
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                @component('backend.shared.content')
                    Ajouter Seminars
                @endcomponent

                @component('backend.shared.banner')
                    <div class="nk-block-head-content">
                        <a href="{{ route('admins.seminary.index') }}"
                           class="btn btn-outline-light btn-sm bg-white d-none d-sm-inline-flex">
                            <em class="icon ni ni-arrow-left"></em>
                            <span>Back</span>
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
                        @include('backend.domain.seminary._form')
                    </div>
                </div>
            </div>
        @endcomponent
    </div>
@endsection

