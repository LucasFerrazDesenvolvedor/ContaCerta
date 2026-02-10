<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = ['nome', 'numero', 'status'];
    public function comandas()
    {
        return $this->hasMany(Comanda::class);
    }
}
