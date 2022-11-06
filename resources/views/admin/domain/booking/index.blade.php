@extends('admin.layout.base')

@section('title')
    Seminar Booking Stats
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        Seminar Booking Stats
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
                                <span class="sub-text">Thumbnail</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Seminar Title</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Seminar Date</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Ticket Number</span>
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
                        @foreach($bookings as $booking)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $booking->id ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-sm">
                                    <span class="tb-product text-center">
                                        <img
                                                src="{{ $booking->seminar->renderThumbnail() }}"
                                                alt="{{ $booking->title }}"
                                                class="thumb">
                                    </span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($booking->seminar->title) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($booking->seminar->date) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{$booking->ticket_number ?? 0 }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    @if($booking->status)
                                        <span class="badge badge-success ms-0">Activée</span>
                                    @else
                                        <span class="badge badge-danger ms-0">Désactivée</span>
                                    @endif
                                </td>
                                <td class="nk-tb-col">
                                    <div class="tb-lead justify-content-center">
                                        <a href="{{ route('admins.booking.show', $booking->id) }}"
                                           class="btn btn-dim btn-primary btn-sm" title="">
                                            <em class="icon ni ni-eye-alt-fill"></em>
                                            <span>Detail podcast</span>
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
