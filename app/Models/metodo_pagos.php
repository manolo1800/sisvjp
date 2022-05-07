<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ventas;
use App\Models\compras;

class metodo_pagos extends Model
{
    use HasFactory;

    protected $table = "metodo_pagos";
    protected $fillable = ['id','nombre','created_at'];
    protected $hidden = ['updated_at'];

    public function ventas()
    {
        return $this->hasMany(ventas::class);
    }

    public function compras()
    {
        return $this->hasMany(compras::class);
    }
}
