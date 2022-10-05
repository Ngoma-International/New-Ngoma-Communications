@extends('backend.layouts.base')

@section('title')
    Profile utilisateur
@endsection

@section('content')
    @component('backend.component.brandcrump')
        Profile utilisateur
    @endcomponent
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="user-block-2">
                    <img class="img-fluid" src="" alt="user-header">
                    <h5>{{ ucfirst(auth()->user()->name) ?? "" }} {{ ucfirst(auth()->user()->firstname) ?? "" }}</h5>
                    <h6>{{ ucfirst(auth()->user()->profession) ?? "" }}</h6>
                </div>
                <div class="card-block">
                    <div class="user-block-2-activities">
                        <div class="user-block-2-active">
                            <i class="icofont icofont-clock-time"></i>
                            {{ auth()->user()->email ?? "" }}
                        </div>
                    </div>
                    <div class="user-block-2-activities">
                        <div class="user-block-2-active">
                            <i class="icofont icofont-users"></i>
                            {{ auth()->user()->phone_number ?? "" }}
                        </div>
                    </div>

                    <div class="user-block-2-activities">
                        <div class="user-block-2-active">
                            <i class="icofont icofont-ui-user"></i>
                            {{ auth()->user()->profession ?? "" }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-block">
                    <form action="{{ route('admins.users.store') }}" method="post">
                        @csrf
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label
                                    for="name"
                                    class="form-control-label">Name</label>
                                <input
                                    type="text"
                                    class="form-control @error('name') input-danger @enderror"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    aria-describedby="name"
                                    placeholder="Enter name">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label
                                    for="email"
                                    class="form-control-label">Email</label>
                                <input
                                    type="email"
                                    class="form-control @error('email') input-danger @enderror"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    aria-describedby="email"
                                    placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label
                                    for="phone_number"
                                    class="form-control-label">Phones</label>
                                <input
                                    type="text"
                                    class="form-control @error('phone_number') input-danger @enderror"
                                    id="phone_number"
                                    name="phone_number"
                                    value="{{ old('phone_number') }}"
                                    aria-describedby="phone_number"
                                    placeholder="Enter phone number">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label
                                    for="images"
                                    class="form-control-label">Images</label>
                                <input
                                    type="file"
                                    class="form-control @error('images') input-danger @enderror"
                                    id="images"
                                    name="images"
                                    value="{{ old('images') }}"
                                    aria-describedby="images"
                                    placeholder="Enter images">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label
                                    for="about"
                                    class="form-control-label">Description</label>
                                <textarea
                                    class="form-control @error('about') input-danger @enderror"
                                    id="about"
                                    name="about"
                                    rows="4">{{ old('about') ?? "" }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">
                                <i class="fa fa-check"></i>
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
