<x-app-layout>

    <!-- Google Fonts (opcional, deixa mais bonito) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            🍽️ Painel de Controle
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Abrir Comanda -->
                <a href="{{ route('comandas.create') }}"
                    class="group bg-gradient-to-r from-green-500 to-green-600 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition">

                    <div class="flex items-center gap-4">
                        <div class="bg-white/20 p-4 rounded-full text-3xl">
                            🧾
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-white">Abrir Comanda</h3>
                            <p class="text-green-100">Novo atendimento</p>
                        </div>
                    </div>
                </a>

                <!-- Produtos -->
                <a href="{{ route('produtos.index') }}"
                    class="group bg-gradient-to-r from-blue-500 to-blue-600 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition">

                    <div class="flex items-center gap-4">
                        <div class="bg-white/20 p-4 rounded-full text-3xl">
                            📦
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-white">Estoque</h3>
                            <p class="text-blue-100">Gerenciar produtos</p>
                        </div>
                    </div>
                </a>

                <!-- Mesas -->
                <a href="{{ route('mesas.index') }}"
                    class="group bg-gradient-to-r from-amber-500 to-orange-600 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition">

                    <div class="flex items-center gap-4">
                        <div class="bg-white/20 p-4 rounded-full text-3xl">
                            🍽️
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-white">Mesas</h3>
                            <p class="text-amber-100">Visualizar mesas</p>
                        </div>
                    </div>
                </a>

                <!-- Comandas Abertas -->
                <a href="{{ route('comandas.index') }}"
                    class="group bg-gradient-to-r from-purple-500 to-purple-600 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition">

                    <div class="flex items-center gap-4">
                        <div class="bg-white/20 p-4 rounded-full text-3xl">
                            🔥
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-white">Comandas Abertas</h3>
                            <p class="text-purple-100">Pedidos ativos</p>
                        </div>
                    </div>
                </a>

                <!-- Comandas Fechadas -->
                <a href="{{ route('comandas.index') }}"
                    class="group bg-gradient-to-r from-red-500 to-red-600 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition">

                    <div class="flex items-center gap-4">
                        <div class="bg-white/20 p-4 rounded-full text-3xl">
                            ✅
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-white">Comandas Fechadas</h3>
                            <p class="text-red-100">Histórico</p>
                        </div>
                    </div>
                </a>

                <!-- Relatórios -->
                <a href="#"
                    class="group bg-gradient-to-r from-gray-700 to-gray-900 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition">

                    <div class="flex items-center gap-4">
                        <div class="bg-white/20 p-4 rounded-full text-3xl">
                            📊
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-white">Relatórios</h3>
                            <p class="text-gray-300">Análises</p>
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </div>
</x-app-layout>
