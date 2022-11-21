@extends('app.layouts.base')

@section('title')
    key note
@endsection

@section('content')
    <div class="card-inner blogs active" id="blog-card">
        <div class="row card-container" data-simplebar>
            <div class="blogs-content col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                <div class="content inner-top">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div>
                                <a href="events.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342;padding: 8px 8px; border-radius: 5px; margin-bottom: 6rem;">Open Seminars</a>

                                <a href="podcast.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342; margin-left: 10rem;padding: 8px 8px; border-radius: 5px;">Podcasts</a>

                                <a href="in-house.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342; margin-left: 10rem;padding: 8px 8px; border-radius: 5px;">In-House Seminar</a>
                            </div>
                            <div class="title-bg mobile1" style="margin-top: 5rem; ">Keynote Speaking</div>
                        </div>
                    </div>
                </div>
                <div class="content blog" style="margin-top: 65px">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3" style="margin-top: 1rem !important;">
                            <div class="box-item card-box" >
                                <div class="image" >
                                    <a href="">
                                        <img src="{{ asset('assets/images/eo4.jpg') }}" />
                                    </a>
                                </div>
                                <div class="desc">
                                    <form action="facilitators.php" method="post">
                                        <input type="hidden" name="offer" value="Keynote Speaking" />
                                        <input type="hidden" name="programme" value="KS" />
                                        <input type="hidden" name="concat" value="2" />
                                        <div class="desc" style="background: #318342;">
                                            <input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="View Speakers & Select">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="col col-m-12 col-t-12 col-d-8 col-d-lg-8" style="margin-top: 2rem !important;">
                            <div class="box-item card-box" style="text-align: left; padding: 5px; ">
                                <div class="desc" >
                                    <a class="name" style="font-size: 16px; font-weight: 200">Our Keynote speakers take your message, repack it to fit the relevant leadership offerinngs we provide (Lead Yourself, Lead People, Lead Organisations) and then deliver it back to your people with an unmatched power and intent.</a>
                                </div>
                                <div class="desc">
                                    <a class="name" style="font-size: 16px; font-weight: 200">Bringing in an outside voice creates a non-replicable spark and authority. Not only can they help you get your message across, but they can also help boost motivation, change their way of thinking and leave your people feeling energised and inspired.</a>
                                </div>
                                <div class="desc">
                                    <a class="name" style="font-size: 16px; font-weight: 200">You can know with confidence, that your audience will leave smiling and inspired to think about themselves, their lives, and their work in a better way. This is exactly what our Keynote Speaking is about.
                                </div>
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
@endsection
