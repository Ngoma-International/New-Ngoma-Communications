@extends('backend.layout.base')

@section('title')
    PodCasts
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('backend.shared.content')
                        PodCasts
                    @endcomponent

                    @component('backend.shared.banner')
                        <li class="preview-item">
                            <a href="{{ route('admins.podcast.create') }}" class="btn btn-dim btn-primary btn-sm">
                                <em class="icon ni ni-plus mr-1"></em> Create
                            </a>
                        </li>
                    @endcomponent
                </div>
            </div>
            @component('backend.shared.section')
                <div class="card-inner">
                    <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="true">
                        <thead>
                        <tr class="nk-tb-item nk-tb-head text-center">
                            <th class="nk-tb-col tb-col-mb">
                                <span class="sub-text">File</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Type</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Title</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Author</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Offering</span>
                            </th>
                            <th class="nk-tb-col">
                                <span class="sub-text">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($podcasts as $podcast)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col tb-col-sm">
                                    <span class="tb-product text-center">
                                        <img
                                            src="{{ $podcast->renderImages() }}"
                                            alt="{{ $podcast->name }}"
                                            class="thumb">
                                    </span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($podcast->name) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($podcast->firstname) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $podcast->email ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $podcast->phone_number ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col">
                                    <span class="tb-lead text-center">
                                        <div class="d-flex justify-content-center">
                                            <a
                                                href=""
                                                class="btn btn-dim btn-primary btn-sm">
                                                <em class="icon ni ni-edit"></em>
                                            </a>
                                            <form action="" method="POST">
                                                  @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button
                                                    type="submit"
                                                    class="btn btn-dim btn-danger btn-sm"
                                                ><em class="icon ni ni-trash"></em></button>
                                            </form>
                                        </div>
                                    </span>
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
