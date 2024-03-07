<x-layout>
    <div class="mb-4 text-gray-600">
        {{ __('Thanks for signing up!, Before getting started, could you verify your email address by clicking on the
link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') === 'verification-link-sent')
        <div class="mb-4 font-medium text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during the registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="post" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <button
                    type="submit"
                    class="inline-flex px-4 py-2 bg-gray-800 text-white border border-transparent rounded-md uppercase
                    hover:bg-gray-700 tracking-widest transition duration-150"
                >
                    {{ __('Resend Verification Email') }}
                </button>
            </div>
        </form>

        <form method="post" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none
            focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-layout>
