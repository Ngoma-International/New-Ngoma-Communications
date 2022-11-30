<form wire:click.prevent.lazy="submitCollectifMember">
    <div class="col col-m-11 col-t-11 col-d-10 col-d-lg-10" style="margin-left:5%; margin-right:5%;">
        <div class="row">
            <h1 style="margin-left: 20px">
                <span style="font-weight: bold;">1.</span>
                Organisation information
            </h1>

            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="organisation_name"
                    wire:model.lazy="organisation_name"
                    placeholder="Name of organisation"
                >
                @error('organisation_name')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="organisation_register_number"
                    wire:model.lazy="organisation_register_number"
                    placeholder="Registration Number"
                >
                @error('organisation_register_number')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <select
                    class="form-group fiftyPercent"
                    wire:model.lazy="organisation_industry"
                    name="organisation_industry" style="margin-top: 9%; background: transparent; border: none; width: 100%; color: gray; border-bottom: 1px solid #777;">
                    @include('app.component._sector')
                </select>
                @error('organisation_industry')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <select
                    class="form-group fiftyPercent"
                    wire:model.lazy="organisation_position"
                    name="organisation_position" style="margin-top: 9%; background: transparent; border: none; width: 100%; color: gray; border-bottom: 1px solid #777;">
                    @include('app.component._country')
                </select>
                @error('organisation_position')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="organisation_position"
                    wire:model.lazy="organisation_position"
                    placeholder="Organisation Position"
                >
                @error('organisation_position')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="organisation_city"
                    wire:model.lazy="organisation_city"
                    placeholder="Organisation City"
                >
                @error('organisation_city')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="organisation_province"
                    wire:model.lazy="organisation_province"
                    placeholder="Organisation Provice Or State"
                >
                @error('organisation_province')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="organisation_website"
                    wire:model.lazy="organisation_website"
                    placeholder="Organisation Website"
                >
                @error('organisation_website')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>

            <h1 style="margin-left: 20px; margin-top: 3%">
                <span style="font-weight: bold;">2.</span>
                Main Contact
            </h1>

            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="member_username"
                    wire:model.lazy="member_username"
                    placeholder="Enter your first name"
                >
                @error('member_username')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="member_lastname"
                    wire:model.lazy="member_lastname"
                    placeholder="Enter your Last Name"
                >
                @error('member_lastname')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="email"
                    class="form-group fiftyPercent"
                    name="member_email"
                    wire:model.lazy="member_email"
                    placeholder="Enter Email Address"
                    required>
                @error('member_email')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="tel"
                    class="form-group fiftyPercent"
                    name="member_phone"
                    wire:model.lazy="member_phone"
                    placeholder="Enter phone number"
                >
                @error('member_phone')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="member_job_title"
                    wire:model.lazy="member_job_title"
                    placeholder="Job Title"
                >
                @error('member_job_title')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <select
                    class="form-group fiftyPercent"
                    wire:model.lazy="member_number"
                    name="member_number" style="margin-top: 9%; background: transparent; border: none; width: 100%; color: gray; border-bottom: 1px solid #777;">
                    <option value="">Number of Members</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                </select>
                @error('member_number')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>

            <h1 style="margin-left: 20px; margin-top: 3%">
                <span style="font-weight: bold;">2.</span>
                Contact for Billing
            </h1>

            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="contact_username"
                    wire:model.lazy="contact_username"
                    placeholder="Enter your First Name"
                >
                @error('contact_username')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="contact_firstname"
                    wire:model.lazy="contact_firstname"
                    placeholder="Enter your Last Name"
                >
                @error('contact_firstname')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="contact_email"
                    wire:model.lazy="contact_email"
                    placeholder="Enter Email Address"
                >
                @error('contact_email')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>

            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="tel"
                    class="form-group fiftyPercent"
                    name="contact_phone"
                    wire:model.lazy="contact_phone"
                    placeholder="Enter phone Number"
                >
                @error('contact_phone')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="text"
                    class="form-group fiftyPercent"
                    name="contact_job_title"
                    wire:model.lazy="contact_job_title"
                    placeholder="Job Title"
                >
                @error('contact_job_title')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <div class="col col-m-6 col-d-6 col-d-lg-6">
                <input
                    type="file"
                    class="form-group fiftyPercent"
                    name="images"
                    wire:model.lazy="images"
                    placeholder="Images"
                >
                @error('images')
                <span style="color: red; font-size: 12px">{{ $message }}</span>
                @enderror
            </div>

            <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12" style="text-align: center">
                <button type="submit" style="background: #0f2828; color: white; padding: 8px 15px; border: none; border-radius: 10px">submit</button>
            </div>
        </div>
    </div>
</form>
