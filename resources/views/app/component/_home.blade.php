<style>
    .cardm{
        background-image: url({{asset('images/background.jpg')}});
        background-size: cover;
        background-repeat: no-repeat; margin-top: -2rem;
        object-fit: cover;
    }
    .logo-triplex{
        width: 30%;
    }

    @media (max-width: 576px) {
        .logo-triplex {
            width: 60%;
        }

        .cardm{
            margin-top: 60px;
        }
    }
</style>
<div class="content inner-top  col-d-lg-8 cardm">

    <div class="row">
        <div style="align-content: center; align-items: center; padding: 32px">
            <div class="row">
                <a href="{{ route('app.name') }}">
                    <img class="logo-triplex" src="{{ asset('images/logo-text.png') }}"
                         alt="triplex-leadership-logo">
                </a>
            </div>
            <div class="row">
                <p style="font-size: 32px; text-align: center; line-height: 1.2;  color:white;  text-shadow: 2px 2px 4px #000000; font-weight:200;">
                    We help organisations and individuals<br> to reach a higher level of
                    excellence.
                </p>
            </div>
            <div class="row">
                <div
                    style="background-color: rgba(0,0,0,.5);padding: 1rem 1rem .5rem; border-radius: 10px;box-shadow: #0f2828; font-size: 15px; color: #fff;font-weight: 200">
                    <p>
                        Grounded in ongoing
                        research and 15 years of experience developing successful business leaders,
                        our offerings address the three aspects of leadership: Leading Youself;
                        Leading People; Leading Organisations.
                    </p>
                </div>
            </div>
        </div>

        <div class="col col-m-12 col-t-4 col-d-4 col-d-lg-4">
            <div class="service-item card-box">
                <div class="icon">
                    <i class="far fa-compass"
                       style="background-color: red; color:white; height: 20%;border-radius: 50px"></i>
                </div>
                <div class="name" style="margin-top: 5px; font-weight: 500;">
                    <a href="{{ route('leading.index') }}" style="color: #222;font-size: 15px">
                        Leading Yourself
                    </a>
                </div>
            </div>
        </div>

        <div class="col col-m-12 col-t-4 col-d-4 col-d-lg-4">
            <div class="service-item card-box">
                <div class="icon">
                    <i class="far fa-compass"
                       style="background-color: blue; color:white; height: 10%;border-radius: 50px"></i>
                </div>
                <div class="name" style="margin-top: 5px; font-weight: 500;">
                    <a href="{{ route('people.index') }}" style="color: #222;font-size: 15px">
                        Leading People
                    </a>
                </div>
            </div>
        </div>

        <div class="col col-m-12 col-t-4 col-d-4 col-d-lg-4">
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

<div class="card-image Mobile col col-m-12 col-t-12 col-d-4 col-d-lg-4"
     style="background-image: url({{ asset('assets/images/bg1.jpg') }});">
    <div class="" style="color: #9e9e9e;font-size: 20px; text-align: left;">
        <span>Upcoming</span> Public Events
    </div>
    <br>
    @include('app.component._card')
</div>
