<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    //model de proveedor
    protected $table = 'proveedores';
    protected $fillable = ['nombre', 'direccion', 'telefono', 'email'];

    public function productos()
    {
        return $this->hasMany('App\Models\Producto');
    }

}
//how can i make a controller for this model?

