@php
    use Illuminate\Contracts\Auth\MustVerifyEmail;
@endphp

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Update your account\'s profile information and email address.') }}
        </p>
    </header>

    <form action="{{ route('verification.send') }}" method="post" id="send-verification">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input
                name="name"
                id="name"
                value="{{ old('name', request()->user()->name) }}"
                class="mt-1 block w-full"
            />
            <x-input-error :field="__('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input
                name="email"
                id="email"
                value="{{ old('name', request()->user()->email) }}"
                class="mt-1 block w-full"
            />
            <x-input-error :field="__('name')" />

        @if(request()->user() instanceof MustVerifyEmail && ! request()->user()->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button
                        form="send-verification"
                        class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if(session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </div>
        @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>
                {{ __('Save') }}
            </x-primary-button>

            @if(session('status') === 'profile-updated')
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
