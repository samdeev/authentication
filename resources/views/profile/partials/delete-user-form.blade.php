<section class="space-y-6">
    <header>
        <h2 class="font-medium text-lg text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all its resources and data will be permanently deleted. Before deleting
                    your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <div x-cloak x-data="{ isOpen: false, hasErrors: false }">
        <x-danger-button
            @click="isOpen = true"
        >
            {{ __('Delete Account') }}
        </x-danger-button>

        <x-modal isOpen="isOpen">
            <form method="post" action="{{ route('profile.destroy') }}" x-init="event.preventDefault()">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Are you sure you want to delete your account?') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.
                    Please enter your password to confirm you would like to permanently delete your account.') }}
                </p>

                <div class="mt-6">
                    <x-input-label for="password" value="__('Password')" class="sr-only" />

                    <x-text-input
                        type="password"
                        id="password"
                        name="confirm_password"
                        class="mt-1 block"
                        placeholder="{{ __('Password') }}"
                    />
                    <x-input-error :field="__('confirm_password')" />
                </div>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button @click="isOpen = false">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <x-danger-button class="ms-6">
                        {{ __('Delete Account') }}
                    </x-danger-button>
                </div>
            </form>
        </x-modal>
    </div>

</section>
