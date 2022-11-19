@extends('app.layouts.base')

@section('title')

@endsection

@section('content')
    <div class="card-inner active" id="blog-card">
        <div class="row card-container">
            <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
                <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(images/bg1.jpg);">
                    <div class="row" style="position: absolute;bottom: 12vh;">
                        <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6" style="padding-right: 0">
                            <div class="box-item card-box" style="padding-right: 0">
                                <div class="desc" style="padding-right: 0">
                                    <a href="leading.php"  style="font-weight: 200; font-size:20px; text-align: left; border-bottom:none !important;border-radius: 50px; cursor: pointer;"> <i class="far fa-compass" style="background-color: red; color:white; height: 10%; border-radius: 50px;"></i><br><span style="font-size: 12px; color: #fff; ">Leading Yourself</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6" style="padding-right: 0px">
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
                                    <a href="leadingOrganisations.php"  style="font-weight: 200; font-size:20px; text-align: left; border-bottom:none !important; cursor: pointer;border-radius: 50px;"><span style="font-size: 12px; color: #fff; border-radius: 50px;">Leading Organisation</span></a>
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

                <div class="content inner-top">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title-bg" style="font-size: 60px;">Leading Yourself</div>
                        </div>
                    </div>
                </div>

                <div class="content blog-single">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="post-box card-box">>
                                <div class="blog-content">
                                    <p>
                                        To be a great leader, manager, supervisor, assistant, or support staff, you need to understanding, motivate, organise and empower yourself.
                                    </p>

                                    <p>
                                        You also need to ensure you have the right skills for your position and responsibilities. Do you know how to work with your colleagues and peers? What is your preferred communication style? How do you communicate in the best way with senior management? What is the best way to negotiate a win-win deal? Do you have the right influence skills for your role?  How do you persuade your colleagues to focus on common goals? How can you be the best in your job? How can find fulfillment at work and progress in your career?
                                    </p>

                                    <p>Sessions in this category will help you to improve self-awareness, personal strengths, self-management, expertise in communication, negotiation, influencing, selling your ideas, persuading others, negotiating and resolving conflicts as well</p>

                                    <p>
                                        Each of these skills helps you to perform at your best in your organisation or business.
                                    </p>
                                    <p>Please refr to this <i class="far fa-compass" style="background-color: red; border-radius: 50px;  color:white;" aria-hidden="true"></i>  icon when searching for Leading Yourself Events.</p>

                                    <div class="flex" style="font-size: 12px; margin-top: 2rem;">
                                        <a href="events.php" class="btn2" style="background-color: #318342; font-size: 10px; padding: .5rem 1.1rem; color: #fff">Public Training</a>
                                        <a href="events.php" class="btn2" style="background-color: #318342; font-size: 10px; padding: .5rem 1.1rem; color: #fff">In-House Training</a>
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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



        <a href="javascript:history.go(-1)" class="float">
            <i class="fa fa-reply my-float"></i>
        </a>
    </div>
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
