<aside class="main-sidebar hidden-print ">
    <section class="sidebar" id="sidebar-scroll">
        <ul class="sidebar-menu">
            @include('backend.component._link', [
                'route' => route('admins.seminary.index'),
                'icons' => "icon-graduation",
                'name' => "Seminaire"
            ])
            @include('backend.component._link', [
                'route' => route('admins.podcast.index'),
                'icons' => "icon-earphones",
                'name' => "Podcast"
            ])
            @include('backend.component._link', [
                'route' => route('admins.ticket.index'),
                'icons' => "icon-wallet",
                'name' => "Verification ticket"
            ])
            @include('backend.component._link', [
                'route' => route('admins.booking.name'),
                'icons' => "icon-bag",
                'name' => "Reservation"
            ])
            @include('backend.component._link', [
                'route' => route('admins.class-room.index'),
                'icons' => "icon-film",
                'name' => "Cree un salon"
            ])
            @include('backend.component._link', [
                'route' => route('admins.users.index'),
                'icons' => "icon-people",
                'name' => "Utilisateur"
            ])
        </ul>
    </section>
</aside>
