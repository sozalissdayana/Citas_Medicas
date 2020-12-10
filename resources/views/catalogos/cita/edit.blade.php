@extends('layouts.app')
@section('content')
    <div class="container">
        {!! Form::model($model,['route' => ['cita.update',$model->id],'method'=>'patch']) !!}
        @include('catalogos.cita.fields')
        {!! Form::submit('Actualizar') !!}
        {!! Form::close() !!}
    </div>
@endsection
