<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\productos;

class proveedores extends Model
{
    use HasFactory;

    
    protected $table = "proveedores";
    protected $fillable = ['id','nombre','telefono','correo','estado','created_at'];
    protected $hidden = ['updated_at'];

    public function productos()
    {
        return $this->hasMany(productos::class);
    }

    public function getProveedor($id)
    {
        return proveedores::find($id);
    }

}
