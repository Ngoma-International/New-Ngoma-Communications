<form wire:click.prevent.lazy="submitPrivateEvent">
    <div class="col col-m-11 col-t-11 col-d-10 col-d-lg-10" style="margin-left:5%; margin-right:5%;">
        <div class="row">
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="firstname"
                    wire:model.lazy="firstname"
                    placeholder="First Name"
                    >
                @error('firstname')
                    <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
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
                    type="text"
                    class="form-group fiftyPercent"
                    name="company"
                    wire:model.lazy="company"
                    placeholder="Company"
                    >
                @error('company')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="jobTitle"
                    wire:model.lazy="jobTitle"
                    placeholder="Job Title"
                    >
                @error('jobTitle')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="tel"
                    class="form-group fiftyPercent"
                    name="phone"
                    wire:model.lazy="phone"
                    placeholder="Phone"
                >
                @error('phone')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="city"
                    wire:model.lazy="city"
                    placeholder="City / Town"
                >
                @error('city')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <select
                    class="form-group fiftyPercent"
                    wire:model.lazy="category"
                    name="category" style="margin-top: 9%; background: transparent; border: none; width: 100%; color: gray; border-bottom: 1px solid #777;">
                    <option style="margin-bottom: 2%" value="">Please Select Category</option>
                    <option value="Leading Yourself"> Leading Yourself</option>
                    <option value="Leading People"> Leading People</option>
                    <option value="Leading Organisations"> Leading Organisations</option>
                    <option value="Life Skills"> Life Skills</option>
                </select>
                @error('category')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>

            <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                 <textarea
                     placeholder="Your Message"
                     name="comments"
                     wire:model.lazy="comments"
                     cols="4"
                     style="width: 98%; margin:2%;"
                 ></textarea>
                @error('comments')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12" style="text-align: center">
                <button type="submit" style="background: #0f2828; color: white; padding: 8px 15px; border: none; border-radius: 10px">submit</button>
            </div>
        </div>
    </div>
</form>
