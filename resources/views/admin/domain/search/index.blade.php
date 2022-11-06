@extends('admin.layout.base')

@section('title')
    Seminar Booking Stats
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            @component('admin.shared.section')
                <div class="card-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="nk-header-search ms-3 ms-xl-0 border-dark">
                                <em class="icon ni ni-search"></em>
                                <input
                                        type="text"
                                        name="search"
                                        id="search"
                                        x-model="searchData()"
                                        @keydown.enter="addTodo()"
                                        class="form-control form-focus-none"
                                        placeholder="Search anything">
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-inner">
                                        <p>Website Design &amp; Develop the website with web applications</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endcomponent
        </div>
    </div>
@endsection
