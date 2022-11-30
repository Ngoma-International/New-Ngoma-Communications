@extends('admin.layout.base')

@section('title')
    Gestion managers
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        Liste des managers
                    @endcomponent

                    @component('admin.shared.banner')
                        <li class="preview-item">
                            <a href="{{ route('admins.users.create') }}" class="btn btn-outline-primary btn-sm">
                                <em class="icon ni ni-plus mr-1"></em> Create
                            </a>
                        </li>
                    @endcomponent
                </div>
            </div>
            @component('admin.shared.section')
                <div class="card-inner">
                    <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="true">
                        <thead>
                        <tr class="nk-tb-item nk-tb-head text-center">
                            <th class="nk-tb-col tb-col-mb">
                                <span class="sub-text">Id</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Images</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Nom</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Prenom</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">N° Telephone</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Email</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Role</span>
                            </th>
                            <th class="nk-tb-col">
                                <span class="sub-text">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $user->id ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-sm">
                                    <span class="tb-product text-center">
                                        <img
                                            src="{{ $user->renderImages() }}"
                                            alt="{{ $user->name }}"
                                            class="thumb">
                                    </span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($user->name) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($user->firstname) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $user->email ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $user->phone_number ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span class="badge badge-primary">{{ $user->getRoleUsers() ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col">
                                    <div class="tb-lead justify-content-center">
                                        <a href="{{ route('admins.users.show', $user->id) }}"
                                           class="btn btn-outline-primary btn-sm" title="">
                                            <em class="icon ni ni-eye-alt-fill"></em>
                                            <span>Detail utilisateur</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endcomponent
        </div>
    </div>
@endsection
