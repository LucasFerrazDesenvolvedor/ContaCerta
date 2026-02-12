<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-light tracking-[0.3em] text-neutral-800 uppercase text-center py-6">
            Cardápio
        </h2>
    </x-slot>

    <div class="bg-[#fafafa] min-h-screen py-16">
        {{-- Reduzi para max-w-4xl para o conteúdo ficar visualmente mais centralizado --}}
        <div class="max-w-4xl mx-auto px-6">

            @php
                $produtosAgrupados = $produtos->groupBy('categoria');
            @endphp

            @foreach ($produtosAgrupados as $categoria => $itens)
                <section class="mb-24">
                    <div class="flex items-center gap-4 mb-12">
                        <div class="h-px bg-neutral-200 flex-1"></div>
                        <h3 class="text-xl font-bold tracking-[0.2em] text-neutral-400 uppercase">
                            {{ $categoria }}
                        </h3>
                        <div class="h-px bg-neutral-200 flex-1"></div>
                    </div>

                    <div class="space-y-10">
                        @foreach ($itens as $produto)
                            @if (is_object($produto))
                                {{-- justify-center garante que o conjunto imagem+texto busque o centro --}}
                                <article class="flex gap-6 items-center group justify-center">

                                    {{-- Imagem --}}
                                    <div
                                        class="w-24 h-24 rounded-full overflow-hidden shadow-sm bg-neutral-100 flex-shrink-0 border border-neutral-200">
                                        @if (!empty($produto->imagem))
                                            <img src="{{ asset('storage/' . $produto->imagem) }}"
                                                class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                                        @else
                                            <div
                                                class="w-full h-full flex items-center justify-center text-3xl opacity-30 grayscale">
                                                🍕</div>
                                        @endif
                                    </div>

                                    {{-- Conteúdo (largura fixa ou max-w para manter o alinhamento constante) --}}
                                    <div class="flex-1 max-w-2xl border-b border-neutral-100 pb-4">
                                        <div class="flex flex-col md:flex-row md:items-baseline gap-2 md:gap-4">

                                            <h4 class="text-xl font-bold text-neutral-900 whitespace-nowrap">
                                                {{ $produto->nome }}
                                            </h4>

                                            @if (!empty($produto->descricao))
                                                <p
                                                    class="text-sm text-neutral-500 font-light italic leading-relaxed line-clamp-1 flex-1">
                                                    — {{ $produto->descricao }}
                                                </p>
                                            @endif

                                            <div
                                                class="hidden md:block flex-1 border-b border-dotted border-neutral-300 mx-2">
                                            </div>

                                            <span class="text-lg font-semibold text-neutral-900 tracking-tighter">
                                                R$ {{ number_format($produto->preco, 2, ',', '.') }}
                                            </span>
                                        </div>

                                        @if (!empty($produto->tamanho))
                                            <div class="mt-1">
                                                <span
                                                    class="text-[10px] uppercase tracking-widest text-neutral-400 font-bold">
                                                    {{ $produto->tamanho }}
                                                </span>
                                            </div>
                                        @endif
                                    </div>

                                </article>
                            @endif
                        @endforeach
                    </div>
                </section>
            @endforeach

        </div>
    </div>
</x-app-layout>
