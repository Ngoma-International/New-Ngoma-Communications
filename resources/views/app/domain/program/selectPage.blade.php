@extends('app.layouts.base')

@section('title')
    Select Page
@endsection

@section('content')
    <div class="card-inner blogs active" id="blog">
        <div class="row card-container" data-simplebar="init">
            <div class="simplebar-track vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 43px;"></div>
            </div>
            <div class="simplebar-track horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar"></div>
            </div>
            <div class="simplebar-scroll-content" style="padding-right: 12px; margin-bottom: -24px;">
                <div class="simplebar-content" style="padding-bottom: 12px; margin-right: -12px;">
                    <div class="card-wrap blogs-content col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                        <div class="content inner-top">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <div class="title-bg">Seminar Shelf</div>
                                </div>
                            </div>
                        </div>
                        <div class="content blog">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <form id="cform" method="post" novalidate="novalidate">
                                        <div class="row" align="center">
                                            <div class="col col-m-12 col-t-12 col-d-7 col-d-lg-7"  style="margin-top:30px;">
                                                <p style="text-align: center; font-size: 20px;">
                                                    Our "Seminar Shelf" contains basic information on seminars we draw from for the delivery of our open seminars and that organisations can select from for  off-the-shelf in-house seminars.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                                <div class="group-val">
                                                    <select id="" class="filter" style="width:50%; margin-top:30px; margin-left: 24%;margin-right: 24%; height:50px !important; background-color: #383a3d; color:white; border: none; padding: 10px;" class="btn btn-info">
                                                        <option value="">-- filter by seminar type --</option>
                                                        <option value="LS">Leading Youserlf</option>
                                                        <option value="LO">Leading People</option>
                                                        <option value="LB">Leading Organisations </option>
                                                    </select>
                                                    <br><br>
                                                    <p style="text-align: center;">
                                                        <i class="far fa-compass" style="background-color: red; color:white;"></i> Leading Yourself
                                                        <i class="far fa-compass" style="background-color: blue; color:white;"></i> Leading People
                                                        <i class="far fa-compass" style="background-color: #4caf50; color:white;"></i> Leading Organisation
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- items -->
                            <div class="row filtered" id="display">
                                <!-- workshop item -->

                            </div>

                            <div class="pager">
                                <input type="hidden" id="next_content" value="2">
                                <a href="#" class="button">
                                    <span class="icon"></span>
                                </a>
                            </div>
                        </div>
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

    <div class="overlay" id="popup1" >
        <div class="popup popBlock">
            <!--Pop up -->
        </div>
@endsection
