@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de citas</h4>
                <h6 class="card-subtitle text-muted">Subtitle</h6>
            </div>
            <div class="card-body">
                {!! Form::model($model, ['route' => ['paciente.update', $model->id],'method'=>'patch']) !!}
                @include('app.pacientes.fieldsPacientes')
                {!! Form::submit('Actualizar') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
