<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unidadorganica extends Model
{
    use HasFactory;
    protected $table = 'unidadorganica';

    protected $fillable = [
        'IDUNIDAD','DESCRIPCION'
    ];
}
