<form action="{{ $viewModel->updateUrl ?? "" }}" method="post" class="form-validate mt-2">
    @csrf
    @method('PUT')
    <div class="row g-gs">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="seminar_id">Evenement</label>
                <div class="form-control-wrap">
                    <select
                        class="form-control js-select2 select2-hidden-accessible @error('seminar_id') error @enderror"
                        id="seminar_id"
                        data-search="on"
                        name="seminar_id"
                        data-placeholder="Select a Seminary"
                        required>
                        @foreach($viewModel->events() as $event)
                            <option value="{{ $event->id }}">
                                {{ ucfirst($event->title) ?? "" }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="facilitator_id">Facilitator</label>
                <div class="form-control-wrap">
                    <select
                        class="form-control js-select2 select2-hidden-accessible @error('facilitator_id') error @enderror"
                        id="facilitator_id"
                        data-search="on"
                        name="facilitator_id"
                        data-placeholder="Select a facilitator"
                        required>
                        @foreach($viewModel->facilitators() as $facilitator)
                            <option value="{{ $facilitator->id }}">
                                {{ ucfirst($facilitator->username) ?? "" }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="title">Titre</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('title') error @enderror"
                        id="title"
                        name="title"
                        value="{{ old('title') ?? $viewModel->program->title }}"
                        placeholder="Enter title"
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
                        value="{{ old('date') ?? $viewModel->program->date }}"
                        placeholder="Enter date"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="start_time">Heure de debut</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('start_time') error @enderror"
                        id="start_time"
                        name="start_time"
                        value="{{ old('start_time') ?? $viewModel->program->start_time }}"
                        placeholder="Enter start time"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="end_time">Heure de fin</label>
                <div class="form-control-wrap">
                    <input
                        type="text"
                        class="form-control @error('end_time') error @enderror"
                        id="end_time"
                        name="end_time"
                        value="{{ old('end_time') ?? $viewModel->program->end_time }}"
                        placeholder="Enter end time"
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
                    >{{ old('description') ?? $viewModel->program->description }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group text-center">
                <button type="submit" class="btn btn-md btn-outline-primary">
                    <em class="icon ni ni-save-fill mr-2"></em>
                    Update Programs
                </button>
            </div>
        </div>
    </div>
</form>
