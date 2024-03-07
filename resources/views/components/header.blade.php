<header>
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
        <div class="flex lg:flex-1">
            <a href="#"class="-m-1.5 p-1.5">
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
        </div>

        @guest
            <div class="py-6 flex space-x-6 items-center">
                <a
                    href="{{ route('register') }}"
                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-medium leading-7 text-gray-900 hover:bg-gray-50">
                    Register
                </a>
                <a
                    href="{{ route('login') }}"
                    class="-mx-3 block items-center rounded-lg px-3 py-2 text-base font-medium leading-7 bg-gradient-to-r
                    from-indigo-500 to-blue-600 text-white">
                    Log In
                </a>
            </div>
        @endguest

        @auth
            <x-navigation-dropdown />
        @endauth
    </nav>
</header>
