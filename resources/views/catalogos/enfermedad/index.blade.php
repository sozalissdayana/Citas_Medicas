@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <a href="{!! route('enfermedad.add') !!}" class="btn btn-link">
            <i class="fas fa-plus-circle    "></i> Agregar
        </a>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-dark">
                    <tr role="rowheader">
                        <th width="100">ID
                        <th>Enfermedad</th>
                        <th width="100"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($enfermedad as $row)
                    <tr role="row">
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->enfermedad }}</td>

                       
                        <td>

                            <div class="btn-group">
                                <a href="{!! route('enfermedad.edit',$row->id) !!}" class="btn btn-link">
                                    <i class="fas fa-edit    "></i>
                                </a>
    
                                {!! Form::open(['route' => ['enfermedad.delete',$row->id],'method'=>'delete']) !!}
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