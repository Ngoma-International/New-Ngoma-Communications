<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>TriplexLeadershipAcademy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="vCard & Resume Template" />
    <meta name="keywords" content="vcard, resposnive, resume, personal, card, cv, cards, portfolio" />
    <meta name="author" content="beshleyua" />

    <!--
		Load Fonts
	-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/css/theme-colors/green.css')}}" />

    <!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <!--
		Favicons
	-->
    <link rel="shortcut icon" href="{{asset('assets/images/logo.png/')}}">

</head>

<body>
    <div class="page">

        <div class="theme_panel">
            <div class="toggle_bts">

            </div>
            <div class="theme_menu">

                <div class="segment">
                    <ul class="theme layout_style">


                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!--
			Preloader
		-->
        <div class="preloader">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--
			Header
		-->
        <header class="header">

            <!-- logo -->
            <div class="logo">
                <a href="{{ route('home') }}" class="logo"><img class="img-fluid able-logo" src="{{asset('assets/images/logo.png')}}" width="44px" height="57px"></a>
            </div>

            <!-- menu -->
            <div class="top-menu">
                <ul>
                    <li class="active">
                        <a href="#home-card">
                            <span class="icon la la-home"></span>
                            <span class="link">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#about-card">
                            <span class="icon la la-info-circle"></span>
                            <span class="link">About</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contacts-card">
                            <span class="icon la la-envelope"></span>
                            <span class="link">Contacts</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard_home') }}">
                            <span class="icon la la-user"></span>
                            <span class="link">Admin</span>
                        </a>


                    </li>

                </ul>
            </div>


            <!-- Started socials -->


            <!-- Mobile Menu -->
            <span class="menu-btn">
				<span class="m-line"></span>
            </span>

        </header>

        <!--
			Container
		-->
        <div class="container">

            <!--
				Card - Started
			-->
            <div class="card-inner card-started active" id="home-card">

                <!-- Started Background -->
                <div class="slide" style="background-image: url({{asset('assets/images/bg.jpg')}});"></div>

                <div class="centrize full-width">
                    <div class="vertical-center">

                        <!-- Started titles -->
                        <div class="title"><span>Triplex</span> Leadership Academy</div>
                        <div class="subtitle">
                            Learn
                            <div class="typing-title">
                                <p>to <strong>Lead Yourself.</strong></p>
                                <p>to <strong>Leading People.</strong></p>
                                <p>to <strong>Leading organisations.</strong></p>
                                <p>to <strong>Discover your Life Skills.</strong></p>
                                <p>to <strong>Become Trues Leaders.</strong></p>
                            </div>
                            <span class="typed-title"></span>
                        </div>

                    </div>
                </div>

            </div>

            <!-- 
				Card - About
			-->
            <div class="card-inner" id="about-card">
                <div class="row card-container">

                    <!--
						Card Wrap
					-->
                    <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

                        <!-- About Image -->
                        <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(Dashboard/html.phoenixcoded.net/quantum-able/default/assets/Ngoma/Ngoma\ Communication/3x/Ngoma2.png);"></div>

                        <!--
							Inner Top
						-->
                        <div class="content inner-top">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <div class="title-bg">About Us</div>
                                    <div class="text">
                                        <p>
                                            <strong>Hello, we are Triplex Leadership Academy</strong>,We help organisations and individuals to reach a higher level of excellence. <br /> Grounded in ongoing research and 15 years of experience developing
                                            successful business leaders, our offerings address the three aspects <strong>Leadership: <br />
											Leading Yourself; Leading People; Leading Organisations.</strong>
                                        </p>
                                        <p>
                                            In order to facilitate learning, we have made available to our subscribers several types of training in different formats which are:
                                        </p>
                                    </div>
                                    <div class="circle-bts">
                                        <a href="#"><span><i class="icon la la-compass"></i>Formations Publiques</span></a>
                                        <a href="#"><span><i class="icon la la-compass"></i>En interne</span></a>
                                        <a href="#"><span><i class="icon la la-compass"></i>Podcasts</span></a>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--
							Services
						-->
                        <div class="content services">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                                    <!-- title -->
                                    <div class="title"><span>Our</span> Offerings</div>

                                </div>
                            </div>

                            <!-- service items -->
                            <div class="row service-items">

                                <!-- service item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="service-item card-box">
                                        <div class="icon"><i class="la la-compass"></i></div>
                                        <div class="name">Lead Yourself</div>

                                    </div>
                                </div>

                                <!-- service item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="service-item card-box">
                                        <div class="icon"><i class="la la-compass"></i></div>
                                        <div class="name">Leading People</div>

                                    </div>
                                </div>

                                <!-- service item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="service-item card-box">
                                        <div class="icon"><i class="la la-compass"></i></div>
                                        <div class="name">Leading Organisations</div>

                                    </div>
                                </div>

                                <!-- service item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="service-item card-box">
                                        <div class="icon"><i class="la la-compass"></i></div>
                                        <div class="name">Life Skills</div>

                                    </div>
                                </div>

                                <!-- service item -->

                            </div>
                        </div>

                    </div>

                </div>




                <!--
							Price Tables
						-->


                <!-- pricing items -->



                <!--
							Fun Fact
						-->

                <!-- fuct item -->


                <!--
							Clients
						-->

                <!-- client item -->


                <!-- client item -->


                <!-- client item -->


                <!-- client item -->


                <!-- client item -->


            </div>

        </div>

    </div>

    </div>
    </div>

    <!-- 
				Card - Resume
			-->


    </div>

    </div>
    </div>

    <!-- 
				Card - Works
			-->




    <!-- 
				Card - Contacts
			-->
    <div class="card-inner" id="contacts-card">
        <div class="row card-container">

            <!--
						Card Wrap
					-->
            <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
                <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(Dashboard/html.phoenixcoded.net/quantum-able/default/assets/Ngoma/Ngoma\ Communication/3x/Ngoma2.png);"></div>




                <!--
							Inner Top
						-->
                <div class="content inner-top">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title-bg">Contacts</div>
                        </div>
                    </div>
                </div>

                <!--
							Contacts Info
						-->
                <div class="content contacts-info">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                            <!-- title -->
                            <div class="title"><span>Get</span> in Touch</div>

                        </div>
                    </div>

                    <!-- contacts items -->
                    <div class="row contacts-items">

                        <!-- contacts item -->
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="contacts-item card-box">
                                <div class="icon"><i class="la la-map-marker"></i></div>
                                <div class="name">Address</div>

                                <p>
                                    8 Meadowbrook Lane, Epsom Downs, <br> Sandton, 2196 Johannesburg
                                </p>
                                Sandton, 2196 Johannesburg.

                            </div>
                        </div>

                        <!-- contacts item -->
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="contacts-item card-box">
                                <div class="icon"><i class="la la-at"></i></div>
                                <div class="name">Email</div>

                                <a href="mailto:info@ngomacommunications.com">Envoyer un email</a>
                            </div>
                        </div>

                        <!-- contacts item -->
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="contacts-item card-box">
                                <div class="icon"><i class="la la-phone"></i></div>
                                <div class="name">Phone</div>
                                <a href="tel:+27110836004">
											+27 11 083 6004</a>
                            </div>
                        </div>

                        <!-- contacts item -->
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="contacts-item card-box">
                                <div class="icon"><i class="la la-check-square"></i></div>
                                <div class="name">Heures de Travail</div>
                                <p>
                                    08:00am-05:00pm (Lun-Ven)
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

                <!--
							Contacts Form
						-->


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

            </div>
        </div>

        <script src="{{asset('assets/js/scripts.min.js')}}"></script>

</body>

</html>