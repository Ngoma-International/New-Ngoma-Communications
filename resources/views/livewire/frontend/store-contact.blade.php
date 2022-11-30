<form wire:click.prevent="storeContact">
    <div class="row">
        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
            <div class="group-val">
                <input
                    type="text"
                    name="name"
                    wire:model.lazy="name"
                    placeholder="Full Name" />
                @error('name')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
            <div class="group-val">
                <input
                    type="text"
                    name="email"
                    wire:model.lazy="email"
                    placeholder="Email Address" />
                @error('email')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
            <div class="group-val">
                <textarea
                    name="message"
                    id="message"
                    wire:model.lazy="message"
                    placeholder="Your Message"
                ></textarea>
                @error('message')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="align-center">
        <button type='submit' style="cursor: pointer; background: #0f2828; padding: 8px 15px; text-align: center; justify-content: center; border: none; border-radius: 10px;">
            Send Message
        </button>
    </div>
</form>
