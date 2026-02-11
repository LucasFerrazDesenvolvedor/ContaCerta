<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'categoria',
        'nome',
        'descricao',
        'preco',
        'controla_estoque',
        'ativo'
    ];

    public function estoque()
    {
        return $this->hasOne(Estoque::class);
    }

    public function pedidoItens()
    {
        return $this->hasMany(PedidoItem::class);
    }
}
