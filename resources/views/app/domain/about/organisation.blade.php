@extends('app.layouts.base')

@section('title')

@endsection

@section('content')
    <div class="card-inner active" id="blog-card">
        <div class="row card-container">

            <!--
                Card Wrap
            -->
            <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

                <!-- Blog Image -->
                <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(images/bg1.jpg);">

                    <div class="row" style="position: absolute;bottom: 12vh;">
                        <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6" style="padding-right: 0px; padding-right: 0px">
                            <div class="box-item card-box" style="padding-right: 0px; padding-right: 0px">

                                <div class="desc" style="padding-right: 0px; padding-right: 0px">
                                    <a href="leading.php"  style="font-weight: 200; font-size:20px; text-align: left; border-bottom:none !important;border-radius: 50px; cursor: pointer;"> <i class="far fa-compass" style="background-color: red; color:white; height: 10%; border-radius: 50px;"></i><br><span style="font-size: 12px; color: #fff; ">Leading Yourself</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6" style="padding-right: 0px; padding-right: 0px">
                            <div class="box-item card-box " style="padding-right: 0px; padding-right: 0px">

                                <div class="desc" style="padding-right: 0px; padding-right: 0px">
                                    <i class="far fa-compass" style="background-color: blue; color:white; height: 20%; border-radius: 50px;"></i><br>
                                    <a href="leadingPeople.php"  style="font-weight: 200; font-size:20px; text-align: left; border-bottom:none !important; cursor: pointer;border-radius: 50px;"><span style="font-size: 12px; color: #fff; border-radius: 50px;">Leading People</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6" style="padding-right: 0px; padding-right: 0px">
                            <div class="box-item card-box " style="padding-left: 0px; padding-right: 0px;min-width: 10rem">

                                <div class="desc" style="padding-left: 0px; padding-right: 0px">
                                    <i class="far fa-compass" style="background-color: green; color:white; height: 20%; border-radius: 50px;"></i><br>
                                    <a href="leadingOrganisations.php"  style="font-weight: 200; font-size:20px; text-align: left; border-bottom:none !important; cursor: pointer;border-radius: 50px;"><span style="font-size: 12px; color: #fff; border-radius: 50px;">Leading Organisations</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6" style="padding-right: 0px; padding-right: 0px">
                            <div class="box-item card-box " style="padding-left: 0px; padding-right: 0px;min-width: 10rem">

                                <div class="desc" style="padding-left: 0px; padding-right: 0px">
                                    <i class="far fa-compass" style="background-color: #FACB3D; color:white; height: 20%; border-radius: 50px;"></i><br>
                                    <a href="lifeskills.php"  style="font-weight: 200; font-size:20px; text-align: left; border-bottom:none !important; cursor: pointer;border-radius: 50px;"><span style="font-size: 12px; color: #fff; border-radius: 50px;">Life Skills</span></a>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

                <!--
                    Inner Top
                -->
                <div class="content inner-top">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title-bg" style="font-size: 45px;">Leading Organisations</div>
                        </div>
                    </div>
                </div>

                <!--
                    Blog Single
                -->
                <div class="content blog-single">

                    <!-- content -->
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="post-box card-box">




                                <!-- blog content -->
                                <div class="blog-content">
                                    <p>Do you have the right acumen to contribute or lead your business to success?
                                    </p>
                                    <p>

                                        Seminars in this category will help you to implement a compelling vision, to empower and release human and organisational potential, to shape organisational culture through a powerful combination of message, matched by action.
                                    </p>

                                    <p>

                                        All seminars provide each valuable insights, proven to work in a “real world” environment.
                                    </p>


                                    <p>Please refer to this <i class="far fa-compass" style="background-color: #4caf50; border-radius: 50px;  color:white;" aria-hidden="true"></i> icon when searching for Leading Organisations events.</p>
                                    <div class="flex" style="font-size: 12px; margin-top: 2rem;">
                                        <a href="events.php" class="btn2" style="background-color: #318342; font-size: 10px; padding: .5rem 1.1rem; color: #fff">Public Training</a>
                                        <a href="events.php" class="btn2" style="background-color: #318342; font-size: 10px; padding: .5rem 1.1rem; color: #fff">In-House Traning</a>

                                        <a href="podcast.php" class="btn2" style="background-color: #318342; font-size: 10px; padding: .5rem 1.1rem; color: #fff">Podcasts</a>
                                        <a href="https://ngomacommunications.com/index.php?page=contact" class="btn2" style="background-color: #FACB3D; font-size: 10px; padding: .5rem 1.1rem; color: #fff">Contact Us</a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>

        <?php require_once("back.php");?>
    </div>

    <!--
        Lines Grid
    -->
    <div class="lines-grid">
        <div class="row">
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
                <div class="lines">
                    <div class="line-1"></div>
                    <div class="line-2" style="animation-delay: 10s;"></div>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
                <div class="lines">
                    <div class="line-1"></div>
                </div>
            </div>
            <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3">
                <div class="lines">
                    <div class="line-1"></div>
                    <div class="line-2" style="animation-delay: 0s;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
