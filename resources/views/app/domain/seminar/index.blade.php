<div class="card-wrap blogs-content col col-m-12 col-t-12 col-d-12 col-d-lg-12" data-simplebar>
    <div class="content inner-top">
        <div class="row">
            <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                <div class="title-bg">Seminar</div>
            </div>
        </div>
    </div>

    <div class="content blog">
        <div class="row">
            <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                <div class="title">
                    <span>Ours</span> Seminar
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($seminarsViewModel->seminars() as $seminar)
                <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-4">
                    <div class="box-item card-box">
                        <div class="">
                            <a href="{{ route('seminar.show', $seminar->id) }}">
                                <img
                                    src="{{ asset('storage/'.$seminar->images) }}"
                                    style="width: 100%; height: 30%; border-radius: 10px; image-orientation: from-image"
                                    alt="{{ $seminar->images }}" />
                            </a>
                        </div>
                        <div class="desc">
                            <a href="{{ route('seminar.show', $seminar->id) }}" class="name">{{ ucfirst($seminar->name) ?? "" }}</a>
                            <div class="category" style="color: whitesmoke; margin-top: 1rem;">{{ ucfirst($seminar->category->name) ?? "" }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pager">
            <span aria-current="page" class="page-numbers current">1</span>
            <a class="page-numbers" href="#">2</a>
            <a class="next page-numbers" href="#">Next</a>
        </div>
    </div>
</div>
