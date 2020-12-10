<?php

namespace App\Http\Controllers;

use App\Models\Enfermedad;
use App\Models\Cita;
use App\Models\Sexo;
use Illuminate\Http\Request;

class ApiAppsController extends Controller
{
    public function sexos(Request $request)
    {
        $rows = Sexo::query()
        ->When($request->buscar, function ($query) use ($request){
            $buscar = "%" . $request->buscar . "%";
            $query->where('sexo_full','ilike', $buscar);
        })
         ->get();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }


    public function enfermedad()
    {
        $rows = Enfermedad::all();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }

    public function citas()
    {
        $rows = Cita::all();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }
}
