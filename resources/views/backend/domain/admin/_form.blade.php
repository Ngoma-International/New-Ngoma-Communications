<form action="{{ route('admins.users.store') }}" method="post" class="form-validate mt-2" enctype="multipart/form-data">
    @csrf
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
                        value="{{ old('name') }}"
                        placeholder="Enter name"
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
                        value="{{ old('email') }}"
                        pattern="\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b"
                        placeholder="Enter email"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="type">User type</label>
                <div class="form-control-wrap">
                    <select
                        class="form-control js-select2 select2-hidden-accessible @error('type') error @enderror"
                        id="type"
                        data-search="on"
                        name="type"
                        data-placeholder="Select a type"
                        required>
                        <option value="facilitator">MIn Admin level</option>
                        <option value="coach">Mailer</option>
                        <option value="keynote">Ticket facilitator</option>
                    </select>
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

        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <div class="form-control-wrap">
                    <input
                        type="password"
                        class="form-control @error('password') error @enderror"
                        id="password"
                        name="password"
                        value="{{ old('password') }}"
                        placeholder="Enter password"
                        required>
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
                <button type="submit" class="btn btn-md btn-primary">Save</button>
            </div>
        </div>
    </div>
</form>
