@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Agendar Citas</h1>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">

    @include('adminlte-templates::common.errors')

    <div class="card">

        {!! Form::open(['route' => 'citas.store']) !!}

        <div class="card-body">

            <div class="row">

               

           

                <div class="form-group col-sm-6">
                    <label for="tipo_cita">Tipo de Cita:</label>
                    <div class="input-group mb-3">
                        <select class="custom-select" name="tipo_cita" id="tipo_cita">
                            <option selected>Selecciona...</option>
                            <option value="Mantenimiento" id="uno" name="uno">Mantenimiento</option>
                            <option value="Reparación" id="dos" name="dos">Reparación</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="fecha_cita">Fecha Cita:</label>
                    <input type = "datetime-local" class="form-control" name="fecha_cita" type="text" id="fecha_cita">
                </div>

                @include('citas.fields')

                


            </div>

        </div>

        <div class="card-footer">
            {!! Form::submit('Agendar', ['class' => 'btn btn-success']) !!}
            <a href="{{ route('citas.index') }}" class="btn btn-danger">Cancel</a>
        </div>

        {!! Form::close() !!}

    </div>
</div>
@endsection