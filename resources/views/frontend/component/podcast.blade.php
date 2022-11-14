<article class="post event-item side-item side-sm content-padding with_background">
    <div class="row">
        <div class="col-sm-5">
            <a href="{{ route('podcast.show', $podcast->id) }}">
                <div class="item-media">
                    <img
                        src="{{ asset('storage/'. $podcast->thumbnail) }}"
                        class="img-fluid"
                        alt="{{ $podcast->title ?? "" }}">
                </div>
            </a>
        </div>
        <div class="col-sm-7">
            <div class="item-content">
                <header class="entry-header">
                    <div class="entry-meta small-text">
                        <div class="grey">
                            <time datetime="{{ $podcast->created_at->format('H:i') }}">
                                Published_at : {{ $podcast->created_at->format('H:i') }}
                            </time>
                        </div>
                        <div class="highlight">
                            Podcast Type: {{ ucfirst($podcast->type->name) ?? "" }}
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
