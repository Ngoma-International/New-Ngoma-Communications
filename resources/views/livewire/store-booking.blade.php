
<form class="comment-form columns_padding_10" wire:submit.prevent="storeBooking">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group margin_0">
                <label for="username">Name<span class="required">*</span></label>
                <input
                    type="text"
                    value="{{ old('username') }}"
                    name="username"
                    id="username"
                    wire:model.lazy="username"
                    class="form-control "
                    placeholder="username"
                >
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group margin_0">
                <label for="firstname">Prenom<span class="required">*</span></label>
                <input
                    type="text"
                    value="{{ old('firstname') }}"
                    name="firstname"
                    id="firstname"
                    wire:model.lazy="firstname"
                    class="form-control"
                    placeholder="firstname"
                >
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group margin_0">
                <label for="email">Email<span class="required">*</span></label>
                <input
                    type="email"
                    value="{{ old('email') }}"
                    name="email"
                    id="email"
                    wire:model.lazy="email"
                    class="form-control"
                    placeholder="email"
                >
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group margin_0">
                <label for="phone_number">Telephone<span class="required">*</span></label>
                <input
                    type="text"
                    value="{{ old('phone_number') }}"
                    name="phone_number"
                    id="phone_number"
                    wire:model.lazy="phone_number"
                    class="form-control"
                    placeholder="phone number"
                >
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group margin_0">
                <label for="ticket_number">Nb Ticket<span class="required">*</span></label>
                <input
                    type="text"
                    value="{{ old('ticket_number') }}"
                    name="ticket_number"
                    id="ticket_number"
                    wire:model.lazy="ticket_number"
                    class="form-control"
                    placeholder="ticket number"
                >
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group margin_0">
                <label for="country">Nb Ticket<span class="required">*</span></label>
                <select name="country" wire:model.lazy="country" id="country">
                    @include('admin.shared.seminar._country')
                </select>
            </div>
        </div>
    </div>
    <div class="form-submit topmargin_35">
        <button type="submit" class="theme_button min_width_button">Reserver</button>
    </div>
</form>
