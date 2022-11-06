@extends('admin.layout.base')

@section('title')
    Liste des seminaires
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        Upcaming Seminars
                    @endcomponent

                    @component('admin.shared.banner')
                        <li class="preview-item">
                            <a href="{{ route('admins.seminar.create') }}" class="btn btn-dim btn-primary btn-sm">
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
                                <span class="sub-text">Poster</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Seminar Name</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Date</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Prices</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Duration</span>
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
                        @foreach($seminars as $seminar)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $seminar->id ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-sm">
                                    <span class="tb-product justify-content-center">
                                        <img
                                                src="{{ $seminar->renderPoster() }}"
                                                alt="{{ $seminar->name }}"
                                                class="thumb">
                                    </span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($seminar->name) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $seminar->date ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>$ {{ $seminar->prices ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $seminar->duration ?? "" }} Minutes</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    @if($seminar->status)
                                        <span class="badge badge-success ms-0">Activée</span>
                                    @else
                                        <span class="badge badge-danger ms-0">Désactivée</span>
                                    @endif
                                </td>
                                <td class="nk-tb-col">
                                    <div class="tb-lead justify-content-center">
                                        <a href="{{ route('admins.seminar.show', $seminar->id) }}"
                                           class="btn btn-dim btn-primary btn-sm" title="">
                                            <em class="icon ni ni-eye-alt-fill"></em>
                                            <span>Detail seminar</span>
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
