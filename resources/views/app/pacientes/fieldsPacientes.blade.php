 
<div class="row">
    <div class="col-lg-12">
        
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            {!! Form::text('nombres',null,$attributes=['class' => 'form-control']) !!}

            @includeWhen(count($errors->get('nombres'))>0, 'errors.message', ['errores' => $errors->get('nombres')])

        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Apellidos</label>
            {!! Form::text('apellidos',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('apellidos'))>0, 'errors.message', ['errores' => $errors->get('apellidos')])
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Edad</label>
            {!! Form::text('edad',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('edad'))>0, 'errors.message', ['errores' => $errors->get('edad')])
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Sexo</label>
          
            @if ($model)
            <select-combustibles :selected="{{ $model->sexo}}" url="/api-app/sexos" nombre="sexo_id" label="sexo_full" />
            @else
            <select-combustibles url="/api-app/sexos" nombre="sexo_id" label="sexo_full" />
            @endif

            @includeWhen(count($errors->get('sexo_id'))>0, 'errors.message', ['errores' => $errors->get('sexo_id')])
        </div>

       <div class="form-group">
            <label for="exampleInputEmail1">Enfermedad</label>
            
                @if ($model)
                <select-combustibles :selected="{{ $model->enfermedad}}" url="/api-app/enfermedad" nombre="enfermedad_id" label="enfermedad" />
                @else
                <select-combustibles url="/api-app/enfermedad" nombre="enfermedad_id" label="enfermedad" />
                @endif
        
            @includeWhen(count($errors->get('enfermedad_id'))>0, 'errors.message', ['errores' => $errors->get('enfermedad_id')])
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Fecha Cita</label>
            
                @if ($model)
                <select-combustibles :selected="{{ $model->cita}}" url="/api-app/citas" nombre="cita_id" label="fecha_cita" />
                @else
                <select-combustibles url="/api-app/citas" nombre="cita_id" label="fecha_cita" />
                @endif
            
            @includeWhen(count($errors->get('cita_id'))>0, 'errors.message', ['errores' => $errors->get('cita_id')])

        </div>

        <div class="form-group">
           
            <label for="exampleInputEmail1">Hora Cita</label>
            
                @if ($model)
                <select-combustibles :selected="{{ $model->cita}}" url="/api-app/citas" nombre="cita_id" label="hora_cita" />
                @else
                <select-combustibles url="/api-app/citas" nombre="cita_id" label="hora_cita" />
                @endif
        
            @includeWhen(count($errors->get('cita_id'))>0, 'errors.message', ['errores' => $errors->get('cita_id')])
        </div>

    </div>

 
    
    
</div>


