<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form action="{{ route('password.update') }}" method="post" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input
                type="password"
                name="current_password"
                id="current_password"
                class="mt-1 block w-full"
            />
            <x-input-error :field="__('current_password')" />
        </div>

        <div>
            <x-input-label for="new_password" :value="__('New Password')" />
            <x-text-input
                type="password"
                name="password"
                id="new_password"
                class="mt-1 block w-full"
            />
            <x-input-error :field="__('password')" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                class="mt-1 block w-full"
            />
            <x-input-error :field="__('password_confirmation')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>
                {{ __('Save') }}
            </x-primary-button>

            @if(session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 5000)"
                    class="text-sm text-green-600"
                >
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>
