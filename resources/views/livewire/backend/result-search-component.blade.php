<div class="mt-4">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-inner">
                    <div class="team">
                        <div class="user-card user-card-s2">
                            <div class="user-avatar md bg-info">
                                <span>{{ substr(ucfirst($booking->username), 0, 1) . ''. substr($booking->firstname,0,1) }}</span>
                                <div class="status dot dot-lg dot-success"></div>
                            </div>
                            <div class="user-info">
                                <h6>{{ ucfirst($booking->username) ?? "" }} {{ ucfirst($booking->firstname) ?? "" }}</h6>
                                <span class="sub-text">{{ $booking->email }}</span>
                            </div>
                        </div>
                        <div class="team-details">
                            <p>{{ ucfirst($booking->seminar->name) ?? "" }}</p>
                        </div>
                        <ul class="team-statistics">
                            <li>
                                <span>Ticket</span>
                                <span>{{ $booking->ticket_number ?? 0 }}</span>
                            </li>
                            <li>
                                <span>Transaction</span>
                                <span>{{ $booking->transaction_code ?? "" }}</span>
                            </li>
                            <li>
                                <span>Booking At</span>
                                <span>{{ $booking->booking_at ?? "" }}</span>
                            </li>
                        </ul>
                        <div class="team-view">
                            <a href="" class="btn btn-round btn-outline-light w-150px">
                                <span>View Profile</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
