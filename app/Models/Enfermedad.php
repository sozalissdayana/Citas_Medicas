<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    use HasFactory;


     //Definiendo la tabla del modelo
     protected $table = 'enfermedades';

     //Definiendo los campos de la tabla
     protected $fillable = [ 'enfermedad'];

}
