<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitaController extends Controller
{
    public $rules = [
        "fecha_cita" => ['required', 'date'],
        "hora_cita" => ['required', 'string','max:10'],
        
    ];

    public function index()
    {
        $cita = Cita::all();
        return view('catalogos.cita.index', compact("cita"));
    }


    public function edit(Cita $model)
    {
        return view('catalogos.cita.edit', compact('model'));
    }

   
    public function add()
    {     $model=false; 

        return view('catalogos.cita.add',compact("model"));
    }

   
    public function store(Request $request, Cita $model)
    {
        $campos = $this->validate($request, $this->rules);
        $model->create($campos);
        return redirect()->route('cita');
    }


    public function update(Request $request, Cita $model)
    {
        $campos=$this->validate($request,$this->rules);
        $model->update($campos);
        return redirect()->route('cita');
    }

    public function destroy(Cita $model)
    {
        $model->delete();
        return redirect()->route('cita');
    }
}
