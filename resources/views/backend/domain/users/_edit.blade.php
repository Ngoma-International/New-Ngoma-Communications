<form action="{{ route('admins.users.update', $user->id) }}" method="post" class="form-validate mt-2" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row g-gs">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="name">Votre nom</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('name') error @enderror"
                        id="name"
                        name="name"
                        value="{{ old('name') ?? $user->name }}"
                        placeholder="Enter name"
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
                        value="{{ old('firstname') ?? $user->firstname }}"
                        placeholder="Enter firstname"
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
                        value="{{ old('email') ?? $user->email }}"
                        pattern="\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b"
                        placeholder="Enter email"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="phone_number">Phone number</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('phone_number') error @enderror"
                        id="phone_number"
                        name="phone_number"
                        value="{{ old('phone_number') ?? $user->phone_number }}"
                        placeholder="Enter your phone_number"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="images">Profile picture</label>
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
                <label class="form-label" for="profession">Profession</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('profession') error @enderror"
                        id="profession"
                        name="profession"
                        value="{{ old('profession') ?? $user->profession }}"
                        placeholder="Enter profession"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="role">User type</label>
                <div class="form-control-wrap">
                    <select
                        class="form-control js-select2 select2-hidden-accessible @error('role') error @enderror"
                        id="role"
                        data-search="on"
                        name="role"
                        data-placeholder="Select a type"
                        required>
                        <option value="3">Facilitator</option>
                        <option value="2">Coach</option>
                        <option value="1">Admin</option>
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
                    >{{ old('description') ?? $user->description }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-primary">
                    <em class="icon ni ni-save mr-2"></em>
                    Save
                </button>
            </div>
        </div>
    </div>
</form>
