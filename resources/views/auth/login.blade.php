@extends('app.layouts.auth')

@section('title')
    {{ __('frontend.login') }}
@endsection

@section('content')
    <div class="nk-split nk-split-page nk-split-md">
        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
            <div class="nk-block nk-block-middle nk-auth-body">
                <div class="brand-logo pb-5">
                    <a href="{{ route('app.name') }}" class="logo-link">
                        <img
                                src="{{ asset('assets/images/Triplex 3.svg')  }}"
                                alt="logo"
                                style="height: 40%; width: 40%;"
                                class="img-fluid text-center">
                    </a>
                </div>
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title">{{ __('frontend.ngoma.communication') }}</h5>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700 mt-2" role="alert">
                        <div>
                            @foreach ($errors->all() as $error)
                                {{ $error }}. <br>
                            @endforeach
                        </div>
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="email">{{ __('frontend.email') }}</label>
                        </div>
                        <input
                                type="email"
                                id="email"
                                placeholder="Enter your email address or username"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                autofocus
                                class="form-control @error('email') error @enderror"
                        >
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="password">{{ __('frontend.password') }}</label>
                        </div>
                        <div class="form-control-wrap">
                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch"
                               data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input
                                    class="form-control @error('email') error @enderror"
                                    type="password"
                                    id="password"
                                    placeholder="Enter your password"
                                    name="password"
                                    required
                                    autocomplete="current-password"
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-primary btn-block">{{ __('frontend.login') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="nk-split-content nk-split-stretch bg-abstract"></div>
    </div>
@endsection
