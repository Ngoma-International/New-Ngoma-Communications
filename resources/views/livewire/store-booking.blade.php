<form wire:submit.prevent="storeBooking">
    <div class="row">
        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
            <div class="group-val">
                <input
                    type="text"
                    name="username"
                    wire:model.lazy="username"
                    id="username"
                    value="{{ old('username') }}"
                    placeholder="Username" />
            </div>
            @error('username') <span style="color: rgb(239 68 68); font-size: 12px; font-weight: bold">{{ $message }}</span>@enderror
        </div>
        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
            <div class="group-val">
                <input
                    type="text"
                    name="firstname"
                    wire:model.lazy="firstname"
                    id="firstname"
                    value="{{ old('firstname') }}"
                    placeholder="Firstname" />
            </div>
            @error('firstname') <span style="color: rgb(239 68 68); font-size: 12px; font-weight: bold">{{ $message }}</span>@enderror
        </div>
        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
            <div class="group-val">
                <input
                    type="email"
                    value="{{ old('email') }}"
                    name="email"
                    id="email"
                    wire:model.lazy="email"
                    placeholder="email" />
            </div>
            @error('email') <span style="color: rgb(239 68 68); font-size: 12px; font-weight: bold">{{ $message }}</span>@enderror
        </div>
        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
            <div class="group-val">
                <input
                    type="text"
                    name="phone_number"
                    value="{{ old('phone_number') }}"
                    id="phone_number"
                    wire:model.lazy="phone_number"
                    placeholder="Phone Number" />
            </div>
            @error('phone_number') <span style="color: rgb(239 68 68); font-size: 12px; font-weight: bold">{{ $message }}</span>@enderror
        </div>
        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
            <div class="group-val">
                <input
                    type="number"
                    value="{{ old('ticket_number') }}"
                    name="ticket_number"
                    id="ticket_number"
                    wire:model.lazy="ticket_number"
                    placeholder="Ticket Number" />
            </div>
            @error('ticket_number') <span style="color: rgb(239 68 68); font-size: 12px; font-weight: bold">{{ $message }}</span>@enderror
        </div>
        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
            <div class="group-val">
                <select name="country" wire:model.lazy="country" id="country" style="width: 100%; height: 60px; background: #606265; color: white; border: none; border-bottom: 1px solid #777; margin: 1%; padding-bottom: 1%">
                    @include('admin.shared.seminar._country')
                </select>
            </div>
        </div>
    </div>
    <div style="padding: 0; margin: 0; text-align: center">
        <button type="submit" style="background:#5ac24e; padding-right: 2rem; padding-left: 2rem">
            <span>Booking Ticket</span>
        </button>
    </div>
</form>
