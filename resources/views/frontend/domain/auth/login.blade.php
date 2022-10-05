@extends('frontend.layouts.auth')

@section('title')
    Authentification
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="login-card card-block">
                <form method="POST" action="{{ route('login') }}" class="md-float-material">
                    @csrf
                    <div class="text-center">
                        <img src="" alt="Ngoma Communication">
                    </div>
                    <h3 class="text-center txt-primary">
                        {{ __('Login') }}
                    </h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-input-wrapper">
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    autofocus
                                    class="md-form-control @error('email') error @enderror"
                                    required="required"/>
                                <label>{{ __('Email Address') }}</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-input-wrapper">
                                <input
                                    class="md-form-control @error('password') error @enderror"
                                    id="password"
                                    type="password"
                                    name="password"
                                    required
                                    autocomplete="current-password"
                                />
                                <label>{{ __('Password') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
                                <label class="input-checkbox checkbox-primary">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="remember"
                                        id="remember"
                                        {{ old('remember') ? 'checked' : '' }}
                                    >
                                    <span class="checkbox"></span>
                                </label>
                                <div class="captions">{{ __('Remember Me') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 offset-xs-1">
                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
