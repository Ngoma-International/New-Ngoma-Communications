@extends('backend.layout.base')

@section('title')
    Scanner
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            @component('backend.shared.section')
                <div class="card-inner">
                    <div class="text-center">
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-6">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-search"></em>
                                    </div>
                                    <input type="text" class="form-control" id="default-04" placeholder="Input placeholder">
                                </div>

                                <div class="pt-4 container">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endcomponent
        </div>
    </div>
@endsection
