<div class="card-image desktop col col-m-12 col-t-12 col-d-4 col-d-lg-4">
    <div style="color: whitesmoke !important;">Upcoming Events</div>
    @include('app.component._card', with($viewModel))
</div>

<div class="content inner-top  col-d-lg-10 cardm" style="background-image: url(https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F61526849%2F71524111461%2F1%2Foriginal.20190501-194340?w=1000&auto=compress&rect=0%2C7%2C5184%2C2592&s=cf96f2d6e270c2302c8a2b38fffd165b);background-repeat: no-repeat; margin-top: -2rem; ">
    <div class="row">
        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
            <div class="row">
                <div>
                    <img src="{{ asset('assets/images/Triplex.svg') }}" style="width: 10%; height: 10%; color: white" class="logo" alt="">
                </div>
            </div>
            <div class="text">
                <p style="font-size: 32px; line-height: 1.2;  color:white;  text-shadow: 2px 2px 4px #000000; text-align: center; font-weight:200;">
                    We help organisations and individuals<br> to reach a higher level of
                    excellence.
                </p>
            </div>
            <br>
            <div style="background-color: rgba(0,0,0,.5);padding: 1rem 1rem .5rem; border-radius: 10px;box-shadow: #0f2828">
                <p style="font-size: 15px; color: #fff;font-weight: 200">
                    Grounded in ongoing
                    research and 15 years of experience developing successful business leaders,
                    our offerings address the three aspects of leadership: Leading Youself;
                    Leading People; Leading Organisations.
                </p>
            </div>
        </div>

        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-4">
            <div class="service-item card-box">
                <div class="icon">
                    <i class="far fa-compass" style="background-color: red; color:white; height: 20%;border-radius: 50px"></i>
                </div>
                <div class="name" style="margin-top: 5px; font-weight: 500;">
                    <a href="{{ route('leading.index') }}" style="color: #222;font-size: 15px">
                        Leading Yourself
                    </a>
                </div>
            </div>
        </div>

        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-4">
            <div class="service-item card-box">
                <div class="icon">
                    <i class="far fa-compass" style="background-color: blue; color:white; height: 10%;border-radius: 50px"></i>
                </div>
                <div class="name" style="margin-top: 5px; font-weight: 500;">
                    <a href="{{ route('people.index') }}" style="color: #222;font-size: 15px">
                        Leading People
                    </a>
                </div>
            </div>
        </div>

        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-4">
            <div class="service-item card-box">
                <div class="icon">
                    <i class="far fa-compass" style="background-color: #4caf50; color:white;border-radius: 50px"></i>
                </div>
                <div class="name" style="margin-top: 5px; font-weight: 500;">
                    <a href="{{ route('organisation.index') }}" style="color: #222;font-size: 15px">
                        Leading Organisations
                    </a>
                </div>
            </div>
        </div>
        <div style="min-height: 2rem"></div>
    </div>
</div>

<div class="card-image Mobile col col-m-12 col-t-12 col-d-4 col-d-lg-4" style="background-image: url({{ asset('assets/images/bg1.jpg') }});">
    <div class="" style="color: #9e9e9e;font-size: 20px; text-align: left;">
        <span>Upcoming</span> Public Training
    </div>
    <br>
    @include('app.component._card', with($viewModel))
    <br>
    <div style="z-index: 100 !important; display: flex; justify-items: center; justify-content: space-between; padding-right: 9%">
        <a href="events.php" style="padding: .5rem 1rem; background-color: #56b345;color: #fff;border-radius: 50px;font-weight: 500;font-size: 12px;">
            <span>
                MorePublic Training
            </span>
        </a>
        <a href="in-house.php" style="padding: .5rem 1rem; background-color: #56b345;color: #fff;border-radius: 50px;font-weight: 500;font-size: 12px;">
            <span>
                Inhouse
            </span>
        </a>
        <a href="podcast.php" style="padding: .5rem 1rem; background-color: #56b345;color: #fff;border-radius: 50px;font-weight: 500;font-size: 12px;">
            <span>
                Podcasts
            </span>
        </a>
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
