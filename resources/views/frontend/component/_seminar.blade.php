<article class="post vertical-item content-padding with_background">
    <div class="item-media-wrap">
        <div class="item-media">
            <img
                src="{{ asset('storage/'.$seminar->images) }}"
                alt="">
            <a href="" class="abs-link"></a>
        </div>
    </div>
    <div class="item-content">
        <div class="entry-meta small-text inline-content with_dividers highlight highlightlinks">
            <span>
                By
                <a href="">
                    {{ ucfirst($seminar->user->name) ?? "" }}
                </a>
            </span>
            <span>
                <a href="">
                    <time datetime="{{ $seminar->created_at }}">
                        {{ $seminar->created_at->diffForHumans() }}
                    </time>
                </a>
            </span>
        </div>
        <h3 class="entry-title">
            <a href="">{{ ucfirst($seminar->name) ?? "" }}</a>
        </h3>
    </div>
</article>
