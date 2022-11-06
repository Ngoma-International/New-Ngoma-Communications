<form action="{{ route('admins.podcasts.store') }}" method="post" class="form-validate mt-2"
      enctype="multipart/form-data">
    @csrf
    <div class="row g-gs">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="title">Title</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('title') error @enderror"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        placeholder="Enter title"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="thumbnail">Thumbnail</label>
                <div class="form-control-wrap">
                    <input
                        type="file"
                        class="form-control @error('thumbnail') error @enderror"
                        id="thumbnail"
                        name="thumbnail"
                        value="{{ old('thumbnail') }}"
                        placeholder="Enter thumbnail"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="type_podcast_id">Type podcast</label>
                <div class="form-control-wrap">
                    <select
                        class="form-control js-select2 select2-hidden-accessible @error('type_podcast_id') error @enderror"
                        id="type_podcast_id"
                        data-search="on"
                        name="type_podcast_id"
                        data-placeholder="Select a type"
                        required>
                        @foreach($viewModels->typePodcasts() as $type)
                            <option value="{{ $type->id }}">{{ ucfirst($type->name) ?? "" }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="podcast_offering_id">Podcast Offering</label>
                <div class="form-control-wrap">
                    <select
                        class="form-control js-select2 select2-hidden-accessible @error('podcast_offering_id') error @enderror"
                        id="podcast_offering_id"
                        data-search="on"
                        name="podcast_offering_id"
                        data-placeholder="Select a podcast offering"
                        required>
                        @foreach($viewModels->podcastOffering() as $offering)
                            <option value="{{ $offering->id }}">{{ ucfirst($offering->name) ?? "" }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="user_id">Autheur</label>
                <div class="form-control-wrap">
                    <select
                        class="form-control js-select2 select2-hidden-accessible @error('user_id') error @enderror"
                        id="user_id"
                        data-search="on"
                        name="user_id"
                        data-placeholder="Select a user"
                        required>
                        @foreach($viewModels->authors() as $author)
                            <option value="{{ $author->id }}">{{ ucfirst($author->name) ?? "" }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="images_video">Audio or Video</label>
                <div class="form-control-wrap">
                    <input
                        type="file"
                        class="form-control @error('images_video') error @enderror"
                        id="images_video"
                        name="images_video"
                        value="{{ old('images_video') }}"
                        placeholder="Enter mp3 or mp4"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group text-center">
                <button type="submit" class="btn btn-md btn-primary">
                    Save
                </button>
            </div>
        </div>
    </div>
</form>
