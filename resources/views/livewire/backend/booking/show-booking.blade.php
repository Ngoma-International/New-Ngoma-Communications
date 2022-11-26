<div>
    <div class="card-inner">
        <div class="nk-block">
            <div class="nk-block-head">
                <span class="title">Informations du podcast</span>
            </div>
            <div class="profile-ud-list">
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Seminar Name</span>
                        <span class="profile-ud-value">
                                        {{ ucfirst($viewModel->seminar()->name) ?? "" }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Seminar Prices</span>
                        <span class="profile-ud-value">
                                       $ {{ ucfirst($viewModel->seminar()->prices) ?? "" }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Seminar Date</span>
                        <span class="profile-ud-value">
                                        {{ $viewModel->seminar()->date ?? "" }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Seminar Facilitator</span>
                        <span class="profile-ud-value">
                                        {{ ucfirst($viewModel->seminar()->user->name) ?? "" }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Seminar Categorie</span>
                        <span class="profile-ud-value">
                                        {{ ucfirst($viewModel->seminar()->category->name) ?? "" }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Client username</span>
                        <span class="profile-ud-value">
                                        {{ ucfirst($viewModel->booking->username) ?? "" }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Client Firstname</span>
                        <span class="profile-ud-value">
                                        {{ ucfirst($viewModel->booking->firstname) ?? "" }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Client Email</span>
                        <span class="profile-ud-value">
                                        {{ $viewModel->booking->email ?? "" }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Client Country</span>
                        <span class="profile-ud-value">
                                        {{ ucfirst($viewModel->booking->country) ?? "" }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Client Phones</span>
                        <span class="profile-ud-value">
                                        {{ $viewModel->booking->phone_number ?? "" }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Ticket Number</span>
                        <span class="profile-ud-value">
                                        {{ $viewModel->booking->ticket_number ?? 0 }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Ticket Booking at</span>
                        <span class="profile-ud-value">
                                        {{ $viewModel->booking->booking_at ?? "" }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Ticket Code</span>
                        <span class="profile-ud-value">
                                        {{ $viewModel->booking->transaction_code ?? 0 }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Ticket Status</span>
                        <span class="profile-ud-value">
                                        @if($viewModel->booking->status)
                                <span class="badge badge-success ms-0">Activée</span>
                            @else
                                <span class="badge badge-danger ms-0">Désactivée</span>
                            @endif
                                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-divider divider md"></div>
        <div class="nk-block">
            <div class="nk-block-head">
                <span class="title">Informations supplémentaires</span>
            </div>
            <div class="profile-ud-list">
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Date de creation</span>
                        <span
                            class="profile-ud-value">{{ $viewModel->booking->created_at->format('Y-m-d') }}
                                    </span>
                    </div>
                </div>
                <div class="profile-ud-item">
                    <div class="profile-ud wider">
                        <span class="profile-ud-label">Dernière mise à jour</span>
                        <span
                            class="profile-ud-value">{{ $viewModel->booking->updated_at->format('Y-m-d') }}
                                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
