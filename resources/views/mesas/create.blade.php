<x-app-layout>

    <div class="max-w-4xl mx-auto py-10">

        <!-- Título -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                🪑 Cadastrar Nova Mesa
            </h1>
            <p class="text-gray-500">
                Crie e organize as mesas do seu restaurante
            </p>
        </div>

        <!-- Card -->
        <div class="bg-white shadow-xl rounded-2xl p-8">

            <form method="POST" action="{{ route('mesas.store') }}" class="space-y-6">
                @csrf

                <!-- Número -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Número da Mesa
                    </label>

                    <input type="number" name="numero"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="Ex: 10" required>
                </div>

                <!-- Nome -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Nome / Identificação
                    </label>

                    <input type="text" name="nome"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="Ex: Área externa" required>
                </div>

                <!-- Botão -->
                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-lg shadow-lg transition duration-300">
                        ✅ Cadastrar Mesa
                    </button>
                </div>

            </form>

        </div>

    </div>

</x-app-layout>
