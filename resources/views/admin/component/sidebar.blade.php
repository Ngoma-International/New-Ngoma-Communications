<div class="nk-sidebar nk-sidebar-fixed is-theme " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('admins.backend.index') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img"
                     src="{{ asset('assets/images/Triplex.svg') }}"
                     srcset="{{ asset('assets/images/Triplex.svg') }} 2x"
                     alt="logo">
                <img class="logo-small logo-img logo-img-small"
                     src="{{ asset('assets/images/Triplex.svg') }}"
                     srcset="{{ asset('assets/images/Triplex.svg') }} 2x"
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
                        'route' => route('admins.profile.index'),
                        'icons' => "ni-user-alt",
                        'name' => "Profile"
                    ])
                    @if(auth()->user()->role_id = \App\Enums\RoleEnum::Role_Admin)
                        @include('admin.shared._link', [
                            'route' => route('admins.seminar.index'),
                            'icons' => "ni-share-alt",
                            'name' => "Seminars"
                        ])
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
                        @include('.admin.shared._link', [
                            'route' => route('admins.booking.index'),
                            'icons' => "ni-calendar-booking",
                            'name' => "Bookings"
                        ])
                        @include('admin.shared._link', [
                            'route' => route('admins.users.index'),
                            'icons' => "ni-users",
                            'name' => "Users & Partners"
                        ])
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
