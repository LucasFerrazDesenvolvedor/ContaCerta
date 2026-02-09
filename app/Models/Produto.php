<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function itens()
    {
        return $this->hasMany(ComandaItem::class);
    }
    protected $fillable = [
        'nome',
        'preco',
        'estoque',
        'estoque_minimo'
    ];
}
