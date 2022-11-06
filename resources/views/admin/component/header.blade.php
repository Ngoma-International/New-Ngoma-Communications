<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu">
                    <em class="icon ni ni-menu"></em>
                </a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="{{ route('admins.backend.index') }}" class="logo-link">
                    <img class="logo-light logo-img" src="{{ asset('frontend/images/icon.png') }}" srcset="{{ asset('frontend/images/icon.png') }} 2x" alt="logo">
                    <img class="logo-dark logo-img" src="{{ asset('frontend/images/icon.png') }}" srcset="{{ asset('frontend/images/icon.png') }} 2x" alt="logo-dark">
                </a>
            </div>
            <div class="nk-header-search ml-3 ml-xl-0"></div>
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown notification-dropdown">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="icon-status icon-status-info">
                                <em class="icon ni ni-bell"></em>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                <a href="#">Mark All as Read</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="nk-notification">
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">
                                                You have requested to <span>Widthdrawl</span>
                                            </div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-foot center">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-status user-status-active">{{ auth()->user()->username }}</div>
                                    <div class="user-name dropdown-indicator">{{ auth()->user()->email }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>{{ substr(auth()->user()->username, 0,2) }}</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{ auth()->user()->username }}</span>
                                        <span class="sub-text">{{ auth()->user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="{{ route('admins.profile.index')  }}">
                                            <em class="icon ni ni-user-alt"></em>
                                            <span>Parametre</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <em class="icon ni ni-signout"></em>
                                            <span>Sign out</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
