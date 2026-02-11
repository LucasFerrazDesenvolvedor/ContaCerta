<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table = 'estoque';

    protected $fillable = [
        'produto_id',
        'quantidade_atual',
        'estoque_minimo'
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
