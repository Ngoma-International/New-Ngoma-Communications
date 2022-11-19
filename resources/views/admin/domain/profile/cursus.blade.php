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
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Cursus du membre</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <div class="card border border-light">
                                        <div class="card-inner-group">
                                            <div class="card-body">
                                                
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
