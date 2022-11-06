@extends('admin.layout.base')

@section('title')
    Edition du profile
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            @component('admin.shared.section')
                <div class="nk-block">
                    <div class="card">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head nk-block-head-lg">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">
                                                    Personal Information
                                                </h4>
                                                <div class="nk-block-des">
                                                    <p>Basic info, like your name and address, that you use on Nio
                                                        Platform.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-block">
                                        <div class="card border border-light">
                                            <div class="card-inner-group">
                                                <div class="card-body">
                                                    @include('admin.shared._alert')
                                                    @include('admin.domain.security._form')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @include('admin.shared.setting._aside')
                        </div>
                    </div>
                </div>
            @endcomponent
        </div>
    </div>
@endsection
