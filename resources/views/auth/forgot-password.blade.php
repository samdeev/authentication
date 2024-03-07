<x-guest-layout>
    <div class="mb-4 text-sm text-gray-500">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset
    link that will allow you to choose a new one.') }}
    </div>

{{--  Session Status  --}}
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form action="{{ route('password.email') }}" method="post">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input
                name="email"
                id="email"
                required
                value="{{ old('email') }}"
            />
            <x-input-error :field="__('email')" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>
