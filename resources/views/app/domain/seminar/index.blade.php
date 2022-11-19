@extends('app.layouts.base')

@section('title')

@endsection

@section('title')
    <div class="card-inner blogs active" id="blog-card">
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
                                    <div class="title-bg" style="margin-top: 5rem; font-size: 7rem;">Public Training</div><br><br>
                                </div>
                                <div class="col col-m-10 col-t-8 col-d-8 col-d-lg-8" style="text-align: left;font-size: 16px;margin-top: 4rem;">
                                    <p style="margin-top: 2rem;">
                                        <center>
                                            Our public training sessions are delivered through public, teambuilding activities, boot camps or weekend getaways for corporate, informal group, schools and individuals.
                                        </center>
                                    </p>
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
                                                    <select id="country" name="" onchange="change()" class="filter" style="width:50%; margin-top:30px; margin-left: 24%;margin-right: 24%; height:50px !important; background-color: #383a3d; color:white; border: none; padding: 10px;" class="btn btn-info">
                                                        <option value="">-- Events per Category --</option>
                                                        <option value="all">All Events</option>
                                                        <?php echo getCountry($con); ?>
                                                    </select>
                                                    <script type="text/javascript">
                                                        function change(){
                                                            var all = document.getElementById('country').value;
                                                            if(all === 'all'){
                                                                window.location = "events.php";
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row filtered" id="display"></div>
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
@endsection
