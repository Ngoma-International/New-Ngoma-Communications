<div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
    <div class="card-inner-group" data-simplebar>
        <div class="card-inner">
            <div class="user-card">
                <div class="user-avatar bg-primary">
                    <em class="icon ni ni-user"></em>
                </div>
                <div class="user-info">
                    <span class="lead-text">{{ ucfirst(auth()->user()->name) . ' - ' . ucfirst(auth()->user()->firstname ) ?? "" }}</span>
                    <span class="sub-text">{{ auth()->user()->email ?? "" }}</span>
                </div>
            </div>
        </div>
        <div class="card-inner p-0">
            <ul class="link-list-menu">
                <li>
                    <a class="{{ Request::url() === "" ? 'active' : '' }}" href="">
                        <em class="icon ni ni-user-fill-c"></em>
                        <span>Informations personnelles</span>
                    </a>
                </li>
                <li>
                    <a class="{{ Request::url() === "" ? 'active' : '' }}" href="">
                        <em class="icon ni ni-lock-alt-fill"></em>
                        <span>Informations de securités</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="card-inner">
            <div class="user-account-info py-0">
                <h6 class="overline-title-alt">Dernière connexion</h6>
                <p></p>
                <h6 class="overline-title-alt">Dernière IP</h6>
                <p></p>
            </div>
        </div>
    </div>
</div>
