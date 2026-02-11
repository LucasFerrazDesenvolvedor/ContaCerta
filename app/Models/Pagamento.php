<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $fillable = [
        'comanda_id',
        'user_id',
        'forma_pagamento',
        'valor',
        'troco'
    ];

    public function comanda()
    {
        return $this->belongsTo(Comanda::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
