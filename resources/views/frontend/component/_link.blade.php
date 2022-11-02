<li class="{{ Request::url() === $route ? 'active' : '' }}">
    <a href="{{ $route }}">
        <span>{{ $name ?? "" }}</span>
    </a>
</li>
