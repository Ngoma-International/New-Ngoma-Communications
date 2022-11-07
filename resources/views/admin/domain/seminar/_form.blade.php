<form action="{{ route('admins.seminar.store') }}" method="post" class="form-validate mt-2"
      enctype="multipart/form-data">
    @csrf
    <div class="row g-gs">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="category_id">Categorie</label>
                <div class="form-control-wrap">
                    <select
                            class="form-control js-select2 select2-hidden-accessible @error('category_id') error @enderror"
                            id="category_id"
                            data-search="on"
                            name="category_id"
                            data-placeholder="Select a categorie"
                            required>
                        @foreach($viewModels->categories() as $category)
                            <option value="{{ $category->id }}">
                                {{ ucfirst($category->name) ?? "" }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="seminary_type_id">Type de Seminaire</label>
                <div class="form-control-wrap">
                    <select
                            class="form-control js-select2 select2-hidden-accessible @error('seminary_type_id') error @enderror"
                            id="seminary_type_id"
                            data-search="on"
                            name="seminary_type_id"
                            data-placeholder="Select a Seminary type"
                            required>
                        @foreach($viewModels->seminaries() as $seminary)
                            <option value="{{ $seminary->id }}">
                                {{ ucfirst($seminary->name) ?? "" }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="user_id">Facilitator</label>
                <div class="form-control-wrap">
                    <select
                            class="form-control js-select2 select2-hidden-accessible @error('user_id') error @enderror"
                            id="user_id"
                            data-search="on"
                            name="user_id"
                            data-placeholder="Select a user"
                            required>
                        @foreach($viewModels->facilitators() as $facilitators)
                            <option value="{{ $facilitators->id }}">
                                {{ ucfirst($facilitators->name) ?? "" }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="name">Seminar Name</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control @error('name') error @enderror"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Enter name"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="country">Country</label>
                <div class="form-control-wrap">
                    <select
                            class="form-control js-select2 select2-hidden-accessible @error('country') error @enderror"
                            id="country"
                            data-search="on"
                            name="country"
                            data-placeholder="Select a country"
                            required>
                        @include('admin.shared.seminar._country')
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="city">City</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control @error('city') error @enderror"
                            id="city"
                            name="city"
                            value="{{ old('city') }}"
                            placeholder="Enter city"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="prices">Prices</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control @error('prices') error @enderror"
                            id="prices"
                            name="prices"
                            value="{{ old('prices') }}"
                            placeholder="Enter prices"
                            required>
                </div>
            </div>
        </div>

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


        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="date">Date</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control date-picker @error('date') error @enderror"
                            id="date"
                            name="date"
                            data-date-format="yyyy-mm-dd"
                            value="{{ old('date') }}"
                            placeholder="Enter prices"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="address_seminary">Event venue</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control @error('address_seminary') error @enderror"
                            id="address_seminary"
                            name="address_seminary"
                            value="{{ old('address_seminary') }}"
                            placeholder="Enter address seminary"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="images">
                    Seminar Poster
                </label>
                <div class="form-control-wrap">
                    <input
                            type="file"
                            class="form-control @error('images') error @enderror"
                            id="images"
                            name="images"
                            value="{{ old('images') }}"
                            placeholder="Enter images"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="attend">Seminar Outline</label>
                <div class="form-control-wrap">
                    <textarea
                            class="form-control form-control-sm @error('attend') error @enderror"
                            id="attend"
                            name="attend"
                            placeholder="Write the attend"
                    >{{ old('attend') }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="overview">Who should attend</label>
                <div class="form-control-wrap">
                    <textarea
                            class="form-control form-control-sm @error('overview') error @enderror"
                            id="overview"
                            name="overview"
                            placeholder="Write the overview"
                    >{{ old('overview') }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label" for="description">Description</label>
                <div class="form-control-wrap">
                    <textarea
                            class="form-control form-control-sm @error('description') error @enderror"
                            id="description"
                            name="description"
                            placeholder="Write the description"
                    >{{ old('description') }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group text-center">
                <button type="submit" class="btn btn-md btn-outline-primary">
                    <em class="icon ni ni-save-fill mr-2"></em>
                    Save
                </button>
            </div>
        </div>
    </div>
</form>
