@extends('backend.layout.base')

@section('title')
    Event Online
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('backend.shared.content')
                        Event Online
                    @endcomponent

                    @component('backend.shared.banner')
                        <li class="preview-item">
                            <a href="{{ route('admins.class-room.create') }}" class="btn btn-dim btn-primary btn-sm">
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
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Event name</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Schedule</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Facilitaror</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Join session</span>
                            </th>
                            <th class="nk-tb-col">
                                <span class="sub-text">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rooms as $room)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col tb-col-sm">
                                    <span class="tb-product text-center">
                                        <img
                                            src="{{ $room->renderImages() }}"
                                            alt="{{ $room->name }}"
                                            class="thumb">
                                    </span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($room->name) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($room->firstname) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $room->email ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $room->phone_number ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col">
                                    <span class="tb-lead text-center">
                                        <div class="d-flex justify-content-center">
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
