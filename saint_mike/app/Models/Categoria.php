<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    #table Categoria
    protected $table = 'categoria';
    #primaryKey
    protected $primaryKey = 'id';
    #timestamps
    public $timestamps = false;
    #fillable
    protected $fillable = ['nombre'];
    #hidden
    protected $hidden = ['created_at', 'updated_at'];

}

