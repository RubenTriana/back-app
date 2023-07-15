<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use SoftDeletes;
    protected $table = 'personas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
        'mensaje'

    ];
}
