@php use App\Enums\RoleEnum; @endphp
@extends('admin.layout.base')

@section('title')
    Detail utilisateur {{ $facilitator->username }}
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        {{ ucfirst($facilitator->username) ?? "" }}
                    @endcomponent

                    @component('admin.shared.banner')
                        <li class="preview-item">
                            <a class="btn btn-outline-primary btn-sm" href="{{ route('admins.facilitator.index') }}">
                                <em class="icon ni ni-arrow-long-left"></em>
                                <span>Tout les animateurs</span>
                            </a>
                        </li>
                            <li class="preview-item">
                                <div class="custom-control custom-control-md custom-switch">
                                    <input
                                        type="checkbox"
                                        class="custom-control-input"
                                        name="activated"
                                        data-id="{{ $facilitator->id }}"
                                        @checked($facilitator->status)
                                        onclick="toggleFacilitatorStatus(event.target, {{ $facilitator->id }});"
                                        id="activated">
                                    <label class="custom-control-label" for="activated"></label>
                                </div>
                            </li>
                            <li class="preview-item">
                                <a
                                    href="{{ route('admins.facilitator.edit', $facilitator->id) }}"
                                    class="btn btn-outline-primary btn-sm">
                                    <em class="icon ni ni-edit mr-1"></em>
                                    Editer
                                </a>
                            </li>
                            <li class="preview-item">
                                <form
                                    action="{{ route('admins.facilitator.destroy', $facilitator->id) }}"
                                    method="POST"
                                    class="d-inline-block"
                                    onsubmit="return confirm('Are you sure you want to delete this item?');"
                                >
                                    @method('DELETE')
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <em class="icon ni ni-trash-empty-fill"></em>
                                        Supprimer l'utilisateur
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
                            <span class="title">Informations personnelles</span>
                        </div>
                        <div class="profile-ud-list">
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Non</span>
                                    <span class="profile-ud-value">{{ ucfirst($facilitator->username) ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Prenom</span>
                                    <span class="profile-ud-value">{{ ucfirst($facilitator->firstname) ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Organisation</span>
                                    <span class="profile-ud-value">{{ ucfirst($facilitator->organisation) ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Position</span>
                                    <span class="profile-ud-value">{{ ucfirst($facilitator->position) ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Email</span>
                                    <span class="profile-ud-value">{{ $facilitator->email ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">N° Telephone</span>
                                    <span class="profile-ud-value">{{ $facilitator->phone ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Country</span>
                                    <span class="profile-ud-value">{{ $facilitator->country ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Status manager</span>
                                    <span class="profile-ud-value">
                                        @if($facilitator->status === true)
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
                        <div class="bq-note">
                            <div class="bq-note-item">
                                <div class="bq-note-text">
                                    <p>
                                        {!! $facilitator->description !!}
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
                                        {{ $facilitator->created_at->format('Y-m-d') }}
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Dernière mise à jour</span>
                                    <span class="profile-ud-value">
                                        {{ $facilitator->updated_at->format('Y-m-d') }}
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
        let toggleFacilitatorStatus = async (_this, id) => {
            const status = $(_this).prop('checked') === true ? 1 : 0;
            let _token = $('meta[name="csrf-token"]').attr('content');
            let data = {
                status: status,
                facilitator: id
            }
            let headers = {
                'Content-type': 'application/json; charset=UTF-8',
                'x-csrf-token': _token,
            }
            await fetch('{{ route('admins.facilitator.status') }}', {
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
