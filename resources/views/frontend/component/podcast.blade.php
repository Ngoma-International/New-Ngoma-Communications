<article class="post event-item side-item side-sm content-padding with_background">
    <div class="row">
        <div class="col-sm-5">
            <div class="item-media">
                <img
                    src="{{ asset('storage/'. $podcast->thumbnail) }}"
                    class="img-fluid"
                    alt="{{ $podcast->title ?? "" }}">
            </div>
        </div>
        <div class="col-sm-7">
            <div class="item-content">
                <header class="mb-2">
                    <div class="entry-meta small-text">
                        <div class="grey">
                            <time datetime="{{ $podcast->created_at->format('H:i') }}">
                                {{ $podcast->created_at->format('H:i') }}
                            </time>
                        </div>
                    </div>
                    <h3 class="entry-title small">
                        <a href="{{ route('podcast.show', $podcast->id) }}">
                            {{ ucfirst($podcast->title) ?? "" }}
                        </a>
                    </h3>
                </header>
                <div class="content-3lines-ellipsis">
                    <p>
                        {{ $podcast->description ?? "" }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</article>
