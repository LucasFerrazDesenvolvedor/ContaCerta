<x-app-layout>
    <div class="p-8">

        <h1 class="text-2xl font-bold mb-6">🧾 Abrir Comanda</h1>

        <form method="POST" action="{{ route('comandas.store') }}" id="formComanda">
            @csrf

            {{-- SELEÇÃO DE MESA --}}
            <div class="mb-4">
                <label class="block mb-2 font-bold">Mesa</label>

                <select name="mesa_id" id="mesaSelect" class="border rounded p-3 w-full" required>
                    <option value="">Selecione a mesa</option>
                    @foreach ($mesas as $mesa)
                    <option value="{{ $mesa->id }}">
                        Mesa {{ $mesa->numero }} - {{ $mesa->nome }}
                    </option>
                    @endforeach
                </select>
            </div>

            <hr class="my-6">

            {{-- ÁREA DE PRODUTOS (ESCONDIDA INICIALMENTE) --}}
            <div id="areaProdutos" style="display:none;">

                <h2 class="text-xl font-bold mb-4">Adicionar Produto</h2>

                {{-- Categoria --}}
                <div class="mb-4">
                    <label class="block mb-2 font-bold">Categoria</label>
                    <select id="categoria" class="border rounded p-3 w-full">
                        <option value="">Selecione</option>
                        @foreach ($categorias as $categoria)
                        <option value="{{ $categoria }}">
                            {{ $categoria }}
                        </option>
                        @endforeach
                    </select>
                </div>

                {{-- Produto --}}
                <div class="mb-4">
                    <label class="block mb-2 font-bold">Produto</label>
                    <select id="produto" class="border rounded p-3 w-full">
                        <option value="">Selecione</option>
                    </select>
                </div>

                {{-- Tamanho --}}
                <div class="mb-4">
                    <label class="block mb-2 font-bold">Tamanho</label>
                    <select id="tamanho" class="border rounded p-3 w-full">
                        <option value="">Selecione</option>
                    </select>
                </div>

                {{-- Quantidade --}}
                <div class="mb-4">
                    <label class="block mb-2 font-bold">Quantidade</label>
                    <input type="number" id="quantidade" value="1" min="1" class="border rounded p-3 w-full">
                </div>

                <button type="button"
                    onclick="adicionarItem()"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded mb-6">
                    Adicionar Produto
                </button>

                {{-- TABELA DE ITENS --}}
                <div class="overflow-x-auto">
                    <table class="w-full border text-left">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="p-2">Produto</th>
                                <th class="p-2">Tamanho</th>
                                <th class="p-2">Qtd</th>
                                <th class="p-2">Valor</th>
                                <th class="p-2">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody id="tabelaItens"></tbody>
                    </table>
                </div>

                <h3 class="text-lg font-bold mt-4">
                    Total: R$ <span id="total">0.00</span>
                </h3>

                <input type="hidden" name="itens" id="itensInput">

            </div>

            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded mt-6">
                Abrir Comanda
            </button>

        </form>

    </div>

    <script>
        const produtos = JSON.parse('{!! json_encode($produtos) !!}');
        let itens = [];
        let total = 0;

        // Mostrar área após selecionar mesa
        document.getElementById('mesaSelect').addEventListener('change', function() {
            document.getElementById('areaProdutos').style.display =
                this.value ? 'block' : 'none';
        });

        // Extrair categorias únicas
        let categorias = [...new Set(produtos.map(p => p.categoria))];

        let categoriaSelect = document.getElementById('categoria');
        categorias.forEach(cat => {
            categoriaSelect.innerHTML += `<option value="${cat}">${cat}</option>`;
        });

        // Filtrar produtos por categoria
        document.getElementById('categoria').addEventListener('change', function() {

            let produtoSelect = document.getElementById('produto');
            produtoSelect.innerHTML = '<option value="">Selecione</option>';

            produtos
                .filter(p => p.categoria === this.value)
                .forEach(produto => {
                    produtoSelect.innerHTML +=
                        `<option value="${produto.id}">
                    ${produto.nome} - ${produto.tamanho} - R$ ${parseFloat(produto.preco).toFixed(2)}
                </option>`;
                });
        });

        function adicionarItem() {

            let produtoSelect = document.getElementById('produto');
            let quantidade = parseInt(document.getElementById('quantidade').value);

            if (!produtoSelect.value) {
                alert("Selecione um produto");
                return;
            }

            let produto = produtos.find(p => p.id == produtoSelect.value);

            let subtotal = parseFloat(produto.preco) * quantidade;
            total += subtotal;

            itens.push({
                produto_id: produto.id,
                quantidade: quantidade,
                preco_unitario: produto.preco
            });

            document.getElementById('tabelaItens').innerHTML += `
        <tr>
            <td class="p-2">${produto.nome}</td>
            <td class="p-2">${produto.tamanho}</td>
            <td class="p-2">${quantidade}</td>
            <td class="p-2">R$ ${parseFloat(produto.preco).toFixed(2)}</td>
            <td class="p-2">R$ ${subtotal.toFixed(2)}</td>
        </tr>
    `;

            document.getElementById('total').innerText = total.toFixed(2);
            document.getElementById('itensInput').value = JSON.stringify(itens);
        }
    </script>

</x-app-layout>