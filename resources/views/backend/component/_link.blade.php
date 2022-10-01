<li class="{{ Request::url() === $route ? 'active' : '' }}">
    <a class="waves-effect waves-dark" href="{{ $route ?? "" }}">
        <i class="{{ $icons ?? "" }}"></i>
        <span>{{ $name ?? "" }}</span>
    </a>
</li>
