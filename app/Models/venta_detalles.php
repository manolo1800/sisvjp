<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ventas;
use App\Models\productos;

class venta_detalles extends Model
{
    use HasFactory;

    protected $table = "venta_detalles";
    protected $fillable = ['id','id_venta','id_producto','cantidad','created_at'];
    protected $hidden = ['updated_at'];

    public function venta()
    {
        return $this->belongsTo(ventas::class,'id_venta');
    }

    public function producto()
    {
        return $this->belongsTo(productos::class,'id_venta');
    }

    public function getVentaDetalle($id)
    {
        return venta_detalles::find($id);
    }

}
