@foreach($viewModel->seminars() as $seminar)
    <div class="card1">
        <div class="image">
            <a href="{{ route('seminar.show', $seminar->id) }}">
                <img class="d-block" style="background-position: center;max-height: 100%;background-size: cover" src="{{ asset('storage/'. $seminar->images) }}" alt="">
            </a>
        </div>

        <div class="card-block">
            <a href="{{ route('seminar.show', $seminar->id) }}">
                <p class="name" style="font-size: 14px; font-weight: 600">
                    {{ ucfirst($seminar->name) ?? "" }}
                </p>
            </a>
            <p>
            <span style="font-size: 12px; display: flex; justify-content: space-between; justify-items: center; flex-shrink: revert">
                <span style="font-size: 14px; font-weight: 600">
                    {{ $seminar->created_at->diffForHumans() ?? "" }}
                </span>
                <span style="font-size: 14px; font-weight: 600">
                    $ {{ $seminar->prices ?? "" }}
                </span>
            </span>
            <span style="font-size: 12px; font-weight: 600">
               {{ $seminar->country ?? "" }}
            </span>
            </p>
        </div>
    </div>
@endforeach
