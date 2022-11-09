@php use App\Enums\RoleEnum; @endphp
@extends('admin.layout.base')

@section('title')
    Detail utilisateur {{ $user->name }}
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        {{ ucfirst($user->name) ?? "" }}
                    @endcomponent

                    @component('admin.shared.banner')
                        <li class="preview-item">
                            <a class="btn btn-outline-primary btn-sm" href="{{ route('admins.users.index') }}">
                                <em class="icon ni ni-arrow-long-left"></em>
                                <span>Tout les utilisateurs</span>
                            </a>
                        </li>
                        @if(auth()->id() === $user->id)
                        @else
                            <li class="preview-item">
                                <div class="custom-control custom-control-md custom-switch">
                                    <input
                                        type="checkbox"
                                        class="custom-control-input"
                                        name="activated"
                                        data-id="{{ $user->id }}"
                                        @checked($user->status)
                                        onclick="changeUserStatus(event.target, {{ $user->id }});"
                                        id="activated">
                                    <label class="custom-control-label" for="activated"></label>
                                </div>
                            </li>
                        @endif
                        <li class="preview-item">
                            <a
                                href="{{ route('admins.users.edit', $user->id) }}"
                                class="btn btn-outline-primary btn-sm">
                                <em class="icon ni ni-edit mr-1"></em>
                                Editer
                            </a>
                        </li>
                        @if(auth()->id() === $user->id)
                            <li class="preview-item">
                                <a
                                        href=""
                                        class="btn btn-outline-secondary btn-sm">
                                    <em class="icon ni ni-user-c mr-1"></em>
                                    Voir profile
                                </a>
                            </li>
                        @else
                            <li class="preview-item">
                                <form
                                        action="{{ route('admins.users.destroy', $user->id) }}"
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
                        @endif
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
                                    <span class="profile-ud-label">Nom du manager</span>
                                    <span class="profile-ud-value">{{ ucfirst($user->name) ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Prenom manager</span>
                                    <span class="profile-ud-value">{{ ucfirst($user->firstname) ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Email manager</span>
                                    <span class="profile-ud-value">{{ $user->email ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">N° Telephone</span>
                                    <span class="profile-ud-value">{{ $user->phone_number ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Address manager</span>
                                    <span class="profile-ud-value">{{ $user->address ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Status manager</span>
                                    <span class="profile-ud-value">
                                        @if($user->status)
                                            <span class="badge badge-success ms-0">Activée</span>
                                        @else
                                            <span class="badge badge-danger ms-0">Désactivée</span>
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Role manager</span>
                                    <span class="profile-ud-value">
                                        @if($user->role_id === \App\Enums\RoleEnum::Role_Admin)
                                            <span class="badge badge-primary ms-0">Admin</span>
                                        @elseif($user->role_id === \App\Enums\RoleEnum::Role_Advisor)
                                            <span class="badge badge-secondary ms-0">Advisor</span>
                                        @else
                                            <span class="badge badge-danger ms-0">Facilitator</span>
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Profession</span>
                                    <span class="profile-ud-value">{{ $user->profession ?? "" }}</span>
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
                                        {!! $user->description !!}
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
                                        {{ $user->created_at->format('Y-m-d') }}
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Dernière mise à jour</span>
                                    <span class="profile-ud-value">
                                        {{ $user->updated_at->format('Y-m-d') }}
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
        let changeUserStatus = async (_this, id) => {
            const status = $(_this).prop('checked') === true ? 1 : 0;
            let _token = $('meta[name="csrf-token"]').attr('content');
            let data = {
                status: status,
                user: id
            }
            let headers = {
                'Content-type': 'application/json; charset=UTF-8',
                'x-csrf-token': _token,
            }
            await fetch('{{ route('admins.users.status') }}', {
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
