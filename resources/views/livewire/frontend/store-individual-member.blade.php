<form wire:click.prevent.lazy="submitIndividualMember">
    <div class="col col-m-11 col-t-11 col-d-10 col-d-lg-10" style="margin-left:5%; margin-right:5%;">
        <div class="row">
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="username"
                    wire:model.lazy="username"
                    placeholder="Username"
                >
                @error('username')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="firstname"
                    wire:model.lazy="firstname"
                    placeholder="firstname"
                >
                @error('firstname')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="email"
                    class="form-group fiftyPercent"
                    name="email"
                    wire:model.lazy="email"
                    placeholder="Email"
                    required>
                @error('email')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="date"
                    class="form-group fiftyPercent"
                    name="birthday"
                    wire:model.lazy="birthday"
                    placeholder="birthday"
                >
                @error('birthday')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <select
                    class="form-group fiftyPercent"
                    wire:model.lazy="country"
                    name="country" style="margin-top: 9%; background: transparent; border: none; width: 100%; color: gray; border-bottom: 1px solid #777;">
                    @include('app.component._country')
                </select>
                @error('country')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="city"
                    wire:model.lazy="city"
                    placeholder="city"
                >
                @error('city')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="position"
                    wire:model.lazy="position"
                    placeholder="position"
                >
                @error('position')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="department"
                    wire:model.lazy="department"
                    placeholder="department"
                >
                @error('department')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <select
                    class="form-group fiftyPercent"
                    wire:model.lazy="sector"
                    name="sector" style="margin-top: 9%; background: transparent; border: none; width: 100%; color: gray; border-bottom: 1px solid #777;">
                    @include('app.component._sector')
                </select>
                @error('country')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="tel"
                    class="form-group fiftyPercent"
                    name="phone_number"
                    wire:model.lazy="phone_number"
                    placeholder="phone_number"
                >
                @error('phone_number')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12" style="text-align: center">
                <button type="submit" style="background: #0f2828; color: white; padding: 8px 15px; border: none; border-radius: 10px">submit</button>
            </div>
        </div>
    </div>
</form>
