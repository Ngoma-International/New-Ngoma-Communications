@extends('backend.layout.base')

@section('title')
    Seminar Booking stats
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('backend.shared.content')
                        Seminar Booking stats
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
                                <span class="sub-text">Seminar Name</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Date</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Prices</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Facilitator</span>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <span class="sub-text">Ticket</span>
                            </th>
                            <th class="nk-tb-col">
                                <span class="sub-text">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bookings as $booking)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col tb-col-sm">
                                    <span class="tb-product text-center">
                                        <img
                                            src="{{ $booking->renderImages() }}"
                                            alt="{{ $booking->name }}"
                                            class="thumb">
                                    </span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($booking->name) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ ucfirst($booking->firstname) ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $booking->email ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $booking->phone_number ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $booking->phone_number ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col">
                                    <span class="tb-lead text-center">
                                        <div class="d-flex justify-content-center">
                                            <a
                                                href=""
                                                class="btn btn-dim btn-primary btn-sm">
                                                <em class="icon ni ni-edit"></em>
                                            </a>
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
