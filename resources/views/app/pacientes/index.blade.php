@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <a href="{!! route('paciente.add') !!}" class="btn btn-link">
            <i class="fas fa-plus-circle    "></i> Agregar
        </a>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-dark">
                    <tr role="rowheader">
                        <th width="100">ID
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Enfermedad</th>
                        <th>Fecha de la Cita</th>
                        <th>Hora de la Cita</th>
                        <th width="100"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $row)
                    <tr role="row">
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->nombres }}</td>
                        <td>{{ $row->apellidos }}</td>
                        <td>{{ $row->edad }}</td>
                        <td>{{ $row->sexo->sexo_full }}</td>
                        <td>{{ $row->enfermedad->enfermedad }}</td>
                        <td>{{ $row->cita->fecha_cita }}</td>
                        <td>{{ $row->cita->hora_cita }}</td>


                       
                        <td>

                            <div class="btn-group">
                                <a href="{!! route('paciente.edit',$row->id) !!}" class="btn btn-link">
                                    <i class="fas fa-edit    "></i>
                                </a>
    
                                {!! Form::open(['route' => ['paciente.delete',$row->id],'method'=>'delete']) !!}
                                <button type="submit" class="btn btn-link text-red">
                                <i class="fas fa-trash    "></i>
                                </button>
                                {!! Form::close() !!}
                            </div>


                            

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection