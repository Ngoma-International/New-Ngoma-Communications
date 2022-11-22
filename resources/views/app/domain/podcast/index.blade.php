<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-8" data-simplebar>
    <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-4" style="background-image: url('');"></div>
    <div class="content inner-top">
        <div class="row">
            <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                <div class="title-bg">Podcast</div>
            </div>
        </div>
    </div>
    <div class="content works">
        <div class="row">
            <div class="col col-m-12 col-t-5 col-d-5 col-d-lg-5">
                <div class="title">
                    <span>My</span> Podcast
                </div>
            </div>
            <div class="col col-m-12 col-t-7 col-d-7 col-d-lg-7">
                <div class="filter-menu filter-button-group">
                    <div class="f_btn active">
                        <label><input type="radio" name="fl_radio" value="grid-item" />All</label>
                    </div>
                    <div class="f_btn">
                        <label><input type="radio" name="fl_radio" value="video" />Video</label>
                    </div>
                    <div class="f_btn">
                        <label><input type="radio" name="fl_radio" value="music" />Music</label>
                    </div>
                </div>

            </div>
        </div>
        <div class="row grid-items">
            @foreach($podcastModel->podcasts() as $podcast)
                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item {{ $podcast->type->name }}">
                    <div class="box-item card-box">
                        <div class="image">
                            <a href="{{ route('podcast.show', $podcast->id) }}" class="has-popup-image">
                                <img src="{{ asset('storage/'. $podcast->thumbnail) }}" alt="{{ $podcast->title }}" />
                                <span class="info">
                                <span class="icon la la-camera-retro"></span>
                            </span>
                            </a>
                        </div>
                        <div class="desc">
                            <a href="{{ route('podcast.show', $podcast->id) }}" class="name has-popup-image">{{ ucfirst($podcast->title) ?? "" }}</a>
                            <div class="category">{{ ucfirst($podcast->offering->name) ?? "" }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
