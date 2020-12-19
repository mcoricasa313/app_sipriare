<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'idexpediente','numero_expediente','asunto','numero_documento','folios','remitente','prioridad','uo_destino','estado','observacion','presicion','respuesta'
    ];

    protected  static function boot()
    {
        parent::boot();
        self::creating(function ($table)
        {
            if (!app()->runningInConsole()) {
                $table-> user_id = auth()->id();
                # code...
            }
        });




    }

    public function user()
        {
            return $this->belongsTo(User::class);
        }

}
