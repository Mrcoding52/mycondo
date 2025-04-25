<x-base-component>
    


<!-- My profile start -->
<div class="my-profile content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <!-- My account box start -->
                <h1 class="heading-2">Mon compte</h1>

                <h3 class="heading-2"> {{ Auth::user()->nom}} </h3>
                <span>{{ Auth::user()->prenom}}</span><br><br>
                <div class="my-account-box">
                    <ul>
                        <li>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <a href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="flaticon-exit"></i>Déconnexion
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- My account box end -->
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <!-- My address start-->
                <div class="my-address">
                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>
                    <h3 class="heading-2">Mon profil</h3>
                    <form method="post" action="{{ route('profile.update') }}">

                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="inputname1" class="form-label">Nom</label>
                            <input type="text" value="{{ Auth::user()->nom }}" name="nom" class="form-control" id="inputname1" placeholder="John " required>
                        </div>
                        <div class="form-group">
                            <label for="inputtitle1" class="form-label">Prénom</label>
                            <input type="text" name="prenom" value="{{ Auth::user()->prenom }}" class="form-control" id="inputtitle1" placeholder="Carlos" required>
                        </div>
                        <div class="form-group">
                            <label for="inputphone1" class="form-label">Adresse</label>
                            <input type="text" name="adresse" value="{{ Auth::user()->adresse }}" class="form-control" id="inputphone1" placeholder="AKPAKPA" required>
                        </div>
                        <div class="form-group">
                            <label for="inputphone1" class="form-label">Téléphone</label>
                            <input type="text" name="telephone" value="{{ Auth::user()->telephone }}" class="form-control" id="inputphone1" placeholder="0152091477" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" id="inputEmail1" placeholder="johndoe@gmail.com" required>
                        </div>
                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div>

                                <style type="text/css"></style>
                                <p class="text-sm mt-2 text-gray-800">
                                    {{ __('Your email address is unverified.') }}

                                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 font-medium text-sm text-green-600">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
                        <button type="submit" class="btn-4 btn-round-3">Modifier</button>
                    </form>
                </div>
                <!-- My address end -->
                <div>
                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="inputtitle1" class="form-label">Mot de passe actuel</label>
                            <input name="current_password" type="password" class="form-control" id="inputtitle1" required>
                        </div>
                        <div class="form-group">
                            <label for="inputphone1" class="form-label">Nouveau mot de passe</label>
                            <input type="password" name="password" class="form-control" id="inputphone1" required>
                        </div>
                        <div class="form-group">
                            <label for="inputphone1" class="form-label">Confirmer le mot de passe</label>
                            <input type="password" name="password_confirmation" class="form-control" id="inputphone1"  required>
                        </div><br>

                        <button type="submit" class="btn-4 btn-round-3">Changer le mot de passe</button>

                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Saved.') }}</p>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- My profile end -->



</x-base-component>

{{-- 
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
