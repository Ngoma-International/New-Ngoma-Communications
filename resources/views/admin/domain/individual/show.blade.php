@extends('admin.layout.base')

@section('title')
    Detail utilisateur {{ $member->username ?? "" }}
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        {{ ucfirst($member->username) ?? "" }}
                    @endcomponent

                    @component('admin.shared.banner')
                        <li class="preview-item">
                            <a class="btn btn-outline-primary btn-sm" href="{{ route('admins.member.index') }}">
                                <em class="icon ni ni-arrow-long-left"></em>
                                <span>Tout les membres individuelles</span>
                            </a>
                        </li>
                            <li class="preview-item">
                                <div class="custom-control custom-control-md custom-switch">
                                    <input
                                        type="checkbox"
                                        class="custom-control-input"
                                        name="activated"
                                        data-id="{{ $member->phone_number }}"
                                        @checked($member->status)
                                        onclick="changeIndividualMemberStatus(event.target, {{ $member->phone_number }});"
                                        id="activated">
                                    <label class="custom-control-label" for="activated"></label>
                                </div>
                            </li>
                            <li class="preview-item">
                                <form
                                    action="{{ route('admins.member.destroy', $member->id) }}"
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
                                    <span class="profile-ud-label">Nom</span>
                                    <span class="profile-ud-value">{{ ucfirst($member->username) ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Prenom</span>
                                    <span class="profile-ud-value">{{ ucfirst($member->firstname) ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Email</span>
                                    <span class="profile-ud-value">{{ $member->email ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">N° Telephone</span>
                                    <span class="profile-ud-value">{{ $member->phone_number ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Date Naissance</span>
                                    <span class="profile-ud-value">{{ $member->birthday ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Pays d'origine</span>
                                    <span class="profile-ud-value">{{ $member->country ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Ville d'origine</span>
                                    <span class="profile-ud-value">{{ $member->city ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Role</span>
                                    <span class="profile-ud-value">{{ $member->position ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Departement</span>
                                    <span class="profile-ud-value">{{ $member->department ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Secteur</span>
                                    <span class="profile-ud-value">{{ $member->sector ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Matricule</span>
                                    <span class="profile-ud-value">{{ $member->matricule ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Status manager</span>
                                    <span class="profile-ud-value">
                                        @if($member->status === true)
                                            <span class="badge badge-success ms-0">Activée</span>
                                        @else
                                            <span class="badge badge-danger ms-0">Désactivée</span>
                                        @endif
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
        let changeIndividualMemberStatus = async (_this, id) => {
            const status = $(_this).prop('checked') === true ? 1 : 0;
            let _token = $('meta[name="csrf-token"]').attr('content');
            let data = {
                status: status,
                member: id
            }
            let headers = {
                'Content-type': 'application/json; charset=UTF-8',
                'x-csrf-token': _token,
            }
            await fetch('{{ route('admins.member.status') }}', {
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
