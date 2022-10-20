@extends('backend.layout.base')

@section('title')
    Edition du profile
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            @component('backend.shared.section')
                <div class="nk-block">
                    <div class="card">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head nk-block-head-lg">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">
                                                    Personal Information
                                                </h4>
                                                <div class="nk-block-des">
                                                    <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-block">
                                        <div class="card border border-light">
                                            <div class="card-inner-group">
                                                <div class="nk-data data-list">
                                                    <div class="card-inner">
                                                        <div class="data-item pb-1 pt-0">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">Name</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    {{ ucfirst($viewModel->user->name) ?? "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="data-item pb-1 pt-1">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">Firstname</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    {{ ucfirst($viewModel->user->firstname) ?? "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="data-item pb-1 pt-1">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">Email</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    {{ $viewModel->user->email ?? "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="data-item pb-1 pt-1">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">Phone Number</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    {{ $viewModel->user->phone_number ?? "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="data-item pb-1 pt-1">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">Profession</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    {{ $viewModel->user->profession ?? "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="data-item pb-1 pt-1">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">Status</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    @if($viewModel->user->status )
                                                                        <span class="badge badge-success ms-0">Activée</span>
                                                                    @else
                                                                        <span class="badge badge-danger ms-0">Désactivée</span>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="data-item pb-1 pt-1">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">Birthdays</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    {{ $viewModel->profile->birthdays ?? "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="data-item pb-1 pt-1">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">Country</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    {{ $viewModel->profile->country ?? "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="data-item pb-1 pt-1">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">City</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    {{ $viewModel->profile->city ?? "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="data-item pb-1 pt-1">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">Town</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    {{ $viewModel->profile->town ?? "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="data-item pb-1 pt-1">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">Enterprise</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    {{ $viewModel->profile->enterprise ?? "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="data-item pb-1 pt-1">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">Role entreprise</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    {{ $viewModel->profile->role_enterprise ?? "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="data-item pb-1 pt-1">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">Department</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    {{ $viewModel->profile->department ?? "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="data-item pb-0 pt-1">
                                                            <div class="data-col">
                                                                <span class="data-label font-weight-bold">Sector</span>
                                                            </div>
                                                            <div class="data-col data-col-end">
                                                                <span class="data-value">
                                                                    {{ $viewModel->profile->section ?? "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border border-light">
                                            <div class="card-inner-group">
                                                <div class="card-inner">
                                                    <div class="between-center flex-wrap g-3">
                                                        <div class="nk-block-text">
                                                            <h6>Mot de passe</h6>
                                                            <p>
                                                                Définissez un mot de passe unique pour protéger votre compte.
                                                            </p>
                                                        </div>
                                                        <div class="nk-block-actions flex-shrink-sm-0">
                                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                                <li>
                                                                    <a href="{{ route('admins.profile.password') }}" class="btn btn-outline-primary">
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
                                                            <p>
                                                                Définissez un mot de passe unique pour protéger votre compte.
                                                            </p>
                                                        </div>
                                                        <div class="nk-block-actions flex-shrink-sm-0">
                                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                                <li>
                                                                    <a href="{{ route('admins.profile.edit') }}" class="btn btn-outline-primary">
                                                                        <em class="icon ni ni-edit-alt mr-2"></em>
                                                                        Modifier le profile
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
                            </div>
                            @include('backend.shared.setting._aside')
                        </div>
                    </div>
                </div>
            @endcomponent
        </div>
    </div>
@endsection
