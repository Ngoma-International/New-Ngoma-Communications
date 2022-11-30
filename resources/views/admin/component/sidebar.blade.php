<div class="nk-sidebar nk-sidebar-fixed is-theme " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('admins.backend.index') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img"
                     src="{{ asset('images/logo-text.png') }}"
                     srcset="{{ asset('images/logo-text.png') }} 2x"
                     alt="logo">
                <img class="logo-small logo-img logo-img-small"
                     src="{{ asset('images/logo-text.png') }}"
                     srcset="{{ asset('images/logo-text.png') }} 2x"
                     alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu">
                <em class="icon ni ni-arrow-left"></em>
            </a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu">
                <em class="icon ni ni-menu"></em>
            </a>
        </div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    @include('admin.shared._link', [
                        'route' => route('admins.backend.index'),
                        'icons' => "ni-grid-alt",
                        'name' => "Dashboard"
                    ])
                    @if(auth()->user()->role_id = \App\Enums\RoleEnum::Role_Admin)
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-users-fill"></em>
                                </span>
                                <span class="nk-menu-text">Event Managers</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @include('admin.shared._link', [
                                    'route' => route('admins.seminar.index'),
                                    'icons' => "ni-share-alt",
                                    'name' => "Events"
                                ])
                                @include('admin.shared._link', [
                                        'route' => route('admins.programs.index'),
                                        'icons' => "ni-share-alt",
                                        'name' => "Event Programs"
                                ])
                                @include('.admin.shared._link', [
                                    'route' => route('admins.booking.index'),
                                    'icons' => "ni-calendar-booking",
                                    'name' => "Bookings"
                                ])
                            </ul>
                        </li>
                        @include('admin.shared._link', [
                            'route' => route('admins.podcasts.index'),
                            'icons' => "ni-mic",
                            'name' => "Podcasts"
                        ])
                        @include('admin.shared._link', [
                            'route' => route('admins.ticket.search'),
                            'icons' => "ni-search",
                            'name' => "Ticket verify"
                        ])
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                <span class="nk-menu-text">User Manage</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @include('admin.shared._link', [
                                    'route' => route('admins.member.index'),
                                    'icons' => "ni-users",
                                    'name' => "Membre Individual"
                                ])
                                @include('admin.shared._link', [
                                    'route' => route('admins.collective.index'),
                                    'icons' => "ni-users",
                                    'name' => "Member Collectif"
                                ])
                                @include('admin.shared._link', [
                                    'route' => route('admins.facilitator.index'),
                                    'icons' => "ni-users",
                                    'name' => "Animateur"
                                ])
                                @include('admin.shared._link', [
                                    'route' => route('admins.users.index'),
                                    'icons' => "ni-users",
                                    'name' => "Users"
                                ])
                                @include('admin.shared._link', [
                                    'route' => route('admins.profile.index'),
                                    'icons' => "ni-user-alt",
                                    'name' => "Profile"
                                ])
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
