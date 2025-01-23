@extends('layouts.guest')

@section('content')
<main class="main-content">
    <div class="vh-100 d-flex align-items-center justify-content-center" style="background: url('assets/images/pages/01.html') no-repeat center center / cover; min-height: 500px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="user-login-card p-4 bg-body rounded shadow">
                        <div class="text-center mb-4">
                            <a href="index.html" class="navbar-brand">
                                <img src="assets/images/logo.png" alt="Logo" class="img-fluid logo">
                            </a>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email Field -->
                            <div class="mb-3">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                            </div>
                            <!-- Password Field -->
                            <div class="mb-3">
                                <x-input-label for="password" :value="__('Mot de Passe')" />
                                <x-text-input id="password" class="form-control" type="password" name="password" required />
                                <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                            </div>
                            <!-- Remember Me -->
                           
                            <!-- Forgot Password -->
                            <div class="text-end mb-3">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-decoration-none text-primary">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                            <!-- Submit Button -->
                            <div class="d-grid">
                                <x-primary-button class="btn btn-primary">{{ __('Connexion') }}</x-primary-button>
                            </div>
                        </form>
                        <!-- Additional Links -->
                        <p class="text-center my-3">Vous êtes nouveau<a href="{{ route('register') }}" class="text-primary">inscrivez-vous</a></p>
                        <div class="separator text-center my-3">
                            <span class="line"></span>
                           
                            <span class="line"></span>
                        </div>
                        <!-- Social Media Login -->
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection