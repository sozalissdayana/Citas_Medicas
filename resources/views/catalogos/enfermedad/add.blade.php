@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        {!! Form::open(['route' => 'enfermedad.store']) !!}
        @include('catalogos.enfermedad.fields')
        {!! Form::submit('Guardar') !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection