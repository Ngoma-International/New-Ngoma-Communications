@extends('admin.layout.base')

@section('title')
    Membres individuel
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        Members individual
                    @endcomponent
                </div>
            </div>
            @component('admin.shared.section')
                <div class="card-inner">
                    <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="true">
                        <thead>
                        <tr class="nk-tb-item nk-tb-head text-center">
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Username</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Firstname</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Email</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Position</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Department</span>
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
                        @foreach($members as $member)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($member->username) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($member->firstname) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $member->email ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($member->position) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($member->department) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>
                                        @if($member->status === true)
                                            <span class="badge badge-success ms-0">Activée</span>
                                        @else
                                            <span class="badge badge-danger ms-0">Désactivée</span>
                                        @endif
                                    </span>
                                </td>
                                <td class="nk-tb-col">
                                    <div class="tb-lead justify-content-center">
                                        <a href="{{ route('admins.member.show', $member->id) }}"
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
