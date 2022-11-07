@extends('admin.layout.base')

@section('title')
    Edition du profile
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            @component('admin.shared.section')
                <div class="nk-block">
                    <div class="card">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head nk-block-head-lg">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Mettre à jour vos informations personnelles</h4>
                                            <div class="nk-block-des">
                                                <p>Ces paramètres vous aident à assurer la sécurité de votre compte.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <div class="card border border-light">
                                        <div class="card-inner-group">
                                            <div class="card-inner">
                                                <div class="between-center flex-wrap g-3">
                                                    <div class="nk-block-text">
                                                        <h6>Mot de passe</h6>
                                                    </div>
                                                    <div class="nk-block-actions flex-shrink-sm-0">
                                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                            <li>
                                                                <a href="{{ route('admins.profile.password') }}"
                                                                   class="btn btn-outline-primary">
                                                                    <em class="icon ni ni-edit-alt mr-2"></em>
                                                                    Modifier le mot de passe
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-inner">
                                                <div class="between-center flex-wrap g-3">
                                                    <div class="nk-block-text">
                                                        <h6>Modifier le profile</h6>
                                                    </div>
                                                    <div class="nk-block-actions flex-shrink-sm-0">
                                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                            <li>
                                                                <a href="{{ route('admins.profile.edit') }}"
                                                                   class="btn btn-outline-primary">
                                                                    <em class="icon ni ni-edit-alt mr-2"></em>
                                                                    Modifier le profile
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-inner">
                                                <div class="between-center flex-wrap g-3">
                                                    <div class="nk-block-text">
                                                        <h6>Ajouter votre cursus</h6>
                                                    </div>
                                                    <div class="nk-block-actions flex-shrink-sm-0">
                                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                            <li>
                                                                <a href="{{ route('admins.profile.edit') }}"
                                                                   class="btn btn-outline-primary">
                                                                    <em class="icon ni ni-edit-alt mr-2"></em>
                                                                    Ajouter cursus
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @include('admin.shared.setting._aside')
                        </div>
                    </div>
                </div>
            @endcomponent
        </div>
    </div>
@endsection

@section('styles')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet"/>
@endsection

@section('scripts')
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script>
        const inputElement = document.querySelector('input[id="images"]');
        let _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

        const pont = FilePond.create(inputElement);
        pont.setOptions({
            server: {
                url: '/admins/profile/upload',
                headers: {
                    'X-CSRF-Token': _token
                }
            }
        })
    </script>
@endsection
