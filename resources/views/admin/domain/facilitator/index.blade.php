@extends('admin.layout.base')

@section('title')
    Facilitator
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        Facilitators
                    @endcomponent

                    @component('admin.shared.banner')
                        <li class="preview-item">
                            <a href="{{ route('admins.facilitator.create') }}" class="btn btn-outline-primary btn-sm">
                                <em class="icon ni ni-plus mr-1"></em> Create Facilitator
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
                                <span class="sub-text">Username</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Firstname</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Organisation</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">N° Telephone</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Email</span>
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
                        @foreach($facilitators as $facilitator)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $facilitator->id ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($facilitator->username) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($facilitator->firstname) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($facilitator->organisation) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $facilitator->phone ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $facilitator->email ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>
                                        @if($facilitator->status === true)
                                            <span class="badge badge-success ms-0">Activée</span>
                                        @else
                                            <span class="badge badge-danger ms-0">Désactivée</span>
                                        @endif
                                    </span>
                                </td>
                                <td class="nk-tb-col">
                                    <div class="tb-lead justify-content-center">
                                        <a href="{{ route('admins.facilitator.show', $facilitator->id) }}"
                                           class="btn btn-outline-primary btn-sm" title="">
                                            <em class="icon ni ni-eye-alt-fill"></em>
                                            <span>Detail</span>
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
