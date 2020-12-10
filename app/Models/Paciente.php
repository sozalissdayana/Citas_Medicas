<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'pacientes';

     //Definiendo los campos de la tabla
     protected $fillable = [
         "nombres",
         "apellidos",
         "edad",
         "sexo_id",
         "enfermedad_id",
         "cita_id",
     ];
 
    
     
     public function sexo()
     {
         return $this->hasOne(
             Sexo::class,
             'id',
             'sexo_id'
         );
     }
 
     public function enfermedad()
     {
         return $this->hasOne(
            Enfermedad::class,
             'id',
             'enfermedad_id'
         );
     }
 
     public function cita()
     {
         return $this->hasOne(
             Cita::class,
             'id',
             'cita_id'
         );
     }
}
