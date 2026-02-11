<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'comanda_id',
        'user_id',
        'status',
        'observacao'
    ];

    public function comanda()
    {
        return $this->belongsTo(Comanda::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function itens()
    {
        return $this->hasMany(PedidoItem::class);
    }
}
