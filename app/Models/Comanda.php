<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    protected $fillable = [
        'mesa_id',
        'user_id',
        'cliente_nome',
        'status',
        'total',
        'aberta_em',
        'fechada_em'
    ];

    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

    public function pagamentos()
    {
        return $this->hasMany(Pagamento::class);
    }
}
