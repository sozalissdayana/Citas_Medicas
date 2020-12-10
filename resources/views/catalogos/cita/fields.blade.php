<div class="form-group">
    <label for="exampleInputEmail1">fecha de la cita</label>
    {!! Form::date('fecha_cita',null,$attributes=['class' => 'form-control']) !!}
    <small id="emailHelp" class="form-text text-muted">Escriba la Fecha de la cita</small>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">fecha de la cita</label>
    {!! Form::text('hora_cita',null,$attributes=['class' => 'form-control']) !!}
    <small id="emailHelp" class="form-text text-muted">Escriba la Hora de la Cita</small>
</div>