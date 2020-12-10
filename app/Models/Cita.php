<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    //Definiendo la tabla del modelo
    protected $table = 'citas';

    //Definiendo los campos de la tabla
    protected $fillable = [
        'fecha_cita',
        'hora_cita'
    ];

 
    
}
