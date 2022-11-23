@extends('app.layouts.base')

@section('title')

@endsection

@section('content')
    <div class="card-inner active" id="blog">
        <div class="row card-container">
            <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
                <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url({{ asset('assets/images/bg1.jpg') }});">
                    <div class="row" style="position: absolute;bottom: 12vh;">
                        <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
                            <div class="box-item card-box">
                                <div class="desc" style="text-align: center; justify-items: center; justify-content: center">
                                    <a href="{{ route('leading.index') }}"  style="font-weight: 600; font-size:25px; border-bottom:none !important;border-radius: 50px; cursor: pointer;">
                                        <i class="far fa-compass" style="background-color: red; color:white; height: 10%; border-radius: 50px;"></i><br>
                                        <span style="font-size: 12px; color: #fff; ">Leading Yourself</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
                            <div class="box-item card-box ">
                                <div class="desc" style="text-align: center; justify-content: center;">
                                    <i class="far fa-compass" style="background-color: blue; color:white; height: 20%; border-radius: 50px;"></i><br>
                                    <a href="{{ route('people.index') }}"  style="font-weight: 600; font-size:25px; border-bottom:none !important; cursor: pointer;border-radius: 50px;">
                                        <span style="font-size: 12px; color: #fff; border-radius: 50px;">Leading People</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
                            <div class="box-item card-box " style="min-width: 10rem">
                                <div class="desc" style="text-align: center; justify-content: center">
                                    <i class="far fa-compass" style="background-color: green; color:white; height: 20%; border-radius: 50px;"></i><br>
                                    <a
                                        href="{{ route('organisation.index') }}"
                                        style="font-weight: 600; font-size:25px; border-bottom:none !important; cursor: pointer;border-radius: 50px;">
                                        <span style="font-size: 12px; color: #fff; border-radius: 50px;">Leading Organisation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content inner-top">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title-bg" style="font-size: 60px; font-weight: 400">Leading Yourself</div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
