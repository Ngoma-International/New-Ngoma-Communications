<div class="nk-sidebar nk-sidebar-fixed is-theme " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('admins.backend.index') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="" srcset=" 2x" alt="logo">
                <img class="logo-small logo-img logo-img-small" src="" srcset=" 2x" alt="logo-small">
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
                    @include('backend.shared._link', [
                         'route' => route('admins.seminary.index'),
                         'icons' => "ni-block-over",
                         'name' => "Seminaire"
                    ])
                    @include('backend.shared._link', [
                        'route' => route('admins.podcast.index'),
                        'icons' => "ni-mic",
                        'name' => "Podcast"
                    ])
                    @include('backend.shared._link', [
                        'route' => route('admins.ticket.index'),
                        'icons' => "ni-loader",
                        'name' => "Verification ticket"
                    ])
                    @include('backend.shared._link', [
                        'route' => route('admins.booking.name'),
                        'icons' => "ni-download",
                        'name' => "Reservation"
                    ])
                    @include('backend.shared._link', [
                        'route' => route('admins.class-room.index'),
                        'icons' => "ni-video",
                        'name' => "Cree un salon"
                    ])
                    @include('backend.shared._link', [
                        'route' => route('admins.users.index'),
                        'icons' => "ni-user-alt",
                        'name' => "Utilisateur"
                    ])
                </ul>
            </div>
        </div>
    </div>
</div>
