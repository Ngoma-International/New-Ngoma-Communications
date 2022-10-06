@extends('backend.layout.base')

@section('title')
    Pannel Administration
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('backend.shared.content')
                        Pannel Administrateur
                    @endcomponent
                </div>
            </div>
            <div class="nk-block">
                <div class="row g-gs mb-2">
                    @include('backend.shared._statistic', [
                        'username' => "Nos salles",
                        'amount' => \App\Models\User::count()
                    ])

                </div>
                <div class="row g-gs">
                    <div class="col-xxl-6 mb-2">
                        <div class="card card-full">
                            <div class="card-inner">
                                <div class="card-title-group mb-3">
                                    <div class="card-title">
                                        <h6 class="title">Reservation hebdomadaire</h6>
                                    </div>
                                </div>
                                <div class="nk-ecwg nk-ecwg8 h-100">
                                    <canvas
                                        class="ecommerce-line-chart-s4"
                                        data-statistic="true"
                                        id="chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4">
                        <div class="card card-full overflow-hidden">
                            <div class="nk-ecwg nk-ecwg7 h-100">
                                <div class="card-inner flex-grow-1">
                                    <div class="card-title-group mb-4">
                                        <div class="card-title">
                                            <h6 class="title">Order Statistics</h6>
                                        </div>
                                    </div>
                                    <div class="nk-ecwg7-ck">
                                        <canvas class="ecommerce-doughnut-s1" id="circle_statistic"></canvas>
                                    </div>
                                    <ul class="nk-ecwg7-legends">
                                        <li>
                                            <div class="title">
                                                <span class="dot dot-lg sq" data-bg="#816bff"></span>
                                                <span>Nos reservations</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">
                                                <span class="dot dot-lg sq" data-bg="#13c9f2"></span>
                                                <span>Reservation Global</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xxl-4">
                        <div class="card h-100">
                            <div class="card-inner border-bottom">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Notifications</h6>
                                    </div>
                                    <div class="card-tools">
                                        <a href="" class="link">View All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner">
                                <div class="timeline">
                                    <h6 class="timeline-head">November, 2019</h6>
                                    <ul class="timeline-list">
                                        <li class="timeline-item">
                                            <div class="timeline-status bg-primary is-outline"></div>
                                            <div class="timeline-date">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                            <div class="timeline-data">
                                                <h6 class="timeline-title">Submited KYC Application</h6>
                                                <div class="timeline-des">
                                                    <p>Re-submitted KYC Application form.</p>
                                                    <span class="time">09:30am</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-status bg-pink"></div>
                                            <div class="timeline-date">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                            <div class="timeline-data">
                                                <h6 class="timeline-title">Submited KYC Application</h6>
                                                <div class="timeline-des">
                                                    <p>Re-submitted KYC Application form.</p>
                                                    <span class="time">09:30am</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
