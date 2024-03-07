<x-app-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form action="/login" method="post" class="space-y-6">
                    @csrf

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input type="text" name="email" id="email" value="{{ old('email') }}"/>
                        <x-input-error :field="__('email')" />
                    </div>

                    <div>
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input type="password" id="password" name="password" />
                        <x-input-error :field="__('password')" />
                    </div>

                    <div class="flex justify-between">
                        <div class="block">
                            <label for="remember_me" class="inline-flex items-center">
                                <input
                                    id="remember_me"
                                    type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                    name="remember"
                                >
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="{{ route('password.request') }}" class="font-medium text-indigo-500 hover:text-indigo-400">Forgot password?</a>
                        </div>
                    </div>

                    <x-primary-button class="w-full">
                        {{ __('Login') }}
                    </x-primary-button>

                    <div class="flex items-center justify-center">
                        <a href="{{ route('register') }}"
                           class="text-sm font-medium underline underline-offset-2 text-indigo-600 hover:text-indigo-500">
                            {{ __('Need an account?') }}
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
