@extends('backend.layouts.base')

@section('title')
    Editer un partners
@endsection

@section('content')
    @component('backend.component.brandcrump')
        Editer un partners
        <div class="mt-4">
            <a href="{{ route('admins.users.index') }}" class="btn btn-primary mt-3">
                <i class="fa fa-arrow-circle-left"></i>
                Back
            </a>
        </div>
    @endcomponent
    @component('backend.shared.content')
        <div class="card-block">
            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger mt-4">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admins.users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                                value="{{ old('name') ?? $user->name }}"
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
                                value="{{ old('email') ?? $user->email }}"
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
                                value="{{ old('phone_number') ?? $user->phone_number }}"
                                aria-describedby="phone_number"
                                placeholder="Enter phone number">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="profession"
                                class="form-control-label">Profession</label>
                            <input
                                type="text"
                                class="form-control @error("profession") input-danger @enderror"
                                id="profession"
                                name="profession"
                                value="{{ old('profession') ?? $user->profession }}"
                                aria-describedby="profession"
                                placeholder="Enter Profession">
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
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="role" class="form-control-label">Role users</label>
                            <select class="form-control @error('role') input-danger @enderror" name="role" id="role">
                                <option value="1">Admin</option>
                                <option value="2">Partners</option>
                                <option value="3">Facilitators</option>
                            </select>
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
                                rows="4">{{ old('about') ?? $user->about }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">
                            <i class="fa fa-check"></i>
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endcomponent
@endsection
