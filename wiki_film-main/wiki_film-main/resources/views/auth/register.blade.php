@extends('layouts.guest')

@section('content')
<main class="main-content">
    <div class="vh-100 d-flex align-items-center justify-content-center" style="background: url('assets/images/pages/01.html') no-repeat center center / cover; min-height: 500px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="user-login-card p-5 bg-body rounded shadow">
                        <h4 class="text-center mb-4">{{ __('Créez votre Compte') }}</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row row-cols-1 row-cols-lg-2 g-3">
                                <!-- Name -->
                                <div class="col">
                                    <x-input-label for="name" :value="__('Nom')" />
                                    <x-text-input id="name" class="form-control rounded-0" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="text-danger mt-2" />
                                </div>
                                <!-- Email -->
                                <div class="col">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="form-control rounded-0" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                                </div>
                                <!-- Password -->
                                <div class="col">
                                    <x-input-label for="password" :value="__('Mot de Passe')" />
                                    <x-text-input id="password" class="form-control rounded-0" type="password" name="password" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                                </div>
                                <!-- Confirm Password -->
                                <div class="col">
                                    <x-input-label for="password_confirmation" :value="__('Confirmez le mot de passe')" />
                                    <x-text-input id="password_confirmation" class="form-control rounded-0" type="password" name="password_confirmation" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-2" />
                                </div>
                            </div>
                            <!-- Terms and Conditions -->
                           
                            <!-- Submit Button -->
                            <div class="d-grid mt-4">
                                <x-primary-button class="btn btn-primary text-uppercase">{{ __('Inscrivez-vous') }}</x-primary-button>
                            </div>
                        </form>
                        <!-- Already Registered -->
                        <p class="text-center mt-3">
                            {{ __('vous avez-deja un compte ?') }} 
                            <a href="{{ route('login') }}" class="text-primary">{{ __('connexion') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection