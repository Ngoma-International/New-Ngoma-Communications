@extends('admin.layout.base')

@section('title')
    Create Manager
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                @component('admin.shared.content')
                    Ajouter un manager
                @endcomponent

                @component('admin.shared.banner')
                    <div class="nk-block-head-content">
                        <a href="{{ route('admins.users.index') }}"
                           class="btn btn-outline-light btn-sm bg-white d-none d-sm-inline-flex">
                            <em class="icon ni ni-arrow-long-left"></em>
                            <span>Back</span>
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
                        @include('admin.domain.users._form')
                    </div>
                </div>
            </div>
        @endcomponent
    </div>
@endsection

