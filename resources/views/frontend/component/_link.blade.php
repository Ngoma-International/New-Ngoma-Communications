<li class="{{ Request::url() === $route ? 'active' : '' }}">
    <a href="{{ $route }}">
        <span class="{{ $icons ?? "" }}"></span>
        <span class="link">{{ $name ?? "" }}</span>
    </a>
</li>
