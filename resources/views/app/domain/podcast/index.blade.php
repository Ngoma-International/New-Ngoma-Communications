@extends('app.layouts.base')

@section('title')

@endsection

@section('title')
    <div class="card-inner blogs active" id="blog-card">
        <div class="row card-container" data-simplebar="init"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 43px;"></div></div><div class="simplebar-track horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar"></div></div><div class="simplebar-scroll-content" style="padding-right: 12px; margin-bottom: -24px;"><div class="simplebar-content" style="padding-bottom: 12px; margin-right: -12px;">

                    <!--
                      Card Wrap
                    -->
                    <div class="card-wrap blogs-content col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                        <!--
                          Inner Top
                        -->
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

                        <!--
                          Blog
                        -->
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
                                                    <select id="country" onchange="change()"class="filter" style="width:50%; margin-top:30px; margin-left: 24%;margin-right: 24%; height:50px !important; background-color: #383a3d; color:white; border: none; padding: 10px;" class="btn btn-info">
                                                        <option value="">-- Filter per Category --</option>
                                                        <option value="all">All Podcasts</option>
                                                        <?php echo getPodcast($con); ?>
                                                    </select>
                                                    <script type="text/javascript">
                                                        function change(){

                                                            var all = document.getElementById('country').value;

                                                            if(all == 'all'){

                                                                window.location = "podcast.php";

                                                            }

                                                        }
                                                    </script>


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
                                    <!-- <span class="text" id="loadMore">Load More</span> -->
                                    <span class="icon"></span>
                                </a>
                            </div>

                        </div>

                    </div>


                </div></div></div>
    </div>
    <div class="lines-grid loaded">
        <div class="row">
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
            <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3"></div>
        </div>
    </div>


    <!--Popup modal-->
    <div class="overlay" id="popup1" >
        <div class="popup popBlock">
            <!--Pop up -->
        </div>

    </div>
@endsection
