@extends('admin.layout.base')

@section('title')
    Detail evenement
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        {{ ucfirst($viewModels->seminar->title) ?? "" }}
                    @endcomponent

                    @component('admin.shared.banner')
                        <li class="preview-item">
                            <a class="btn btn-outline-primary btn-sm" href="{{ $viewModels->indexUrl }}">
                                <em class="icon ni ni-arrow-long-left"></em>
                                <span>All Events</span>
                            </a>
                        </li>
                            <li class="preview-item">
                                <div class="custom-control custom-control-md custom-switch">
                                    <input
                                        type="checkbox"
                                        class="custom-control-input"
                                        name="activated"
                                        data-id="{{ $viewModels->seminar->id }}"
                                        @checked($viewModels->seminar->status )
                                        onclick="changeRoomStatus(event.target, {{ $viewModels->seminar->id }});"
                                        id="activated">
                                    <label class="custom-control-label" for="activated"></label>
                                </div>
                            </li>
                        <li class="preview-item">
                            <a
                                    href="{{ $viewModels->editUrl }}"
                                    class="btn btn-outline-primary btn-sm">
                                <em class="icon ni ni-edit mr-1"></em>
                                Edit
                            </a>
                        </li>
                        <li class="preview-item">
                            <form
                                    action="{{ $viewModels->deleteUrl }}"
                                    method="POST"
                                    class="d-inline-block"
                                    onsubmit="return confirm('Are you sure you want to delete this item?');"
                            >
                                @method('DELETE')
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                    <em class="icon ni ni-trash-empty-fill"></em>
                                    Delete
                                </button>
                            </form>
                        </li>
                    @endcomponent
                </div>
            </div>
            @component('admin.shared.section')
                <div class="card-inner">
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <span class="title">Seminar Information</span>
                        </div>
                        <div class="profile-ud-list">
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Event Title</span>
                                    <span class="profile-ud-value">
                                        {{ ucfirst($viewModels->seminar->title) ?? "" }}
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Event Sub title</span>
                                    <span class="profile-ud-value">
                                        {{ ucfirst($viewModels->seminar->sub_title) ?? "" }}
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Event Type</span>
                                    <span class="profile-ud-value">
                                        {{ $viewModels->type()->name ?? "" }}
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Seminar Type</span>
                                    <span class="profile-ud-value">
                                        {{ ucfirst($viewModels->getSeminarType()->name) ?? "" }}
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Seminar Date</span>
                                    <span class="profile-ud-value">
                                        {{ ucfirst($viewModels->seminar()->date) ?? "" }}
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Event Duration</span>
                                    <span class="profile-ud-value">
                                        {{ $viewModels->seminar->duration ?? "" }} Heures
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Seminar Country</span>
                                    <span class="profile-ud-value">
                                        {{ ucfirst($viewModels->seminar->address->country) ?? "" }}
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Event City</span>
                                    <span class="profile-ud-value">
                                        {{ ucfirst($viewModels->seminar->address->city) ?? "" }}
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Seminar Prices</span>
                                    <span class="profile-ud-value">
                                        $ {{ $viewModels->seminar()->prices ?? "" }}
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Seminar Status</span>
                                    <span class="profile-ud-value">
                                        @if($viewModels->seminar()->status)
                                            <span class="badge badge-success ms-0">Activée</span>
                                        @else
                                            <span class="badge badge-danger ms-0">Désactivée</span>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-divider divider md"></div>
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <span class="title">Event Overview</span>
                        </div>
                        <div class="bq-note">
                            <div class="bq-note-item">
                                <div class="bq-note-text">
                                    <p>
                                        {{ $viewModels->seminar->overview ?? "" }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-divider divider md"></div>
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <span class="title">Event Participate</span>
                        </div>
                        <div class="bq-note">
                            <div class="bq-note-item">
                                <div class="bq-note-text">
                                    <p>
                                        {{ $viewModels->seminar->participate }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-divider divider md"></div>
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <span class="title">Seminar Description</span>
                        </div>
                        <div class="bq-note">
                            <div class="bq-note-item">
                                <div class="bq-note-text">
                                    <p>
                                        {!! $viewModels->seminar->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-divider divider md"></div>
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <span class="title">Informations supplémentaires</span>
                        </div>
                        <div class="profile-ud-list">
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Date de creation</span>
                                    <span class="profile-ud-value">
                                        {{ $viewModels->seminar->created_at->format('Y-m-d') }}
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Dernière mise à jour</span>
                                    <span class="profile-ud-value">
                                        {{ $viewModels->seminar->updated_at->format('Y-m-d') }}
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Code seminar</span>
                                    <span class="profile-ud-value">
                                        {!! QrCode::size(100)->generate($viewModels->seminar()->date); !!}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endcomponent
        </div>
    </div>
@endsection

@section('scripts')
    <script>

        let changeRoomStatus = async (_this, id) => {
            const status = $(_this).prop('checked') === true ? 1 : 0;
            let _token = $('meta[name="csrf-token"]').attr('content');
            let data = {
                status: status,
                seminar: id
            }
            let headers = {
                'Content-type': 'application/json; charset=UTF-8',
                'x-csrf-token': _token,
            }

            await fetch('{{ route('admins.seminar.status') }}', {
                method: "POST",
                body: JSON.stringify(data),
                headers: headers
            })
                .then(response => response.json())
                .then((data) => {
                    var result = Object.values(data)
                    Swal.fire(`Status ${result[1].name}`, `${result[0]}`, 'success')
                })
                .catch((error) => {
                    Swal.fire("Bonne nouvelle", "Operation executez avec success", "success")
                })
        }
    </script>
@endsection
