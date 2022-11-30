@extends('admin.layout.base')

@section('title')
    Facilitator
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        Facilitators
                    @endcomponent

                    @component('admin.shared.banner')
                        <li class="preview-item">
                            <a href="{{ route('admins.facilitator.create') }}" class="btn btn-outline-primary btn-sm">
                                <em class="icon ni ni-plus mr-1"></em> Create Facilitator
                            </a>
                        </li>
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
