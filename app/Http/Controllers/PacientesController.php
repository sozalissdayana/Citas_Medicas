<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacientesController extends Controller
{

    public $rules = [
        "nombres" => ['required', 'string','max:60'],
        "apellidos" => ['required', 'string','max:60'],
        "edad" => ['required', 'string','max:3'],
        "sexo_id" => ['required', 'numeric'],
        "enfermedad_id" => ['required', 'numeric'],
        "cita_id" => ['required', 'numeric'],
        
    ];

    public function index()
    {
        $pacientes = Paciente::all();
        return view('app.pacientes.index', compact("pacientes"));
    }


    public function edit(Paciente $model)
    {
        return view('app.pacientes.edit', compact('model'));
    }

   
    public function add()
    {     $model=false; 

        return view('app.pacientes.add',compact("model"));
    }

   
    public function store(Request $request, Paciente $model)
    {
        $campos = $this->validate($request, $this->rules);
        $model->create($campos);
        return redirect()->route('paciente');
    }


    public function update(Request $request, Paciente $model)
    {
        $campos = $this->validate($request,$this->rules);
        $model->update($campos);
        return redirect()->route('paciente');
    }

    public function destroy(Paciente $model)
    {
        $model->delete();
        return redirect()->route('paciente');
    }
}
