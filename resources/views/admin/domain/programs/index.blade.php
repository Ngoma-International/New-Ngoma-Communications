@extends('admin.layout.base')

@section('title')
    Event Programs
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        Event Programs
                    @endcomponent

                    @component('admin.shared.banner')
                        <li class="preview-item">
                            <a href="{{ route('admins.programs.create') }}" class="btn btn-outline-primary btn-sm">
                                <em class="icon ni ni-plus mr-1"></em> Create Programs
                            </a>
                        </li>
                    @endcomponent
                </div>
            </div>
            @component('admin.shared.section')
                <div class="card-inner">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="start_time">Start Time</label>
                            <div class="form-control-wrap">
                                <input
                                    type="text"
                                    class="form-control time-picker @error('start_time') error @enderror"
                                    id="start_time"
                                    name="start_time"
                                    value="{{ old('start_time') }}"
                                    placeholder="Enter start time"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="end_time">End Time</label>
                            <div class="form-control-wrap">
                                <input
                                    type="text"
                                    class="form-control time-picker @error('end_time') error @enderror"
                                    id="end_time"
                                    name="end_time"
                                    value="{{ old('end_time') }}"
                                    placeholder="Enter end time"
                                    required>
                            </div>
                        </div>
                    </div>


                </div>
            @endcomponent
        </div>
    </div>
@endsection
