@extends('admin.layout.base')

@section('title')
    Programme des evenements
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        Programme
                    @endcomponent

                    @component('admin.shared.banner')
                        <li class="preview-item">
                            <a href="{{ $programs->createUrl }}" class="btn btn-outline-primary btn-sm">
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
                                <span class="sub-text">Photo</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Event</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Title</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Date</span>
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
                        @foreach($programs->programs() as $program)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $program->id ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-sm">
                                    <span class="tb-product justify-content-center">
                                        <img
                                            src="{{ $program->getFirstMediaUrl('images') }}"
                                            alt="{{ $program->title }}"
                                            class="thumb">
                                    </span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($program->seminar->title) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $program->title ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>$ {{ $program->date ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    @if($program->status)
                                        <span class="badge badge-success ms-0">Activée</span>
                                    @else
                                        <span class="badge badge-danger ms-0">Désactivée</span>
                                    @endif
                                </td>
                                <td class="nk-tb-col">
                                    <div class="tb-lead justify-content-center">
                                        <a href="{{ route('admins.programs.show', $program->id) }}"
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
