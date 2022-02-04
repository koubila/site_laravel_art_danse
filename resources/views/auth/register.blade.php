@extends('layouts.index')
@section('Art Danse', 'S\'inscrire')
@section('css', 'register')
@section('content')

    <x-guest-layout>

        <x-auth-card>

            <x-slot name="logo">

                <h1 class="titlelog">S'inscrire</h1>

                {{-- <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> 
                     <img src="./images/logo.png" style="width:160px;height:160px;" /> 
                </a> --}}
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">

                @csrf
                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Votre Nom')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                        autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Votre Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Mot de passe')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirmer Mot de passe')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Déjà inscrit(e) ?') }}
                    </a>

                    <x-button class="ml-4">
                        {{ __('Valider') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
@endsection
