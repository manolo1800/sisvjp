<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\metodo_pagos;
use App\Models\compras_detalles;

class compras extends Model
{
    use HasFactory;
    
    protected $table = "compras";
    protected $fillable = ['id','id_usuario','id_metodoPago','total','descripcion'];
    protected $hidden = ['updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class,'id_usuario');
    }

    public function metodo_pago()
    {
        return $this->belongsTo(metodo_pagos::class,'id_metodPago');
    }

    public function compras_detalles()
    {
        return $this->hasMany(compras_detalles::class);
    }

    public function getCompra($id)
    {
        return compras::find($id);
    }
}
