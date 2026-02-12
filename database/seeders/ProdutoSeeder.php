<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        $produtos = [

            // ==============================
            // PIZZAS SALGADAS
            // ==============================

            // CALABRESA
            ['Pizza Salgada', 'Calabresa', 'Mussarela, calabresa, tomate, cebola, orégano', 'Pequena', 15.00],
            ['Pizza Salgada', 'Calabresa', 'Mussarela, calabresa, tomate, cebola, orégano', 'Média', 35.00],
            ['Pizza Salgada', 'Calabresa', 'Mussarela, calabresa, tomate, cebola, orégano', 'Grande', 45.00],

            // FRANGO
            ['Pizza Salgada', 'Frango', 'Mussarela, frango, tomate, cebola, orégano', 'Pequena', 18.00],
            ['Pizza Salgada', 'Frango', 'Mussarela, frango, tomate, cebola, orégano', 'Média', 38.00],
            ['Pizza Salgada', 'Frango', 'Mussarela, frango, tomate, cebola, orégano', 'Grande', 48.00],

            // PRESUNTO
            ['Pizza Salgada', 'Presunto', 'Mussarela, presunto, tomate, cebola, orégano', 'Pequena', 14.00],
            ['Pizza Salgada', 'Presunto', 'Mussarela, presunto, tomate, cebola, orégano', 'Média', 34.00],
            ['Pizza Salgada', 'Presunto', 'Mussarela, presunto, tomate, cebola, orégano', 'Grande', 44.00],

            // MUSSARELA
            ['Pizza Salgada', 'Mussarela', 'Mussarela, tomate, orégano', 'Pequena', 15.00],
            ['Pizza Salgada', 'Mussarela', 'Mussarela, tomate, orégano', 'Média', 38.00],
            ['Pizza Salgada', 'Mussarela', 'Mussarela, tomate, orégano', 'Grande', 48.00],

            // MISTA
            ['Pizza Salgada', 'Mista', 'Mussarela, frango, calabresa, presunto, tomate, cebola, orégano', 'Pequena', 15.00],
            ['Pizza Salgada', 'Mista', 'Mussarela, frango, calabresa, presunto, tomate, cebola, orégano', 'Média', 35.00],
            ['Pizza Salgada', 'Mista', 'Mussarela, frango, calabresa, presunto, tomate, cebola, orégano', 'Grande', 45.00],

            // FRANPIRY
            ['Pizza Salgada', 'Franpiry', 'Mussarela, frango, catupiry, tomate, cebola, orégano', 'Pequena', 20.00],
            ['Pizza Salgada', 'Franpiry', 'Mussarela, frango, catupiry, tomate, cebola, orégano', 'Média', 40.00],
            ['Pizza Salgada', 'Franpiry', 'Mussarela, frango, catupiry, tomate, cebola, orégano', 'Grande', 50.00],

            // FRANCHEDDAR
            ['Pizza Salgada', 'Francheddar', 'Mussarela, frango, cheddar, tomate, cebola, orégano', 'Pequena', 20.00],
            ['Pizza Salgada', 'Francheddar', 'Mussarela, frango, cheddar, tomate, cebola, orégano', 'Média', 40.00],
            ['Pizza Salgada', 'Francheddar', 'Mussarela, frango, cheddar, tomate, cebola, orégano', 'Grande', 50.00],

            // FRANBACON
            ['Pizza Salgada', 'Franbacon', 'Mussarela, frango, bacon, tomate, cebola, orégano', 'Pequena', 20.00],
            ['Pizza Salgada', 'Franbacon', 'Mussarela, frango, bacon, tomate, cebola, orégano', 'Média', 40.00],
            ['Pizza Salgada', 'Franbacon', 'Mussarela, frango, bacon, tomate, cebola, orégano', 'Grande', 50.00],

            // PORTUGUESA
            ['Pizza Salgada', 'Portuguesa', 'Mussarela, ovos, presunto, tomate, cebola, pimentão, azeitona, orégano', 'Pequena', 20.00],
            ['Pizza Salgada', 'Portuguesa', 'Mussarela, ovos, presunto, tomate, cebola, pimentão, azeitona, orégano', 'Média', 40.00],
            ['Pizza Salgada', 'Portuguesa', 'Mussarela, ovos, presunto, tomate, cebola, pimentão, azeitona, orégano', 'Grande', 50.00],

            // CAIPIRA
            ['Pizza Salgada', 'Caipira', 'Mussarela, frango, presunto, milho verde, tomate, cebola, azeitona, orégano', 'Pequena', 20.00],
            ['Pizza Salgada', 'Caipira', 'Mussarela, frango, presunto, milho verde, tomate, cebola, azeitona, orégano', 'Média', 40.00],
            ['Pizza Salgada', 'Caipira', 'Mussarela, frango, presunto, milho verde, tomate, cebola, azeitona, orégano', 'Grande', 50.00],

            // SERTANEJA
            ['Pizza Salgada', 'Sertaneja', 'Mussarela, carne de sol, catupiry, cebola, orégano', 'Pequena', 24.00],
            ['Pizza Salgada', 'Sertaneja', 'Mussarela, carne de sol, catupiry, cebola, orégano', 'Média', 44.00],
            ['Pizza Salgada', 'Sertaneja', 'Mussarela, carne de sol, catupiry, cebola, orégano', 'Grande', 64.00],

            // MARGUERITA
            ['Pizza Salgada', 'Marguerita', 'Mussarela, manjericão, azeitona, tomate', 'Pequena', 20.00],
            ['Pizza Salgada', 'Marguerita', 'Mussarela, manjericão, azeitona, tomate', 'Média', 40.00],
            ['Pizza Salgada', 'Marguerita', 'Mussarela, manjericão, azeitona, tomate', 'Grande', 50.00],


            // BAURU
            ['Pizza Salgada', 'Bauru', 'Pizza de presunto, mussarela, tomate e orégano', 'Pequena', 20.00],
            ['Pizza Salgada', 'Bauru', 'Pizza de presunto, mussarela, tomate e orégano', 'Média', 40.00],
            ['Pizza Salgada', 'Bauru', 'Pizza de presunto, mussarela, tomate e orégano', 'Grande', 50.00],

            // VEGANA
            ['Pizza Salgada', 'Vegana', 'Pizza com legumes grelhados e queijo vegano', 'Pequena', 25.00],
            ['Pizza Salgada', 'Vegana', 'Pizza com legumes grelhados e queijo vegano', 'Média', 40.00],
            ['Pizza Salgada', 'Vegana', 'Pizza com legumes grelhados e queijo vegano', 'Grande', 50.00],

            // CALABRESA CHEDDAR
            ['Pizza Salgada', 'Calabresa Cheddar', 'Pizza de calabresa com cheddar', 'Pequena', 20.00],
            ['Pizza Salgada', 'Calabresa Cheddar', 'Pizza de calabresa com cheddar', 'Média', 39.00],
            ['Pizza Salgada', 'Calabresa Cheddar', 'Pizza de calabresa com cheddar', 'Grande', 49.00],

            // CALABRESA CATUPIRY
            ['Pizza Salgada', 'Calabresa Catupiry', 'Pizza de calabresa com catupiry', 'Pequena', 20.00],
            ['Pizza Salgada', 'Calabresa Catupiry', 'Pizza de calabresa com catupiry', 'Média', 39.00],
            ['Pizza Salgada', 'Calabresa Catupiry', 'Pizza de calabresa com catupiry', 'Grande', 49.00],

            // BAIANA
            ['Pizza Salgada', 'Baiana', 'Mussarela, calabresa moída, catupiry, azeitona, tomate, cebola, orégano', 'Pequena', 20.00],
            ['Pizza Salgada', 'Baiana', 'Mussarela, calabresa moída, catupiry, azeitona, tomate, cebola, orégano', 'Média', 44.00],
            ['Pizza Salgada', 'Baiana', 'Mussarela, calabresa moída, catupiry, azeitona, tomate, cebola, orégano', 'Grande', 54.00],

            // BRASILEIRINHA
            ['Pizza Salgada', 'Brasileirinha', 'Mussarela, ervilha, milho verde, tomate, orégano', 'Pequena', 15.00],
            ['Pizza Salgada', 'Brasileirinha', 'Mussarela, ervilha, milho verde, tomate, orégano', 'Média', 33.00],
            ['Pizza Salgada', 'Brasileirinha', 'Mussarela, ervilha, milho verde, tomate, orégano', 'Grande', 43.00],

            // ACEBOLADA
            ['Pizza Salgada', 'Acebolada', 'Mussarela, cebola caramelizada, orégano', 'Pequena', 15.00],
            ['Pizza Salgada', 'Acebolada', 'Mussarela, cebola caramelizada, orégano', 'Média', 30.00],
            ['Pizza Salgada', 'Acebolada', 'Mussarela, cebola caramelizada, orégano', 'Grande', 40.00],

            // PIZZA DA CASA
            ['Pizza Salgada', 'Pizza da Casa', 'Mussarela, frango, calabresa, catupiry, batata palha, azeitona, orégano', 'Pequena', 22.00],
            ['Pizza Salgada', 'Pizza da Casa', 'Mussarela, frango, calabresa, catupiry, batata palha, azeitona, orégano', 'Média', 42.00],
            ['Pizza Salgada', 'Pizza da Casa', 'Mussarela, frango, calabresa, catupiry, batata palha, azeitona, orégano', 'Grande', 52.00],

            // DOIS SABORES
            ['Pizza Salgada', 'Dois Sabores', '2 sabores à escolha do cliente', 'Pequena', 23.00],
            ['Pizza Salgada', 'Dois Sabores', '2 sabores à escolha do cliente', 'Média', 48.00],
            ['Pizza Salgada', 'Dois Sabores', '2 sabores à escolha do cliente', 'Grande', 58.00],

            // ==============================
            // PIZZAS DOCES
            // ==============================

            ['Pizza Doce', 'Chocolate', null, 'Pequena', 22.00],
            ['Pizza Doce', 'Romeu e Julieta', null, 'Pequena', 22.00],
            ['Pizza Doce', 'Cartola', null, 'Pequena', 22.00],

            // ==============================
            // PORÇÃO
            // ==============================

            ['Porção', 'Batata Frita', null, null, 20.00],

            // ==============================
            // BEBIDAS
            // ==============================

            ['Bebida', 'Refrigerante Lata', null, null, 7.00],
            ['Bebida', 'Refrigerante 1 Litro', null, null, 12.00],
            ['Bebida', 'Refrigerante 2 Litros', null, null, 18.00],
            ['Bebida', 'Água Mineral', null, null, 3.00],
            ['Bebida', 'Água Mineral com Gás', null, null, 4.00],
            ['Bebida', 'Suco', null, null, 5.00],
            ['Bebida', 'Suco com Leite', null, null, 7.00],
        ];

        foreach ($produtos as $produto) {
            Produto::create([
                'categoria' => $produto[0],
                'nome' => $produto[1],
                'descricao' => $produto[2],
                'imagem' => null,
                'tamanho' => $produto[3],
                'preco' => $produto[4],
                'controla_estoque' => true,
                'ativo' => true,
            ]);
        }
    }
}
