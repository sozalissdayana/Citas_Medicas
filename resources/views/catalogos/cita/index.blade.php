@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <a href="{!! route('cita.add') !!}" class="btn btn-link">
            <i class="fas fa-plus-circle    "></i> Agregar
        </a>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-dark">
                    <tr role="rowheader">
                        <th width="100">ID
                        <th>Fecha cita</th>
                        <th>Hora cita</th>
                        <th width="100"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cita as $row)
                    <tr role="row">
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->fecha_cita }}</td>
                        <td>{{ $row->hora_cita }}</td>

                       
                        <td>

                            <div class="btn-group">
                                <a href="{!! route('cita.edit',$row->id) !!}" class="btn btn-link">
                                    <i class="fas fa-edit    "></i>
                                </a>
    
                                {!! Form::open(['route' => ['cita.delete',$row->id],'method'=>'delete']) !!}
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