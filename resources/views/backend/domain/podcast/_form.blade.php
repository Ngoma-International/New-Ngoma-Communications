<form action="{{ route('admins.podcast.store') }}" method="post" class="form-validate mt-2" enctype="multipart/form-data">
    @csrf
    <div class="row g-gs">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="type">Type</label>
                <div class="form-control-wrap">
                    <select
                        class="form-control js-select2 select2-hidden-accessible @error('type') error @enderror"
                        id="type"
                        data-search="on"
                        name="type"
                        data-placeholder="Select a type"
                        required>
                        <option value="audio">Audio</option>
                        <option value="video">Video</option>
                    </select>
                </div>
            </div>
        </div>

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
                <label class="form-label" for="author">Author</label>
                <div class="form-control-wrap">
                    <select
                        class="form-control js-select2 select2-hidden-accessible @error('author') error @enderror"
                        id="author"
                        data-search="on"
                        name="author"
                        data-placeholder="Select a author"
                        required>
                        <option value="facilitator">Facilitator</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="offering">Offering</label>
                <div class="form-control-wrap">
                    <select
                        class="form-control js-select2 select2-hidden-accessible @error('offering') error @enderror"
                        id="offering"
                        data-search="on"
                        name="offering"
                        data-placeholder="Select a offering"
                        required>
                        <option value="leading_yourself">Leading Yourself</option>
                        <option value="leading_people">Leading People</option>
                        <option value="leading_organisation">Leading Organisation</option>
                        <option value="live_skills">Live Skills</option>
                        <option value="thusa_life_skills">Thusa Live Skills</option>
                    </select>
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
                <label class="form-label" for="file">Video or Audio file</label>
                <div class="form-control-wrap">
                    <input
                        type="file"
                        class="form-control @error('file') error @enderror"
                        id="file"
                        name="file"
                        value="{{ old('file') }}"
                        placeholder="Enter file"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group text-center">
                <button type="submit" class="btn btn-md btn-primary">Save</button>
            </div>
        </div>
    </div>
</form>
