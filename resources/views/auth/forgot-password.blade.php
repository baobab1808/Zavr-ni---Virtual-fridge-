<x-guest-layout >
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body" style="align-items:center">

            <div class="mb-3">
                <b>{{ __('Zaboravili ste zaporku? Nema problema. Samo nam javite svoju adresu e-pošte, a mi ćemo vam poslati vezu za poništavanje zaporke koja će vam omogućiti da odaberete novu.') }}</b>
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-3" />

            <form method="POST" action="/forgot-password">
                @csrf

                <div class="form-group">
                    <x-jet-label value="Email" />
                    <x-jet-input type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <x-jet-button style="width:450px; background-color:black; border-color:black; color:white; font-family:'Open Sans'; font-weight:bold; text-align:center;font-size:20px">
                        {{ __('Veza za poništavanje lozinke pomoću e-pošte') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>