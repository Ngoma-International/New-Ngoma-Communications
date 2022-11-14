<div class="card-inner">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div>
                <div class="nk-header-search ms-3 ms-xl-0 form-control form-control-lg">
                    <em class="icon ni ni-search"></em>
                    <input
                        type="text"
                        name="query"
                        wire:model="query"
                        class="form-control form-focus-none"
                        placeholder="Search anything">
                </div>
            </div>
        </div>
    </div>

    @if(strlen($query) > 3)
        @if($records !== null)
            <livewire:backend.result-search-component :booking="$records"/>
        @else
            <div class="mt-2">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-inner">
                                <p class="text-danger font-weight-bold">Desoler pas de reservation pour cette utilisateur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
</div>

