<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComandaItem extends Model
{
    protected $fillable = [
        'comanda_id',
        'produto_id',
        'quantidade',
        'preco'
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
