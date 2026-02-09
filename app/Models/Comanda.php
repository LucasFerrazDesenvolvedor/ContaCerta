<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    protected $fillable = [
        'mesa_id',
        'user_id',
        'total',
        'status'
    ];
    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }

    public function itens()
    {
        return $this->hasMany(ComandaItem::class);
    }
}
