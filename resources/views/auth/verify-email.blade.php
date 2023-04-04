<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">
            <div class="mb-3 small text-muted">
                {{ __('Hvala što ste se prijavili! Možete li prije početka provjeriti svoju e-adresu klikom na vezu koju smo vam upravo poslali? Ako niste primili e-poruku, rado ćemo vam poslati drugu.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success" role="alert">
                    {{ __('Nova verifikacijska veza poslana je na adresu e-pošte koju ste naveli tijekom registracije.') }}
                </div>
            @endif

            <div class="mt-4 d-flex justify-content-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-jet-button type="submit">
                            {{ __('Ponovno pošaljite e-poruku za potvrdu') }}
                        </x-jet-button>
                    </div>
                </form>

                <form method="POST" action="/logout">
                    @csrf

                    <button type="submit" class="btn btn-link">
                        {{ __('Odjava') }}
                    </button>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>