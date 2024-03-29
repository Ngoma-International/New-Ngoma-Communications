<form action="{{ route('admins.facilitator.update', $facilitator->id) }}" method="post" class="form-validate mt-2" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row g-gs">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="username">Votre nom</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('username') error @enderror"
                        id="username"
                        name="username"
                        value="{{ old('username') ?? $facilitator->username }}"
                        placeholder="Enter username"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="firstname">Votre prenom</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('firstname') error @enderror"
                        id="firstname"
                        name="firstname"
                        value="{{ old('firstname') ?? $facilitator->firstname }}"
                        placeholder="Enter firstname"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="organisation">Organisation</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('organisation') error @enderror"
                        id="organisation"
                        name="organisation"
                        value="{{ old('organisation') ?? $facilitator->organisation }}"
                        placeholder="Enter organisation name"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="position">Position</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('position') error @enderror"
                        id="position"
                        name="position"
                        value="{{ old('position') ?? $facilitator->position }}"
                        placeholder="Enter your position"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <div class="form-control-wrap">
                    <input
                        type="email"
                        class="form-control @error('email') error @enderror"
                        id="email"
                        name="email"
                        value="{{ old('email') ?? $facilitator->email }}"
                        pattern="\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b"
                        placeholder="Enter email"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="phone">Phone number</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('phone') error @enderror"
                        id="phone"
                        name="phone"
                        value="{{ old('phone') ?? $facilitator->phone }}"
                        placeholder="Enter your phone"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="image">Profile picture</label>
                <div class="form-control-wrap">
                    <input
                        type="file"
                        class="form-control @error('image') error @enderror"
                        id="image"
                        name="image"
                        value="{{ old('image') }}"
                        placeholder="Enter image"
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

        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label" for="description">Description</label>
                <div class="form-control-wrap">
                    <textarea
                        class="form-control form-control-sm @error('description') error @enderror"
                        id="description"
                        name="description"
                        placeholder="Write the description"
                    >{{ old('description') ?? $facilitator->description }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-primary">
                    <em class="icon ni ni-save mr-2"></em>
                    Update Facilitator
                </button>
            </div>
        </div>
    </div>
</form>
