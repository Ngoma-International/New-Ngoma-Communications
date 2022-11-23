<div>
    @foreach($seminars as $seminar)
        <div class="col col-m-12 col-t-12 col-d-6 col-d-lg-4">
            <div class="box-item card-box">
                <div class="">
                    <a href="{{ route('seminar.show', $seminar->id) }}">
                        <img
                            src="{{ asset('storage/'.$seminar->images) }}"
                            style="width: 100%; height: 200px; border-radius: 10px; object-fit: cover;"
                            alt="{{ $seminar->images }}" />
                    </a>
                </div>
                <div class="desc">
                    <div style="display: flex; justify-content: space-between; align-items: center">
                        <a href="{{ route('seminar.show', $seminar->id) }}" class="name">{{ ucfirst($seminar->name) ?? "" }}</a>
                        <span style="color: white; font-weight: bold; font-family: Roboto,sans-serif, Arial">$ {{ $seminar->prices ?? 0 }}</span>
                    </div>
                    <div class="category" style="color: whitesmoke; margin-top: 1rem;">{{ ucfirst($seminar->category->name) ?? "" }}</div>
                </div>
            </div>
        </div>
    @endforeach
    {{ $seminars->links('app.component._pagination') }}
</div>
