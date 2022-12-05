@extends('admin.layout.base')

@section('title')
    Detail collective
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        {{ ucfirst($collective->organisation_name) ?? "" }}
                    @endcomponent

                    @component('admin.shared.banner')
                        <li class="preview-item">
                            <a class="btn btn-outline-primary btn-sm" href="{{ route('admins.collective.index') }}">
                                <em class="icon ni ni-arrow-long-left"></em>
                                <span>Tout les membres</span>
                            </a>
                        </li>
                            <li class="preview-item">
                                <div class="custom-control custom-control-md custom-switch">
                                    <input
                                        type="checkbox"
                                        class="custom-control-input"
                                        name="activated"
                                        data-id="{{ $collective->organisation_register_number }}"
                                        @checked($collective->status)
                                        onclick="changeCollectiveStatus(event.target, {{ $collective->organisation_register_number }});"
                                        id="activated">
                                    <label class="custom-control-label" for="activated"></label>
                                </div>
                            </li>
                            <li class="preview-item">
                                <form
                                    action="{{ route('admins.collective.destroy', $collective->id) }}"
                                    method="POST"
                                    class="d-inline-block"
                                    onsubmit="return confirm('Are you sure you want to delete this item?');"
                                >
                                    @method('DELETE')
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <em class="icon ni ni-trash-empty-fill"></em>
                                        Supprimer
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
                                    <span class="profile-ud-label">Nom organisation</span>
                                    <span class="profile-ud-value">{{ ucfirst($collective->organisation_name) ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Numero Organisation</span>
                                    <span class="profile-ud-value">{{ $collective->organisation_register_number ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Industrie organisation</span>
                                    <span class="profile-ud-value">{{ $collective->organisation_industry ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Pays organisation</span>
                                    <span class="profile-ud-value">{{ $collective->organisation_country ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Secteur Organisation</span>
                                    <span class="profile-ud-value">{{ $collective->organisation_position ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Ville organisation</span>
                                    <span class="profile-ud-value">{{ $collective->organisation_city ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Province Organisation</span>
                                    <span class="profile-ud-value">{{ $collective->organisation_province ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Webiste orgnisation</span>
                                    <span class="profile-ud-value">{{ $collective->organisation_website ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Member username</span>
                                    <span class="profile-ud-value">{{ $collective->member_username ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Member lastname</span>
                                    <span class="profile-ud-value">{{ $collective->member_lastname ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Member email</span>
                                    <span class="profile-ud-value">{{ $collective->member_email ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Member phone</span>
                                    <span class="profile-ud-value">{{ $collective->member_phone ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Member Job title </span>
                                    <span class="profile-ud-value">{{ $collective->member_job_title ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Member Number</span>
                                    <span class="profile-ud-value">{{ $collective->member_number ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Contact username</span>
                                    <span class="profile-ud-value">{{ $collective->contact_username ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Contact firstname</span>
                                    <span class="profile-ud-value">{{ $collective->contact_firstname ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Contact email</span>
                                    <span class="profile-ud-value">{{ $collective->contact_email ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Contact phone</span>
                                    <span class="profile-ud-value">{{ $collective->contact_phone ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Contact job title</span>
                                    <span class="profile-ud-value">{{ $collective->contact_job_title ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Matricule</span>
                                    <span class="profile-ud-value">{{ $collective->matricule ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Status manager</span>
                                    <span class="profile-ud-value">
                                        @if($collective->status === true)
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
        let changeCollectiveStatus = async (_this, id) => {
            const status = $(_this).prop('checked') === true ? 1 : 0;
            let _token = $('meta[name="csrf-token"]').attr('content');
            let data = {
                status: status,
                collective: id
            }
            let headers = {
                'Content-type': 'application/json; charset=UTF-8',
                'x-csrf-token': _token,
            }
            await fetch('{{ route('admins.collective.status') }}', {
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
