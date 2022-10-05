@extends('backend.layouts.base')

@section('title')
    Editer un seminaire
@endsection

@section('content')
    @component('backend.component.brandcrump')
        Editer un seminaire
        <div class="mt-4">
            <a href="{{ route('admins.seminary.index') }}" class="btn btn-primary mt-3">
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

                <form action="{{ route('admins.seminary.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="category" class="form-control-label">Category</label>
                            <select class="form-control @error('category') input-danger @enderror" name="category" id="category">
                                <option value="1">Life Skils</option>
                                <option value="2">Leading Yourself</option>
                                <option value="3">Leading People</option>
                                <option value="3">Leading Organisation</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="type" class="form-control-label">Type</label>
                            <select class="form-control @error('type') input-danger @enderror" name="type" id="type">
                                <option value="1">CSR Event</option>
                                <option value="2">Open Seminar</option>
                                <option value="3">Online Event</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="prices"
                                class="form-control-label">Prices</label>
                            <input
                                type="number"
                                class="form-control @error('prices') input-danger @enderror"
                                id="prices"
                                name="prices"
                                value="{{ old('prices') }}"
                                aria-describedby="prices"
                                placeholder="Enter prices">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="name"
                                class="form-control-label">Name Seminar</label>
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
                                for="start_time"
                                class="form-control-label">Start Time</label>
                            <input
                                type="text"
                                class="form-control @error('start_time') input-danger @enderror"
                                id="start_time"
                                name="start_time"
                                value="{{ old('start_time') }}"
                                aria-describedby="start_time"
                                placeholder="Enter start time">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="end_time"
                                class="form-control-label">End Time</label>
                            <input
                                type="text"
                                class="form-control @error("end_time") input-danger @enderror"
                                id="end_time"
                                name="end_time"
                                value="{{ old('end_time') }}"
                                aria-describedby="end_time"
                                placeholder="Enter end time">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="date"
                                class="form-control-label">Event Date</label>
                            <input
                                type="text"
                                class="form-control @error('date') input-danger @enderror"
                                id="date"
                                name="date"
                                value="{{ old('date') }}"
                                aria-describedby="date"
                                placeholder="Enter date">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="address"
                                class="form-control-label">Address</label>
                            <input
                                type="text"
                                class="form-control @error('address') input-danger @enderror"
                                id="address"
                                name="address"
                                value="{{ old('address') }}"
                                aria-describedby="address"
                                placeholder="Enter address">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="city"
                                class="form-control-label">City</label>
                            <input
                                type="text"
                                class="form-control @error('city') input-danger @enderror"
                                id="city"
                                name="city"
                                value="{{ old('city') }}"
                                aria-describedby="city"
                                placeholder="Enter city">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="country" class="form-control-label">Country</label>
                            <select class="form-control @error('country') input-danger @enderror" name="country" id="country">
                                <option value="1">CSR Event</option>
                                <option value="2">Open Seminar</option>
                                <option value="3">Online Event</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="duration"
                                class="form-control-label">Duration</label>
                            <input
                                type="text"
                                class="form-control @error('duration') input-danger @enderror"
                                id="duration"
                                name="duration"
                                value="{{ old('duration') }}"
                                aria-describedby="duration"
                                placeholder="Enter duration">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="images"
                                class="form-control-label">Poster</label>
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
                            <label for="facilitator" class="form-control-label">Facilitator</label>
                            <select class="form-control @error('facilitator') input-danger @enderror" name="facilitator" id="facilitator">
                                <option value="1">CSR Event</option>
                                <option value="2">Open Seminar</option>
                                <option value="3">Online Event</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="outline"
                                class="form-control-label">Seminar Outline</label>
                            <textarea
                                class="form-control @error('outline') input-danger @enderror"
                                id="outline"
                                name="outline"
                                rows="4">{{ old('outline') ?? "" }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="attend"
                                class="form-control-label">Who should attend</label>
                            <textarea
                                class="form-control @error('attend') input-danger @enderror"
                                id="attend"
                                name="attend"
                                rows="4">{{ old('attend') ?? "" }}</textarea>
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
    @endcomponent
@endsection
