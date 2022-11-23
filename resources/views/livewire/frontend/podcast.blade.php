@foreach($podcasts as $podcast)
    <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item {{ $podcast->type->name }}">
        <div class="box-item card-box">
            <div class="">
                <a href="{{ route('podcast.show', $podcast->id) }}">
                    <img
                        src="{{ asset('storage/'. $podcast->thumbnail) }}"
                        style="width: 100%; height: 180px; border-radius: 10px; object-fit: cover;"
                        alt="{{ $podcast->title }}" />
                </a>
            </div>
            <div class="desc">
                <div style="display: flex; justify-content: space-between; align-items: center">
                    <a href="{{ route('podcast.show', $podcast->id) }}" class="name">{{ ucfirst(substr($podcast->title, 0, 25)) ?? "" }}...</a>
                    <span style="color: white; font-weight: 500; font-family: Roboto,sans-serif, Arial">{{ $podcast->type->name ?? "" }}</span>
                </div>

                <div class="category">{{ ucfirst($podcast->offering->name) ?? "" }}</div>
            </div>
        </div>
    </div>
@endforeach
