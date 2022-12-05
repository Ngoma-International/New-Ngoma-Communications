@extends('admin.layout.base')

@section('title')
    Membres collectifs
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        Members Collectif
                    @endcomponent
                </div>
            </div>
            @component('admin.shared.section')
                <div class="card-inner">
                    <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="true">
                        <thead>
                        <tr class="nk-tb-item nk-tb-head text-center">
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Nom organisation</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Numero Organisation</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Nom Member</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Email member</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Status</span>
                            </th>
                            <th class="nk-tb-col">
                                <span class="sub-text">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($collectives as $collectif)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($collectif->organisation_name) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($collectif->organisation_register_number) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $collectif->member_username ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($collectif->member_email) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>
                                        @if($collectif->status === true)
                                            <span class="badge badge-success ms-0">Activée</span>
                                        @else
                                            <span class="badge badge-danger ms-0">Désactivée</span>
                                        @endif
                                    </span>
                                </td>
                                <td class="nk-tb-col">
                                    <div class="tb-lead justify-content-center">
                                        <a href="{{ route('admins.collective.show', $collectif->id) }}"
                                           class="btn btn-outline-primary btn-sm" title="">
                                            <em class="icon ni ni-eye-alt-fill"></em>
                                            <span>Detail member</span>
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
