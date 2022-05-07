<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\compras;
use App\Models\productos;

class compra_detalles extends Model
{
    use HasFactory;

    protected $table = "compra_detalles";
    protected $fillable = ['id','id_compra','id_producto','cantidad','created_at'];
    protected $hidden = ['updated_at'];

    public function venta()
    {
        return $this->belongsTo(compras::class,'id_venta');
    }

    public function producto()
    {
        return $this->belongsTo(productos::class,'id_venta');
    }

    public function getcompraDetalle($id)
    {
        return compra_detalles::find($id);
    }

}
