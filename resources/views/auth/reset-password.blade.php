<x-guest-layout>

    <form method="post" action="{{ route('password.store') }}">
        @csrf

        {{-- Password reset token --}}
        <input type="hidden" name="token" value="{{ $token }}" />

        {{-- Email address --}}
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input type="email" name="email"  id="email" :value="old('email')" />
            <x-input-error :field="__('email')" />
        </div>

        {{-- Password --}}
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input type="password" name="password" id="password" />
            <x-input-error :field="__('password')" />
        </div>

        {{-- Confirm password --}}
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input type="password" name="password_confirmation" id="password_confirmation" />
            <x-input-error :field="__('password_confirmation')" />
        </div>

        <div class="flex justify-end items-center mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>

    </form>

</x-guest-layout>
