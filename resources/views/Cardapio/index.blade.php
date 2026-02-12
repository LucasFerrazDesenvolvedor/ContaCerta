<x-app-layout>
    
    <x-slot name="header">
        <h2 class="text-4xl font-semibold tracking-wide text-gray-800 text-center py-10">
            Cardápio
        </h2>
    </x-slot>

    <div x-data="{
        filtroCategoria: 'todos',
        filtroTamanho: 'todos',
        busca: ''
    }" class="bg-[#f8fafc] min-h-screen py-20">

        <div class="max-w-6xl mx-auto px-6 mt-8">

            @php
                $categorias = $produtos->pluck('categoria')->unique();
                $tamanhos = $produtos->pluck('tamanho')->filter()->unique();
            @endphp

            {{-- 🔎 CAMPO DE PESQUISA --}}
            <div class="mb-10 flex justify-center">
                <div class="relative w-full md:w-1/2">

                    <input type="text" x-model="busca" placeholder="Pesquisar produto pelo nome..."
                        class="w-full pl-4 pr-12 py-3 rounded-xl border border-gray-200
                   bg-white shadow-sm
                   focus:outline-none 
                   focus:ring-2 focus:ring-gray-800 
                   focus:border-gray-800
                   transition duration-200">

                </div>
            </div>


            {{-- FILTROS --}}
            <div class="max-w-6xl mx-auto px-6 mt-8">

                {{-- Filtro Categoria --}}
                <div class="flex flex-wrap justify-center gap-3">
                    <button @click="filtroCategoria = 'todos'"
                        :class="filtroCategoria === 'todos' ? 'bg-gray-800 text-white' : 'bg-white text-gray-700'"
                        class="px-5 py-2 rounded-full border text-sm font-medium transition">
                        Todos
                    </button>

                    @foreach ($categorias as $categoria)
                        <button @click="filtroCategoria = '{{ $categoria }}'"
                            :class="filtroCategoria === '{{ $categoria }}' ? 'bg-gray-800 text-white' :
                                'bg-white text-gray-700'"
                            class="px-5 py-2 rounded-full border text-sm font-medium transition">
                            {{ $categoria }}
                        </button>
                    @endforeach
                </div>

                {{-- Filtro Tamanho --}}
                <div class="flex flex-wrap justify-center gap-3">
                    <button @click="filtroTamanho = 'todos'"
                        :class="filtroTamanho === 'todos' ? 'bg-gray-700 text-white' : 'bg-white text-gray-600'"
                        class="px-4 py-1 rounded-full border text-xs uppercase tracking-wide transition">
                        Todos tamanhos
                    </button>

                    @foreach ($tamanhos as $tamanho)
                        <button @click="filtroTamanho = '{{ $tamanho }}'"
                            :class="filtroTamanho === '{{ $tamanho }}' ? 'bg-gray-700 text-white' :
                                'bg-white text-gray-600'"
                            class="px-4 py-1 rounded-full border text-xs uppercase tracking-wide transition">
                            {{ $tamanho }}
                        </button>
                    @endforeach
                </div>

            </div>

            {{-- GRID PRODUTOS --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                @foreach ($produtos as $produto)
                    @if (is_object($produto))
                        <div x-show="
                                (filtroCategoria === 'todos' || filtroCategoria === '{{ $produto->categoria }}') &&
                                (filtroTamanho === 'todos' || filtroTamanho === '{{ $produto->tamanho }}') &&
                                ('{{ strtolower($produto->nome) }}'.includes(busca.toLowerCase()))
                            "
                            x-transition class="bg-white rounded-2xl p-6 shadow-sm border hover:shadow-xl transition">

                            <div class="flex items-start gap-5">

                                {{-- Imagem --}}
                                <div class="w-24 h-24 rounded-xl overflow-hidden bg-gray-100">
                                    @if (!empty($produto->imagem))
                                        <img src="{{ asset('storage/' . $produto->imagem) }}"
                                            class="w-full h-full object-cover">
                                    @else
                                        @php
                                            $categoria = strtolower($produto->categoria);
                                        @endphp

                                        <div class="w-full h-full flex items-center justify-center text-3xl">
                                            @if (str_contains($categoria, 'pizza'))
                                                🍕
                                            @elseif (str_contains($categoria, 'bebida'))
                                                🥤
                                            @elseif (str_contains($categoria, 'porcao') || str_contains($categoria, 'porção'))
                                                🍟
                                            @else
                                                🍽
                                            @endif
                                        </div>
                                    @endif
                                </div>

                                {{-- Conteúdo --}}
                                <div class="flex-1">

                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="text-lg font-semibold text-gray-800">
                                            {{ $produto->nome }}
                                        </h4>

                                        <span class="text-lg font-bold text-gray-900">
                                            R$ {{ number_format($produto->preco, 2, ',', '.') }}
                                        </span>
                                    </div>

                                    <div class="h-px bg-gray-200 mb-3"></div>

                                    @if (!empty($produto->descricao))
                                        <p class="text-sm text-gray-600 leading-relaxed mb-3">
                                            {{ $produto->descricao }}
                                        </p>
                                    @endif

                                    @if (!empty($produto->tamanho))
                                        <span
                                            class="inline-block px-3 py-1 text-xs font-medium bg-gray-100 text-gray-700 rounded-md uppercase tracking-wide">
                                            {{ $produto->tamanho }}
                                        </span>
                                    @endif

                                </div>

                            </div>

                        </div>
                    @endif
                @endforeach

            </div>

        </div>
    </div>
</x-app-layout>
