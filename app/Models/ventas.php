<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\metodo_pagos;
use App\Models\ventas_detalles;
use DB;

class ventas extends Model
{
    use HasFactory;

    
    protected $table = "ventas";
    protected $fillable = ['id','id_usuario','id_metodoPago','total','nombre_cliente','descripcion','created_at'];
    protected $hidden = ['updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class,'id_usuario');
    }

    public function metodo_pago()
    {
        return $this->belongsTo(metodo_pagos::class,'id_metodPago');
    }

    public function venta_detalles()
    {
        return $this->hasMany(venta_detalles::class);
    }

    public function getVenta($id)
    {
        return ventas::find($id);
    }
    
    public static function borrar($id)
    {
        DB::table('ventas')->whereId($id)->delete();
    }

}
