@extends('app.layout.auth')

@section('title')
    Authentification
@endsection

@section('content')
    <div class="w-full h-full z-100">
        <div class="w-full xl:max-w-screen-2xl md:w-5/12 px-4 smallmob:pt-5 sm:px-20 sm:pt-4 md:pt-0 md:p-0 z-50">
            <div class="z-100 w-full">
                <div class="w-full grid gap-8 bg-white p-1  py-5 rounded-lg sm:p-10 md:pl-10 lg:pl-24 md:p-10 ">
                    <div class="flex sticky top-0 bg-white py-2">
                        <a href="{{ route('home.index') }}">
                            <h1 class="flex items-center gap-2 text-2xl font-semibold">
                                <img src="{{ asset('frontend/images/icon.png') }}" alt="icon" class="w-10">
                                <span class="text-green-600">
                            Place
                            <span class=" text-gray-400">Event</span>
                        </span>
                            </h1>
                        </a>
                    </div>
                    <div class="grid gap-1">
                        <h2 class="text-xl font-semibold text-gray-700">Inscrivez-vous</h2>
                        <p class="text-sm text-gray-400">Inscrivez-vous sur la plateforme evenementielle</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="grid gap-8  w-full">
                        @csrf
                        <div class="grid gap-5">
                            <div class="grid gap-2">
                                <label for="email" class="text-base font-normal text-gray-600">Adresse mail</label>
                                <input
                                        type="email"
                                        id="email"
                                        placeholder="Enter your email address or username"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
                                        autofocus
                                        class="w-full text-sm px-4 py-3 text-gray-500 rounded-lg bg-white border border-gray-200 transition-all duration-300 placeholder:text-gray-300 focus:border-green-600 focus:shadow-sm focus:shadow-green-200">
                            </div>
                            <div class="grid gap-2">
                                <label for="username" class="text-base font-normal text-gray-600">Nom
                                    utilisateur</label>
                                <input
                                        type="text"
                                        id="username"
                                        placeholder="Enter your username"
                                        name="username"
                                        value="{{ old('username') }}"
                                        required
                                        autocomplete="username"
                                        autofocus
                                        class="w-full text-sm px-4 py-3 text-gray-500 rounded-lg bg-white border border-gray-200 transition-all duration-300 placeholder:text-gray-300 focus:border-green-600 focus:shadow-sm focus:shadow-green-200">
                            </div>
                            <div class="grid gap-2">
                                <label for="phones_number" class="text-base font-normal text-gray-600">Numero
                                    telephone</label>
                                <input
                                        type="text"
                                        id="phones_number"
                                        placeholder="Enter your phone number"
                                        name="phones_number"
                                        value="{{ old('phones_number') }}"
                                        required
                                        autocomplete="phones_number"
                                        autofocus
                                        class="w-full text-sm px-4 py-3 text-gray-500 rounded-lg bg-white border border-gray-200 transition-all duration-300 placeholder:text-gray-300 focus:border-green-600 focus:shadow-sm focus:shadow-green-200">
                            </div>
                            <div class="grid gap-2">
                                <label for="password" class="text-base font-normal text-gray-600">Mot de passe</label>
                                <input
                                        type="password"
                                        id="password"
                                        placeholder="Enter your password"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                        class="w-full text-sm px-4 py-3 text-gray-500 rounded-lg bg-white border border-gray-200 transition-all duration-300 placeholder:text-gray-300 focus:border-green-600 focus:shadow-sm focus:shadow-green-200">
                            </div>
                            <div class="grid gap-2">
                                <label for="password-confirm" class="text-base font-normal text-gray-600">Confirmer mot
                                    de passe</label>
                                <input
                                        type="password"
                                        id="password-confirm"
                                        placeholder="Enter your password"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                        class="w-full text-sm px-4 py-3 text-gray-500 rounded-lg bg-white border border-gray-200 transition-all duration-300 placeholder:text-gray-300 focus:border-green-600 focus:shadow-sm focus:shadow-green-200">
                            </div>
                        </div>
                        <div>
                            <button class="w-full px-5 py-3 rounded-lg bg-green-600 text-white transition-all duration-300 hover:bg-green-700">
                                S'inscrire
                            </button>
                        </div>
                    </form>
                    <div>
                        <p class="text-sm text-gray-500">
                            Deja inscrit?
                            <a href="{{ route('login') }}" class="text-green-600">Se connecter</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
