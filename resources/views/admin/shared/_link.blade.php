<li class="nk-menu-item {{ Request::url() === $route ? 'active current-page' : '' }}">
    <a href="{{ $route }}" class="nk-menu-link">
        <span class="nk-menu-icon"><em class="icon ni {{ $icons ?? "" }}"></em></span>
        <span class="nk-menu-text">{{ $name ?? "" }}</span>
    </a>
</li>
