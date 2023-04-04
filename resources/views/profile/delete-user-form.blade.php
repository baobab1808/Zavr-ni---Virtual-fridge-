<x-jet-action-section>
    <x-slot name="title">
        <h1 style="font-weight:bold; font-size:30px; font-family:'Open Sans'">{{ __('Izbriši račun') }}</h1>
    </x-slot>

    <x-slot name="description">
        <h3>{{ __('Trajno izbrišite svoj račun.') }}</h3>
    </x-slot>

    <x-slot name="content">
        <div>
            {{ __('Nakon što se vaš račun izbriše, svi njegovi resursi i podaci bit će trajno izbrisani. Prije brisanja računa preuzmite sve podatke ili podatke koje želite zadržati.') }}
        </div>

        <div class="mt-3">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Izbriši račun') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Izbriši račun') }}
            </x-slot>

            <x-slot name="content">
                {{ __('
Jeste li sigurni da želite izbrisati svoj račun? Nakon što se vaš račun izbriše, svi njegovi resursi i podaci bit će trajno izbrisani. Molimo unesite svoju lozinku kako biste potvrdili da želite trajno izbrisati svoj račun.') }}

                <div class="mt-2 w-md-75" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="{{ __('Password') }}"
                                 x-ref="password"
                                 wire:model.defer="password"
                                 wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')"
                                        wire:loading.attr="disabled">
                    {{ __('Odustani') }}
                </x-jet-secondary-button>

                <x-jet-danger-button wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Izbriši račun') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>

</x-jet-action-section>
