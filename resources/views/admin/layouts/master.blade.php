<!DOCTYPE html>
<html lang="en">
<head>
    <title>Triplex Leadership Academy :: DashBoard</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link href="{{ asset('admin/assets/Ngoma/Ngoma Communication/4x/Ng1.jpg') }}" type="image/x-icon">
    <link href="{{ asset('admin/assets/Ngoma/Ngoma Communication/4x/Ng1.jpg') }}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/icon/themify-icons/themify-icons.css') }}">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/icon/icofont/css/icofont.css') }}">


    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/assets/icon/simple-line-icons/css/simple-line-icons.css') }}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/chartist/dist/chartist.css') }}" type="text/css"
        media="all">

    <!-- Weather css -->
    <link href="{{ asset('admin/assets/css/svg-weather.css') }}" rel="stylesheet">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/main.css') }}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/responsive.css') }}">



</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header-top hidden-print">
            <a href="{{ route('home') }}" class="logo"><b>Triplex Leadership Academy </b></a>
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->


                <!-- Navbar Right Menu-->
                <div class="navbar-custom-menu">
                    <ul class="top-nav">
                        <!--Notification Menu-->


                        <!-- chat dropdown -->

                        <!-- window screen -->
                        <li class="pc-rheader-submenu">
                            <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                <i class="icon-size-fullscreen"></i>
                            </a>

                        </li>
                        <!-- User Menu-->



                        <li><a href="#"><i class="icon-logout"></i> Logout</a></li>

                        <div id="morphsearch" class="morphsearch">
                            <form class="morphsearch-form">

                                <input class="morphsearch-input" type="search" placeholder="Search..." />

                                <button class="morphsearch-submit" type="submit">Search</button>

                            </form>
                            <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                        </div>
                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print ">
            <section class="sidebar" id="sidebar-scroll">
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered">
                        <a href="{{ route('dashboard_home') }}">
                            <img src="{{ asset('admin/assets/images/avatar-1.png') }}" alt="Profile"
                                class="img-circle" style="width: 140px; height: 120px; margin-left: 20px;">
                        </a>
                    </p>
                    <h5 class="centered"> Mimile Maisha</h5>
                    <li class="treeview">

                    <li class="nav-level"> <span></span></li>
                    <li><a href="{{ route('dashboard_home') }}"><i></i><span> Profile</span><span></span></a> </li>
                    <li><a href="{{ route('dashboard_seminars') }}"><i></i><span> Seminars</span>
                            <span< /span>
                        </a> </li>
                    <li><a href="{{ route('dashboard_podcasts') }}"><i></i><span> Podcasts</span><span></span></a> </li>
                    <li><a href="#"><i></i><span> Users and Partners</span><span></span></a> </li>
                    <li><a href="{{ route('ticket_verifier')}}"><i></i><span> Ticket Verifier</span><span></span></a> </li>
                    <li><a href="{{ route('all_bookings') }}"><i></i><span> Bookings</span><span></span></a> </li>
                    <li><a href="create.html"><i></i><span> Create Online Room</span><span></span></a> </li>
                    <li><a href="booked.html"><i></i><span> Booked Online Room</span><span></span></a> </li>
                    <ul class="treeview-menu active">

                        </li>




                        </li>

            </section>
        </aside>
        <div class="content-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

    </div>
    </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Jqurey -->
    <script src="{{ asset('admin/bower_components/Jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/tether/dist/js/tether.min.js') }}"></script>

    <!-- Required Fremwork -->
    <script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Scrollbar JS-->
    <script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin/bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>

    <!--classic JS-->
    <script src="{{ asset('admin/bower_components/classie/classie.js') }}"></script>

    <!-- notification -->
    <script src="{{ asset('admin/assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>

    <!-- Sparkline charts -->
    <script src="{{ asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.js') }}"></script>

    <!-- Counter js  -->
    <script src="{{ asset('admin/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/countdown/js/jquery.counterup.js') }}"></script>

    <!-- Echart js -->
    <script src="{{ asset('admin/assets/plugins/charts/echarts/js/echarts-all.js') }}"></script>


    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('admin/assets/js/main.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/pages/elements.js') }}"></script>
    <script src="{{ asset('admin/assets/js/menu.min.js') }}"></script>


</body>

</html>
