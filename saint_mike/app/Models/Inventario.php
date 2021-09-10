<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//INventario model
class Inventario extends Model
{
    use HasFactory;

    //Table name
    protected $table = 'inventario';

    //Primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = false;

    //Fillable fields
    protected $fillable = [
        'id_producto',
        'cantidad',
        'precio_compra',
        'precio_venta',
        'fecha_compra',
        'fecha_vencimiento',
        'id_proveedor',
        'id_categoria',
        'nom_producto',
        'descripcion',
        'imagen'
    ];

    //Relationship with Proveedor
    public function proveedor()
    {
        return $this->belongsTo('App\Models\Proveedor', 'id_proveedor');
    }

    //Relationship with Categoria
    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria', 'id_categoria');
    }
}

// coomand for make a model proveedor categoria and migrate
// php artisan make:model Proveedor -m
// php artisan make:model Categoria -m




