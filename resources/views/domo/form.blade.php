<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombredomo') }}
            {{ Form::text('nombredomo', $domo->nombredomo, ['class' => 'form-control' . ($errors->has('nombredomo') ? ' is-invalid' : ''), 'placeholder' => 'Nombredomo']) }}
            {!! $errors->first('nombredomo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $domo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipodomo') }}
            {{ Form::text('tipodomo', $domo->tipodomo, ['class' => 'form-control' . ($errors->has('tipodomo') ? ' is-invalid' : ''), 'placeholder' => 'Tipodomo']) }}
            {!! $errors->first('tipodomo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('caracteristicas_id') }}
            {{ Form::text('caracteristicas_id', $domo->caracteristicas_id, ['class' => 'form-control' . ($errors->has('caracteristicas_id') ? ' is-invalid' : ''), 'placeholder' => 'Caracteristicas Id']) }}
            {!! $errors->first('caracteristicas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capacidad') }}
            {{ Form::text('capacidad', $domo->capacidad, ['class' => 'form-control' . ($errors->has('capacidad') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad']) }}
            {!! $errors->first('capacidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numerobaños') }}
            {{ Form::text('numerobaños', $domo->numerobaños, ['class' => 'form-control' . ($errors->has('numerobaños') ? ' is-invalid' : ''), 'placeholder' => 'Numerobaños']) }}
            {!! $errors->first('numerobaños', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>