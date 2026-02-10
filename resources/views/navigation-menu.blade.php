<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <div class="flex">

                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">

                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-nav-link>

                    <x-nav-link href="{{ route('mesas.index') }}" :active="request()->routeIs('mesas.*')">
                        Mesas
                    </x-nav-link>

                    <x-nav-link href="{{ route('produtos.index') }}" :active="request()->routeIs('produtos.*')">
                        Produtos
                    </x-nav-link>

                    <x-nav-link href="{{ route('comandas.index') }}" :active="request()->routeIs('comandas.*')">
                        Comandas
                    </x-nav-link>

                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">

                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 hover:text-gray-700">

                                    {{ Auth::user()->name }}

                                </button>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('profile.show') }}">
                                Perfil
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Sair
                                </x-dropdown-link>
                            </form>
                        </x-slot>

                    </x-dropdown>
                </div>

            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                    ☰
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" class="sm:hidden px-4 pb-3 space-y-1">

        <x-responsive-nav-link href="{{ route('dashboard') }}">
            Dashboard
        </x-responsive-nav-link>

        <x-responsive-nav-link href="{{ route('mesas.index') }}">
            Mesas
        </x-responsive-nav-link>

        <x-responsive-nav-link href="{{ route('produtos.index') }}">
            Produtos
        </x-responsive-nav-link>

        <x-responsive-nav-link href="{{ route('comandas.index') }}">
            Comandas
        </x-responsive-nav-link>

        <hr>

        <x-responsive-nav-link href="{{ route('profile.show') }}">
            Perfil
        </x-responsive-nav-link>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link href="{{ route('logout') }}"
                onclick="event.preventDefault(); this.closest('form').submit();">
                Sair
            </x-responsive-nav-link>
        </form>

    </div>

</nav>
