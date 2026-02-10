<x-app-layout>

    <div class="p-6">

        <h1 class="text-2xl font-bold mb-6">
            Painel do Sistema
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Abrir Comanda -->
            <a href="{{ route('comandas.create') }}"
                class="bg-green-500 text-white p-6 rounded-xl shadow hover:bg-green-600">

                <h2 class="text-xl font-bold">Abrir Comanda</h2>
                <p>Iniciar atendimento</p>

            </a>

            <!-- Estoque -->
            <a href="{{ route('produtos.index') }}"
                class="bg-blue-500 text-white p-6 rounded-xl shadow hover:bg-blue-600">

                <h2 class="text-xl font-bold">Estoque</h2>
                <p>Gerenciar produtos</p>

            </a>

            <!-- Mesas -->
            <a href="{{ route('mesas.index') }}"
                class="bg-purple-500 text-white p-6 rounded-xl shadow hover:bg-purple-600">

                <h2 class="text-xl font-bold">Mesas</h2>
                <p>Visualizar mesas</p>

            </a>

            <!-- Comandas Abertas -->
            <a href="{{ route('comandas.index') }}"
                class="bg-yellow-500 text-white p-6 rounded-xl shadow hover:bg-yellow-600">

                <h2 class="text-xl font-bold">Comandas Abertas</h2>
                <p>Ver atendimentos ativos</p>

            </a>

            <!-- Comandas Fechadas -->
            <a href="{{ route('comandas.index', ['status' => 'fechada']) }}"
                class="bg-red-500 text-white p-6 rounded-xl shadow hover:bg-red-600">

                <h2 class="text-xl font-bold">Comandas Fechadas</h2>
                <p>Histórico de vendas</p>

            </a>

        </div>

    </div>

</x-app-layout>
