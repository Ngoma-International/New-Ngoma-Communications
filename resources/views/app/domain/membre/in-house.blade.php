@extends('app.layouts.base')

@section('title')
    In House
@endsection

@section('content')
    <div class="card-inner blogs active" id="blog">
        <div class="row card-container" data-simplebar="init">
            <div class="simplebar-track vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="visibility: visible; top: 54px; height: 322px;"></div>
            </div>
            <div class="simplebar-track horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar"></div>
            </div>
            <div class="simplebar-scroll-content" style="padding-right: 15px; margin-bottom: -30px;">
                <div class="simplebar-content" style="padding-bottom: 15px; margin-right: -15px;">
                    <div class="blogs-content col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                        <div class="content inner-top">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-9 col-d-lg-9">
                                    <div class="title-bg mobile1">In-House Training</div>
                                </div>
                            </div>
                        </div>

                        <div class="content blog" style="margin-top: 65px">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4">
                                    <div class="box-item card-box">
                                        <div class="image">
                                            <a href="{{ route('select.page') }}">
                                                <img src="{{ asset('assets/images/offtheshelf.jpg') }}" style="height:350px; object-fit:cover;">
                                                <span class="info">
													<span class="icon la la-check-circle-o"></span>
												</span>
                                            </a>
                                        </div>
                                        <div class="desc">
                                            <a href="#tailored" class="link">Off-the-Shelf Seminars</a>
                                        </div>
                                        <div class="desc" style="text-align: justify;">
                                            Should you be interested in one of our open seminars and have a group of more then 5 people, we can deliver the seminar in-house for your organisation.
                                            <br><br>
                                            These off-the-shelf seminars can be run at a location or time that suits you. Their costing depends on the number of delegates and, where applicable, on the expenses relating to travel and accommodation of the facilitator as well as other logistical factors.
                                            Please send us a request for a proposal on the seminar you are interested in and we will respond within 24 hours.
                                        </div>
                                        <div class="desc">
                                            <a href="{{ route('select.page') }}" class="btn book-button " style="float:left;">Request a Proposal</a>
                                        </div><br><br>
                                    </div>
                                </div>
                                <div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4">
                                    <div class="box-item card-box">
                                        <div class="image">
                                            <a href="{{ route('inquire.page') }}">
                                                <img src="{{ asset('assets/images/customized.jpg') }}" style="height:350px; object-fit:cover;">
                                                <span class="info">
													<span class="icon la la-check-circle-o"></span>
												</span>
                                            </a>
                                        </div>
                                        <div class="desc">
                                            <a href="#tailored" class="link">Customised Seminars</a>
                                        </div>
                                        <div class="desc" style="text-align: justify;">
                                            Sometimes off-the-shelf seminars are not what you need for you and your teams. Your organisation might have specific competences you need to develop or you need to customise a seminar that focuses on your organisation specific challenges. Then the ideal solution for your organisation is a Customised Seminar.<br><br>
                                            Please send us your enquiry so that we can engage with you regarding your organisation's leadership development needs our team will make contact within 24 hours.
                                        </div>
                                        <div class="desc">
                                            <a href="{{ route('inquire.page') }}" class="btn book-button " style="float:left;">Send an Enquiry</a>
                                        </div><br><br>
                                    </div>
                                </div>
                                <div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4">
                                    <div class="box-item card-box" style="text-align: left; padding: 5px">
                                        <div class="desc">
                                            <a class="name" style="font-size: 20px; font-weight: 200">
                                                Choosing an effective in-house training course or seminar for your managers and employees can be difficult, with plenty of questions to consider. What should the content include? Which topics need to be covered? <br><br>
                                                Our success in delivering In-House Training Seminars is attributed to our ability to work closely with organisations. We excel in understanding your goals and specific requirement then we plan and deliver customised or off-the-shelf training seminar that meets your organisation's objectives.   </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="tailored" class="popup-box mfp-fade mfp-hide">
        <div class="content">
            <div class="desc">
                <div class="post-box">
                    <h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">Standard In-house Seminars</h1>
                    <div class="blog-content" style="margin-top: 2%"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="notTailored" class="popup-box mfp-fade mfp-hide">
        <div class="content">
            <div class="desc">
                <div class="post-box">
                    <h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">Customised Seminars</h1>
                    <div class="blog-content" style="margin-top: 2%">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lines-grid loaded">
        <div class="row">
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
            <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3"></div>
        </div>
    </div>

@endsection
