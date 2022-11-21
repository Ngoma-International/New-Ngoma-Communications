@extends('app.layouts.base')

@section('title')

@endsection

@section('content')
    <div class="card-inner active" id="home">
        <div class="row card-container">
            <div class="card-wrap col col-m-12 col-t-12 col-d-9 col-d-lg-9" data-simplebar>
                @include('app.component._home')
            </div>
        </div>
    </div>

    <div class="card-inner" id="about">
        <div class="row card-container">
            @include('app.component._about')
        </div>
    </div>

    <div class="card-inner" id="sessions">
        <div class="row card-container">
            @include('app.component._session')
        </div>
    </div>

    <div class="card-inner" id="contact">
        <div class="row card-container">
            <div class="card-wrap col col-m-12 col-t-12 col-d-6 col-d-lg-6" data-simplebar>
                <div class="card-image col col-m-12 col-t-12 col-d-6 col-d-lg-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.74085184428!2d28.01027026556386!3d-26.04203393351032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957406164e538b%3A0x9b524dcefc1a963a!2sEpsom+Downs%2C+Sandton%2C+2152!5e0!3m2!1sen!2sza!4v1563277312586!5m2!1sen!2sza" width="940" height="970" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="content inner-top" style="margin-top: 0 !important; padding-top: 15px !important">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title-bg mobile1">Contact Us</div>
                        </div>
                    </div>
                </div>

                <div class="content contacts-info" style="margin-top: 30px">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title" style="font-weight: 300"><span>Get</span> in Touch</div>
                        </div>
                    </div>

                    <div class="row contacts-items">
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="contacts-item card-box">
                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="name">Address</div>
                                <p>
                                    8 Meadowbrook Lane, Epsom Downs, <br> Sandton, 2196 Johannesburg
                                </p>
                            </div>
                        </div>

                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="contacts-item card-box">
                                <div class="icon"><i class="fas fa-at"></i></div>
                                <div class="name">Email</div>
                                <p style="font-size: 12px">
                                    <a href="mailto:info@ngomacommunications.com">Send email</a>
                                </p>
                            </div>
                        </div>

                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="contacts-item card-box">
                                <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                <div class="name">Phone</div>
                                <p>
                                    <a href="tel:+27110836004">
                                        +27 11 083 6004
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- contacts item -->
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="contacts-item card-box">
                                <div class="icon"><i class="far fa-clock"></i></div>
                                <div class="name">Working hours</div>
                                <p>
                                    08:00am-05:00pm (Mon-Fri)
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="content contacts-form">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title" style="font-weight: 300"><span>Contact</span> Form</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="contact_form card-box">
                                <form method="post" action="javascript:void(0)" id="contactForm">
                                    <div class="row">
                                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                            <div class="group-val">
                                                <input type="text" name="name" placeholder="Full Name" />
                                            </div>
                                        </div>
                                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                            <div class="group-val">
                                                <input type="text" name="email" placeholder="Email Address" />
                                                <input type="Hidden" name="action" value="message" />
                                            </div>
                                        </div>
                                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                            <div class="group-val">
                                                <textarea name="message" placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="align-center">
                                        <input type='submit' class="button text" style="cursor: pointer;" value="Send Message">
                                    </div>
                                </form>
                                <div class="alert-success">
                                    <p style="text-align: center;" class="confirmationBox"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-inner" id="podcast">
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
                                    <div style="margin-top: -3rem;">
                                        <a href="in-house.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342;padding: 8px 8px; border-radius: 5px;">In-House Training</a>
                                        <a href="podcast.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342; margin-left: 10rem; padding: 8px 8px; border-radius: 5px;">Podcasts</a>
                                    </div>
                                    <div class="title-bg" style="margin-top: 5rem; font-size: 7rem;">Podcasts</div><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="content blog" style="margin-top: -4rem;">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <form id="cform" method="post" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                                <br>
                                                <p style="text-align: center;">
                                                    <i class="far fa-compass" style="background-color: red; color:white;"></i> Leading Yourself
                                                    <i class="far fa-compass" style="background-color: blue; color:white; margin-left:10px;"></i> Leading People
                                                    <i class="far fa-compass" style="background-color: #4caf50; color:white; margin-left:10px;"></i> Leading Organisation
                                                    <i class="far fa-compass" style="background-color: #FACB3D; color:white; margin-left:10px;"></i> Life Skills
                                                </p>
                                                <div class="group-val">
                                                    <select id="country" onchange="change()" class="filter" style="width:50%; margin-top:30px; margin-left: 24%;margin-right: 24%; height:50px !important; background-color: #383a3d; color:white; border: none; padding: 10px;" class="btn btn-info">
                                                        <option value="">-- Filter per Category --</option>
                                                        <option value="all">All Podcasts</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
    </div>

    <div class="card-inner" id="events">

        <div class="row card-container">
            <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

                <!-- Offering Image -->
                <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(images/sideOfferings.jpg);">
                    <p class="mobile2" style="margin-top: 1%; background: rgb(0,0,0,0.6); color: #fff; padding: 2%; font-size:18px !important; font-weight: 200; text-align: justify;">
                        Set a course for growth. Get new leadership strategies to bring out the best in you—and your
                        team. Ngoma Communications’ leadership seminars provide numerous avenues for enhancing the
                        qualities of good leadership.<br>

                        All our Programmes are practical and pragmatic. They focus on real business issues and
                        challenges. It is not just about the theory; you will actually practice, practice and
                        practice. What you learn today, you can apply tomorrow, when you are back at work.<br>

                        Programmes are facilitated by Senior Associates with at least 15+ years hands-on senior
                        management and international experience. So they understand your issues, your challenges and
                        your needs.<br>

                        We update our key programmes on a regular basis to make sure you have the best learning
                        experience.</p>
                </div>

                <div class="content inner-top" style="margin-top: 0 !important; padding-top: 15px !important">
                    <div class="row">
                        <div class=" col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title-bg mobile1" style="font-size: 70px">Offerings</div>
                        </div>
                    </div>
                </div>

                <div class="content resume" style="margin-top: 60px">
                    <div class="row">

                        <div class="row" align="center" style="margin-top:50px;" style="text-align: left;">
                            <P style="padding: 10PX;">
                                Should you be interested in our open seminars , please click the button below to
                                view our upcoming open seminars in your city.<br>
                                <a href="events.php" class="btn2"> Public Training</a><br>
                            </P>
                            <P style="padding: 10PX;">
                                Should you be interested to have an in-house training seminar for your organisation,
                                please click the button below to go to the In-house Seminar page.
                                <br><a href="pages-inhouse.php" class="btn2">In-house Training</a><br>
                            </P>
                        </div>
                    </div>

                    <div class="content" style="margin-top: 60px">

                        <div id="popup-leadSelf" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="desc">
                                    <div class="post-box">
                                        <h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%; ">
                                            Leading Yourself</h1>
                                        <div class="blog-content" style="margin-top: 2%">
                                            <p style="font-size: 14px; text-align: justify; font-weight: 300">
                                                To be a great leader, manager, supervisor, assistant, or support
                                                staff, you need to understanding, motivate, organise and empower
                                                yourself.
                                                <br><br>
                                                You also need to ensure you have the right skills for your position
                                                and responsibilities. Do you know how to work with your colleagues
                                                and peers? What is your preferred communication style? How do you
                                                communicate in the best way with senior management? What is the best
                                                way to negotiate a win-win deal? Do you have the right influence
                                                skills for your role?  How do you persuade your colleagues to focus
                                                on common goals? How can you be the best in your job? How can find
                                                fulfillment at work and progress in your career?
                                                <bR><br>
                                                Sessions in this category will help you to improve self-awareness,
                                                personal strengths, self-management, expertise in communication,
                                                negotiation, influencing, selling your ideas, persuading others,
                                                negotiating and resolving conflicts as well
                                                <br><br>
                                                Each of these skills helps you to perform at your best in your
                                                organisation or business.

                                                <br><br>
                                                When browsing our open seminars in your country, look out for this
                                                <i class="far fa-compass" style="background-color: red; color:white;"></i> icon, for
                                                Leading Yourself Training Seminars.
                                            </p>
                                            <div class="flex" style="font-size: 12px; margin-top: 2rem;">
                                                <a href="events.php" class="btn2" style="background-color: #318342; font-size: 12px;">Public
                                                    Training</a>
                                                <a href="inquire.php" class="btn2" style="background-color: #318342; font-size: 12px;">In-House
                                                    Training</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="popup-leadOthers" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="desc">
                                    <div class="post-box">
                                        <h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%; ">
                                            Leading People
                                        </h1>
                                        <div class="blog-content" style="margin-top: 2%">
                                            <p style="font-size: 14px; text-align: justify; font-weight: 300">
                                                To be a great leader, manager or supervisor, you need to have the
                                                right skills to lead others.
                                                <br><br>
                                                This means having the knowledge, skills, competence and
                                                understanding of how to engage, motivate and manage people. It also
                                                means understanding and how you can be a great leader. You need to
                                                also be able to formulate a vision, set a strategy and motivate
                                                people towards common business and organisational goals. What is
                                                your preferred leadership style? What are the best practices in
                                                Leadership today? Is coaching an important part of my role? Should I
                                                mentor my team? Do you need to change your leadership style? How can
                                                you motivate your teams?
                                                <br><br>
                                                Seminars in this category will help you to improve knowledge and
                                                skills to engage people to work towards common business and
                                                organiational goals, understanding how to formulate a vision, set a
                                                strategy and communicate it.
                                                <br><br>
                                                Each of these skills helps you to perform as a leader, manager or
                                                supervisor of people in your organisation.
                                                <br><br>
                                                When browsing our open seminars in your country, look out for this
                                                <i class="far fa-compass" style="background-color: blue; color:white;"></i> icon for
                                                Leading People Training Seminars.
                                                <br><br>

                                            </p>
                                            <div class="flex" style="font-size: 12px;">
                                                <a href="events.php" class="btn2" style="background-color: #318342;  font-size: 12px;">Public
                                                    Training</a>
                                                <a href="inquire.php" class="btn2" style="background-color: #318342; font-size: 12px;">In-House
                                                    Training</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="popup-leadBusiness" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="desc">
                                    <div class="post-box">
                                        <h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">
                                            Leading Organisations
                                        </h1>
                                        <div class="blog-content" style="margin-top: 2%">
                                            <p style="font-size: 14px; text-align: justify; font-weight: 300">
                                                Do you have the right acumen to contribute or lead your business to
                                                success?
                                                <br><br>

                                                Training seminars in this category will help you to implement a
                                                compelling vision, to empower and release human and organisational
                                                potential, to shape organisational culture through a powerful
                                                combination of message, matched by action.
                                                <br><br>

                                                All seminars provide each valuable insights, proven to work in a
                                                “real world” environment.

                                                <br><br>
                                                When browsing our open seminars in your city, look out for this <i class="far fa-compass" style="background-color: #4caf50; color:white;"></i> icon for
                                                Leading Organisations Training.
                                            </p>
                                            <div class="flex" style="margin-top: 2rem;">
                                                <a href="events.php" class="btn2" style="background-color: #318342; font-size: 12px;">Public
                                                    Training</a>
                                                <a href="inquire.php" class="btn2" style="background-color: #318342; font-size: 12px;">In-House
                                                    Training</a>
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
            </div>
        </div>
    </div>
@endsection
