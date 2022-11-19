@extends('app.layouts.base')

@section('title')

@endsection

@section('content')
    <div class="card-inner active" id="home">
        <div class="row card-container">
            <div class="card-wrap col col-m-12 col-t-12 col-d-9 col-d-lg-9" data-simplebar>
                <div class="card-image desktop col col-m-12 col-t-12 col-d-4 col-d-lg-4">
                    <div style="color: whitesmoke !important;">Upcoming Events</div>
                    @include('app.component._card')
                </div>

                <div class="content inner-top  col-d-lg-10 cardm" style="background-image: url(https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F61526849%2F71524111461%2F1%2Foriginal.20190501-194340?w=1000&auto=compress&rect=0%2C7%2C5184%2C2592&s=cf96f2d6e270c2302c8a2b38fffd165b);background-repeat: no-repeat; margin-top: -2rem; ">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="row">
                                <div>
                                    <img src="{{ asset('assets/images/ngoma.png') }}" class="logo" alt="">
                                </div>
                            </div>
                            <div class="text">
                                <p style="font-size: 32px; line-height: 1.2;  color:white;  text-shadow: 2px 2px 4px #000000; text-align: center; font-weight:200;">
                                    We help organisations and individuals<br> to reach a higher level of
                                    excellence.
                                </p>
                            </div>
                            <br>
                            <div style="background-color: rgba(0,0,0,.5);padding: 1rem 1rem .5rem; border-radius: 10px">
                                <p style="font-size: 15px; color: #fff;font-weight: 200">
                                    Grounded in ongoing
                                    research and 15 years of experience developing successful business leaders,
                                    our offerings address the three aspects of leadership: Leading Youself;
                                    Leading People; Leading Organisations.
                                </p>
                            </div>
                        </div>

                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="service-item card-box">
                                <div class="icon">
                                    <i class="far fa-compass" style="background-color: red; color:white; height: 20%;border-radius: 50px"></i>
                                </div>
                                <div class="name">
                                    <a href="leading.php" style="color: #222;font-size: 15px">
                                        Leading Yourself
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="service-item card-box">
                                <div class="icon">
                                    <i class="far fa-compass" style="background-color: blue; color:white; height: 10%;border-radius: 50px"></i>
                                </div>
                                <div class="name">
                                    <a href="leadingPeople.php" style="color: #222;font-size: 15px">
                                        Leading People
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="service-item card-box">
                                <div class="icon">
                                    <i class="far fa-compass" style="background-color: #4caf50; color:white;border-radius: 50px"></i>
                                </div>
                                <div class="name">
                                    <a href="leadingOrganisations.php" style="color: #222;font-size: 15px">
                                        Leading Organisations
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="service-item card-box">
                                <div class="icon">
                                    <i class="far fa-compass" style="background-color: #FACB3D; color:white;border-radius: 50px"></i>
                                </div>
                                <div class="name">
                                    <a href="lifeskills.php" style="color: #222;font-size: 15px">
                                        Life Skills
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div style="min-height: 2rem"></div>
                    </div>
                </div>

                <!-- About Image -->
                <div class="card-image Mobile col col-m-12 col-t-12 col-d-4 col-d-lg-4" style="background-image: url({{ asset('assets/images/bg1.jpg') }});">
                    <div class="" style="color: #9e9e9e;font-size: 20px; text-align: left;">
                        <span>Upcoming</span> Public Training
                    </div>
                    <br>
                    @include('app.component._card')
                    <br>
                    <div style="position: relative;z-index: 100 !important">
                        <a href="events.php" style="padding: .5rem 1rem; background-color: #56b345;color: #fff;border-radius: 50px;font-weight: 200;font-size: 12px;">
                            <span>
                                MorePublic Training
                            </span>
                        </a>
                        <a href="in-house.php" style="padding: .5rem 1rem; background-color: #56b345;color: #fff;border-radius: 50px;font-weight: 200;font-size: 12px;">
                            <span>
                                Inhouse
                            </span>
                        </a>
                        <a href="podcast.php" style="padding: .5rem 1rem; background-color: #56b345;color: #fff;border-radius: 50px;font-weight: 200;font-size: 12px;">
                            <span>
                                Podcasts
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-inner" id="about">
        <div class="row card-container">
            <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-7">
                <div class="card-image card-image1 col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url({{ asset('assets/images/bg1.jpg') }}); background-size: cover;  overflow-y: scroll;">
                    <p class="mobile4">
                        We maintain a pool of highly qualified facilitators, coaches, and
                        keynotes speakers who are all business people with executive-level backgrounds working
                        for international corporations. Grounded in ongoing research and 15 years of experience
                        developing successful business leaders, our work address the three aspects of
                        leadership: Leading Youself; Leading People; Leading Organisations.
                    </p>
                    <div class="row">
                        <div class="row" style="margin-top:60px;"></div>
                        <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-4">
                            <div class="box-item card-box ">
                                <div class="image">
                                    <a href="#popup-leadSelf" class="has-popup-media">
                                        <span class="info">
                                            <span class="icon la la-long-arrow-right"></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="#popup-leadSelf" class=" has-popup-media link" style="font-weight: 200; font-size:20px; text-align: center; border-bottom:none !important; cursor: pointer;">
                                        <i class="far fa-compass" style="background-color: red; color:white; height: 20%;"></i>
                                        <br>
                                        <span style="font-size: 12px; color: #fff; text-align: left;" class="ml">Leading Yourself</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-4">
                            <div class="box-item card-box">
                                <div class="image">
                                    <a href="#popup-leadOthers" class="has-popup-media">
                                        <span class="info">
                                            <span class="icon la la-long-arrow-right"></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="#popup-leadOthers" class=" has-popup-media link" style="font-weight: 200; font-size:20px; text-align: center; border-bottom:none !important; cursor: pointer;">
                                        <i class="far fa-compass" style="background-color: blue; color:white; height: 10%;"></i>
                                        <br>
                                        <span style="font-size: 12px; color: #fff; text-align: left;" class="ml">Leading People</span>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="col col-m-12 col-t-12 col-d-7 col-d-lg-4 card3" id="card3" style="">
                            <div class="box-item card-box">
                                <div class="image">
                                    <a href="#popup-leadBusiness" class="has-popup-media">
                                        <span class="info">
                                            <span class="icon la la-long-arrow-right"></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="#popup-leadBusiness" class="has-popup-media link" style="font-weight: 200; font-size:20px; text-align: left; border-bottom:none !important; cursor: pointer;"><i class="far fa-compass" style="background-color: #4caf50; color:white;"></i>
                                        <span style="font-size: 12px; color: #fff;  text-align: left !important;   white-space: nowrap; margin-left: -2rem">Leading
                                            Organisations
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content inner-top" style="margin-top: 0 !important; padding-top: 10px !important;">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12" style="">
                            <div style="margin-top: 1rem; margin-bottom: 2rem">
                                <a href="events.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342; padding: 8px 8px; border-radius: 5px;">
                                    Public Training
                                </a>

                                <a href="in-house.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342;padding: 8px 8px; border-radius: 5px;">
                                    In-House Training
                                </a>
                                <a href="podcast.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342; padding: 8px 8px; border-radius: 5px;">
                                    Podcasts
                                </a>
                            </div>

                            <div class="title-bg mobile1" style="margin-top: 7rem;margin-bottom: 3rem; text-align: left !important">
                                About Us
                            </div>
                            <div class="text aboutText" style="margin-top: 150px;">
                                <p style="font-weight: 200; text-align: justify; font-size: 16px;">
                                    We are an international training company specialising in business leadership
                                    development. Over the past 15 years, we have delivered in 45 countries
                                    around the world hundreds of open and in-house training seminars as well as
                                    keynote speeches on various topics relating to business leadership. We have
                                    also provided hundreds of executive coaching to professional men and women,
                                    from top executives, to middle managers, to personal assistants, to
                                    entrepreneurs.
                                </p>
                            </div>

                            <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12" style="">
                                <div class="aboutButtons" style="text-align:left;">
                                    <a class="btn2" href="about/?ngoma=a" style="background-color: #318342; margin-left: 12rem; font-size: 13px !important;">
                                        <span>
                                            Advisory Board
                                        </span>
                                    </a>

                                    <a class="btn2" href="about/?ngoma=c" style="background-color: #318342; margin-left: 3rem; font-size: 13px !important;">
                                        <span>
                                            <i style="font-weight: 200"></i>
                                            CSR Activities
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <div class="card-inner" id="sessions">
        <div class="row card-container">
            <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
                <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(images/profile2.jpg);">
                    <p class="mobile2" style="margin-top: 50%; background: rgb(0,0,0,0.6); color: #fff; padding: 2%; font-weight: 200; text-align: justify;">
                        In addition to our open seminars organised in different cities around the world, we deliver
                        our three offerings (Leading yourself, Leading people and Leading Organisations) through
                        private sessions in the form of tailored in-house seminars, on and off-site executive
                        coaching as well as keynote speaking.</p>
                </div>

                <div class="content inner-top" style="margin-top: 0 !important; padding-top: 15px !important">
                    <div class="row">
                        <div class=" col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title-bg mobile1" style="font-size: 70px">Private Sessions</div>
                        </div>
                    </div>
                </div>

                <div class="content resume" style="margin-top: 60px">
                    <div class="row">
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="box-item card-box">
                                <div class="image">
                                    <a href="pages-inhouse.php">
                                        <img src="images/in-house.jpg" style="height: 350px; margin-top:5%; width: 300px; object-fit:cover; border-bottom-left-radius: 15px; border-bottom-right-radius: 15" />
                                        <span class="info">
											</span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="pages-inhouse.php" class="link" style="font-weight: 200; font-size:20px; text-align: center; border-bottom:none !important; cursor: pointer;">
                                        In-House Seminars</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="box-item card-box">
                                <div class="image">
                                    <a href="pages-keynote.php">
                                        <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" style="height: 350px; margin-top:5%; width: 300px; object-fit:cover; border-bottom-left-radius: 15px; border-bottom-right-radius: 15" />
                                        <span class="info">
											</span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="pages-keynote.php" class="link" style="font-weight: 200; font-size:20px; text-align: center; border-bottom:none !important; cursor: pointer;">
                                        Keynote Speaking</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 card3" id="card4">
                            <div class="box-item card-box">
                                <div class="image">
                                    <a href="pages-executive.php">
                                        <img src="images/profile4.jpg" style="height: 350px; margin-top:5%; width: 300px; object-fit:cover; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px" />
                                        <span class="info">
											</span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="pages-executive.php" class="link" style="font-weight: 200; font-size:20px; text-align: left; border-bottom:none !important; cursor: pointer;">
                                        Executive Coaching</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
