@extends('backend.layouts.base')

@section('title')
    Editer un podcast
@endsection

@section('content')
    @component('backend.component.brandcrump')
        Editer un podcast
        <div class="mt-4">
            <a href="{{ route('admins.podcast.index') }}" class="btn btn-primary mt-3">
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

                <form action="{{ route('admins.podcast.update', $podcast->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="type" class="form-control-label">Type</label>
                            <select class="form-control @error('type') input-danger @enderror" name="type" id="type">
                                <option value="1">Audio</option>
                                <option value="2">Video</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="title"
                                class="form-control-label">title</label>
                            <input
                                type="text"
                                class="form-control @error('title') input-danger @enderror"
                                id="title"
                                name="title"
                                value="{{ old('title') }}"
                                aria-describedby="title"
                                placeholder="Enter title">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="author" class="form-control-label">Author</label>
                            <select class="form-control @error('author') input-danger @enderror" name="author" id="author">
                                <option value="1">Audio</option>
                                <option value="2">Video</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="thumbnail"
                                class="form-control-label">Thumbnail</label>
                            <input
                                type="text"
                                class="form-control @error('thumbnail') input-danger @enderror"
                                id="thumbnail"
                                name="thumbnail"
                                value="{{ old('thumbnail') }}"
                                aria-describedby="thumbnail"
                                placeholder="Enter thumbnail">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="author" class="form-control-label">Podcast Offering</label>
                            <select class="form-control @error('author') input-danger @enderror" name="author" id="author">
                                <option value="1">Life Skils</option>
                                <option value="2">Leading Yourself</option>
                                <option value="3">Leading People</option>
                                <option value="3">Leading Organisation</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label
                                for="podcast_file"
                                class="form-control-label">Video or Audio</label>
                            <input
                                type="text"
                                class="form-control @error('podcast_file') input-danger @enderror"
                                id="podcast_file"
                                name="podcast_file"
                                value="{{ old('podcast_file') }}"
                                aria-describedby="podcast_file"
                                placeholder="Enter podcast_file">
                        </div>
                    </div>

                    <div class="col-lg-12">
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
