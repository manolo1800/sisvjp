<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\proveedores;
use App\Models\compras_detalles;
use App\Models\ventas_detalles;

class productos extends Model
{
    use HasFactory;

    protected $table = "productos";
    protected $fillable = ['id','id_proveedor','nombre','imagen','precio','codigo','descripcion','estado','created_at'];
    protected $hidden = ['updated_at'];

    public function proveedor()
    {
        return $this->belongsTo(proveedores::class,'id_proveedor');
    }

    public function venta_detalles()
    {
        return $this->hasMany(venta_detalles::class);
    }

    public function compras_detalles()
    {
        return $this->hasMany(compras_detalles::class);
    }

    public function getproducto($id)
    {
        return productos::find($id);
    }
}
