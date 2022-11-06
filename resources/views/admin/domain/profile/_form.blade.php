<form action="{{ $viewModel->updateUrl }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6 mb-2">
            <div class="form-group">
                <label class="form-label" for="name">Nom</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control @error('name') error @enderror"
                            id="name"
                            name="name"
                            value="{{ old('name') ?? $viewModel->user->name }}"
                            placeholder="Enter Username"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-2">
            <div class="form-group">
                <label class="form-label" for="firstname">Post-nom</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control @error('firstname') error @enderror"
                            id="firstname"
                            name="firstname"
                            value="{{ old('firstname') ?? $viewModel->user->firstname }}"
                            placeholder="Enter Votre prenom"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6  mb-2">
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control @error('email') error @enderror"
                            id="email"
                            name="email"
                            value="{{ old('email') ?? $viewModel->user->email }}"
                            placeholder="Enter Email"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-2">
            <div class="form-group">
                <label class="form-label" for="phone_number">Telephone</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control @error('phone_number') error @enderror"
                            id="phone_number"
                            name="phone_number"
                            value="{{ old('phone_number') ?? $viewModel->user->phone_number }}"
                            placeholder="Enter Phone number"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-2">
            <div class="form-group">
                <label class="form-label" for="birthdays">Birthdays</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control date-picker @error('phone_number') error @enderror"
                            id="birthdays"
                            name="birthdays"
                            data-date-format="yyyy-mm-dd"
                            value="{{ old('birthdays') ?? $viewModel->profile()->birthdays }}"
                            placeholder="Enter your birthday"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-2">
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

        <div class="col-md-6 mb-2">
            <div class="form-group">
                <label class="form-label" for="city">City</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control @error('city') error @enderror"
                            id="city"
                            name="city"
                            value="{{ old('city') ?? $viewModel->profile()->city }}"
                            placeholder="Enter city"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-2">
            <div class="form-group">
                <label class="form-label" for="town">Province</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control @error('town') error @enderror"
                            id="town"
                            name="town"
                            value="{{ old('town') ?? $viewModel->profile()->town }}"
                            placeholder="Enter your town"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-2">
            <div class="form-group">
                <label class="form-label" for="enterprise">Entreprise</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control @error('enterprise') error @enderror"
                            id="enterprise"
                            name="enterprise"
                            value="{{ old('enterprise') ?? $viewModel->profile()->enterprise }}"
                            placeholder="Enter your enterprise"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-2">
            <div class="form-group">
                <label class="form-label" for="role_enterprise">Fonction</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control @error('role_enterprise') error @enderror"
                            id="role_enterprise"
                            name="role_enterprise"
                            value="{{ old('role_enterprise') ?? $viewModel->profile()->role_enterprise }}"
                            placeholder="Enter your role"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-2">
            <div class="form-group">
                <label class="form-label" for="department">Departement</label>
                <div class="form-control-wrap">
                    <input
                            type="text"
                            class="form-control @error('department') error @enderror"
                            id="department"
                            name="department"
                            value="{{ old('department') ?? $viewModel->profile()->department }}"
                            placeholder="Enter your department"
                            required>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-2">
            <div class="form-group">
                <label class="form-label" for="sector">Secteur</label>
                <div class="form-control-wrap">
                    <select
                            class="form-control js-select2 select2-hidden-accessible @error('sector') error @enderror"
                            id="sector"
                            data-search="on"
                            name="sector"
                            data-placeholder="Select a sector"
                            required>
                        @include('admin.domain.profile._sector')
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-2">
            <div class="form-group">
                <label class="form-label" for="images">Images</label>
                <div class="form-control-wrap">
                    <input
                            type="file"
                            id="images"
                            name="images"
                            placeholder="Enter images"
                    >
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
                    >{{ old('description') ?? $viewModel->user->description }}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center mt-3">
        <div class="form-group ">
            <button type="submit" class="btn btn-md btn-outline-primary">
                Update Profile
            </button>
        </div>
    </div>
</form>
