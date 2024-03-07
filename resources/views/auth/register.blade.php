<x-app-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                Create an account
            </h2>
            <form action="/register" method="post" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-gray-500 text-sm font-medium">Name</label>
                    <x-text-input type="text" name="name" id="name" value="{{ old('name') }}" />
                    <x-input-error :field="__('name')" />
                </div>

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

                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input type="password" name="password_confirmation" id="password_confirmation" />
                </div>

                <x-primary-button class="w-full">
                    {{ __('Register') }}
                </x-primary-button>

                <div class="flex items-center justify-center">
                    <a href="{{ route('login') }}"
                       class="text-sm font-medium underline underline-offset-2 text-indigo-600 hover:text-indigo-500">
                        {{ __('Already registered?') }}
                    </a>
                </div>

        </form>
        </div>
    </div>
</x-app-layout>
