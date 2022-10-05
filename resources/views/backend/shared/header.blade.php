<header class="main-header-top hidden-print">
    <a href="{{ route('admins.backend.name') }}" class="logo">
        <img
            class="img-fluid able-logo"
            src=""
            alt="Theme-logo">
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
        <ul class="top-nav lft-nav"></ul>
        <div class="navbar-custom-menu">
            <ul class="top-nav">
                <li class="dropdown notification-menu">
                    <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                        <i class="icon-bell"></i>
                        <span class="badge badge-danger header-badge">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="not-head">
                            You have <b class="text-primary">4</b> new notifications.
                        </li>
                        <li class="bell-notification">
                            <a href="javascript:;" class="media">
                              <span class="media-left media-icon">
                                <img class="img-circle" src="" alt="User Image">
                              </span>
                                <div class="media-body">
                                    <span class="block">Lisa sent you a mail</span>
                                    <span class="text-muted block-time">2min ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="not-footer">
                            <a href="#!">See all notifications.</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-rheader-submenu">
                    <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span>
                            <img
                                class="img-circle "
                                src="{{ asset('storage/'. auth()->user()->images) }}"
                                style="width:40px;"
                                alt="User Image">
                        </span>
                        <span>
                             <b>{{ auth()->user()->name }}</b>
                            <i class=" icofont icofont-simple-down"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu settings-menu">
                        <li>
                            <a href="{{ route('admins.profile.index') }}">
                                <i class="icon-user"></i>
                                Profile
                            </a>
                        </li>
                        <li class="p-0">
                            <div class="dropdown-divider m-0"></div>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="icon-logout"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
