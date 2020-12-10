<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enfermedad;

class EnfermedadesController extends Controller
{
    public $rules = [
        "enfermedad" => ['required', 'string','max:60'],
        
    ];

    public function index()
    {
        $enfermedad = Enfermedad::all();
        return view('catalogos.enfermedad.index', compact("enfermedad"));
    }


    public function edit(Enfermedad $model)
    {
        return view('catalogos.enfermedad.edit', compact('model'));
    }

   
    public function add()
    {     $model=false; 

        return view('catalogos.enfermedad.add',compact("model"));
    }

   
    public function store(Request $request, Enfermedad $model)
    {
        $campos = $this->validate($request, $this->rules);
        $model->create($campos);
        return redirect()->route('enfermedad');
    }


    public function update(Request $request, Enfermedad $model)
    {
        $campos=$this->validate($request,$this->rules);
        $model->update($campos);
        return redirect()->route('enfermedad');
    }

    public function destroy(Enfermedad $model)
    {
        $model->delete();
        return redirect()->route('enfermedad');
    }
}
