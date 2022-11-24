<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
    <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url({{ asset('assets/images/profile2.jpg') }});">
        <p class="mobile2" style="margin-top: 50%; background: rgb(0,0,0,0.6); color: #fff; padding: 2% 2%; font-weight: 500; text-align: justify;">
            In addition to our open seminars organised in different cities around the world, we deliver
            our three offerings (Leading yourself, Leading people and Leading Organisations) through
            private sessions in the form of tailored in-house seminars, on and off-site executive
            coaching as well as keynote speaking.
        </p>
    </div>

    <div class="content inner-top" style="margin-top: 0 !important; padding-top: 15px !important">
        <div class="row">
            <div class=" col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                <div class="title-bg mobile1" style="font-size: 60px">Private Sessions</div>
            </div>
        </div>
    </div>

    <div class="content resume" style="margin-top: 20px">
        <div class="row">
            <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                <div class="box-item card-box" style="padding: 5px">
                    <div>
                        <a href="{{ route('in.house') }}">
                            <img
                                src="{{ asset('assets/images/in-house.jpg') }}"
                                style="height: 200px; margin-top:5%; width: 100%; object-fit:cover; justify-content: center; border-radius: 10%"
                                alt="in-house"/>
                        </a>
                    </div>
                    <div class="desc">
                        <a href="{{ route('in.house') }}" class="link" style="font-weight: 200; font-size:20px; text-align: center; border-bottom:none !important; cursor: pointer;">
                            In-House Seminars
                        </a>
                    </div>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                <div class="box-item card-box" style="padding: 5px">
                    <div>
                        <a href="{{ route('keynote.page') }}">
                            <img
                                src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                                style="height: 200px; margin-top:5%; width: 100%; object-fit:cover; justify-content: center; border-radius: 10%"
                                alt="keynote"/>
                        </a>
                    </div>
                    <div class="desc">
                        <a href="{{ route('keynote.page') }}" class="link" style="font-weight: 200; font-size:20px; text-align: center; border-bottom:none !important; cursor: pointer;">
                            Keynote Speaking</a>
                    </div>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 card3" id="card4">
                <div class="box-item card-box" style="padding: 5px">
                    <div>
                        <a href="{{ route('executive.page') }}">
                            <img
                                src="{{ asset('assets/images/profile4.jpg') }}"
                                style="height: 200px; margin-top:5%; width: 100%; object-fit:cover; justify-content: center; border-radius: 10%"
                                alt="executive"/>
                        </a>
                    </div>
                    <div class="desc">
                        <a href="{{ route('executive.page') }}" class="link" style="font-weight: 200; font-size:20px; text-align: left; border-bottom:none !important; cursor: pointer;">
                            Executive Coaching</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
