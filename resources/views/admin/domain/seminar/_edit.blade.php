<form action="{{ route('admins.seminar.update', $viewModels->seminar->id) }}" method="post" class="form-validate mt-2" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row g-gs">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="type_id">Type</label>
                <div class="form-control-wrap">
                    <select
                        class="form-control js-select2 select2-hidden-accessible @error('type_id') error @enderror"
                        id="type_id"
                        data-search="on"
                        name="type_id"
                        data-placeholder="Select a type d'evenement"
                        required>
                        @foreach($viewModels->types() as $type)
                            <option value="{{ $type->id }}">
                                {{ ucfirst($type->name) ?? "" }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="seminary_type_id">Type d'evenement</label>
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
                <label class="form-label" for="title">Titre de l'evenement</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('title') error @enderror"
                        id="title"
                        name="title"
                        value="{{ old('title') ?? $viewModels->seminar->title }}"
                        placeholder="Enter title"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="sub_title">Sous title evenement</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('sub_title') error @enderror"
                        id="sub_title"
                        name="sub_title"
                        value="{{ old('sub_title') ?? $viewModels->seminar->sub_title }}"
                        placeholder="Enter sub title"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="duration">Duree de l'evenement</label>
                <div class="form-control-wrap">
                    <input
                        type="number"
                        class="form-control @error('duration') error @enderror"
                        id="duration"
                        name="duration"
                        value="{{ old('duration') ?? $viewModels->seminar->duration }}"
                        placeholder="Enter event duration"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="date">Date de l'evenement</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('date') error @enderror"
                        id="date"
                        name="date"
                        value="{{ old('date') ?? $viewModels->seminar->date }}"
                        placeholder="Enter date"
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
                        value="{{ old('city') ?? $viewModels->seminar->address->city }}"
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
                        value="{{ old('prices') ?? $viewModels->seminar->prices }}"
                        placeholder="Enter prices"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label" for="image">
                    Event Poster
                </label>
                <div class="">
                    <input
                        type="file"
                        class="form-control @error('image') error @enderror"
                        id="image"
                        name="image"
                        value="{{ old('image') }}"
                        placeholder="Enter image"
                    >
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="overview">Overview</label>
                <div class="form-control-wrap">
                    <textarea
                        class="form-control form-control-sm @error('overview') error @enderror"
                        id="overview"
                        name="overview"
                        placeholder="Write overview"
                    >{{ old('overview') ?? $viewModels->seminar->overview }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="participate">Who should attend</label>
                <div class="form-control-wrap">
                    <textarea
                        class="form-control form-control-sm @error('participate') error @enderror"
                        id="participate"
                        name="participate"
                        placeholder="Write the participate"
                    >{{ old('participate') ?? $viewModels->seminar->participate }}</textarea>
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
                    >{{ old('description') ?? $viewModels->seminar->description }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group text-center">
                <button type="submit" class="btn btn-md btn-outline-primary">
                    <em class="icon ni ni-save-fill mr-2"></em>
                    Update Event
                </button>
            </div>
        </div>
    </div>
</form>
