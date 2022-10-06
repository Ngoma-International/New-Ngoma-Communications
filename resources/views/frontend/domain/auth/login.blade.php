@extends('frontend.layouts.auth')

@section('title')
    Connexion
@endsection

@section('content')
    <div class="nk-split nk-split-page nk-split-md">
        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
            <div class="nk-block nk-block-middle nk-auth-body">
                <div class="brand-logo pb-5">
                    <a href="{{ route('app.name') }}" class="logo-link">
                        <img
                            class="logo-light logo-img logo-img-lg"
                            src=""
                            srcset=""
                            alt="logo">
                    </a>
                </div>
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title">Ngoma communication</h5>
                    </div>
                </div>
                <form  method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="email">Email or Username</label>
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
                            class="form-control form-control-lg @error('email') error @enderror"
                        >
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="password">Passcode</label>
                        </div>
                        <div class="form-control-wrap">
                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input
                                class="form-control form-control-lg @error('email') error @enderror"
                                type="password"
                                id="password"
                                placeholder="Enter your passcode"
                                name="password"
                                required
                                autocomplete="current-password"
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="nk-split-content nk-split-stretch bg-lighter">
            <div class="slider-wrap w-100 w-max-550px p-2 p-sm-5 m-auto">
                <div class="slider-init">
                    <div class="slider-item">
                        <div class="nk-feature nk-feature-center">
                            <div class="nk-feature-img">
                                <img
                                    class="round"
                                    src="{{ asset('assets/images/profile.jpg') }}"
                                    srcset="{{ asset('assets/images/profile.jpg') }} 2x"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
