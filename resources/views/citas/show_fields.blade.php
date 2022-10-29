<!-- Nom Cliente Field -->
<div class="col-sm-12">
    {!! Form::label('nom_cliente', 'Nom Cliente:') !!}
    <p>{{ $citas->nom_cliente }}</p>
</div>

<!-- Tipo Cita Field -->
<div class="col-sm-12">
    {!! Form::label('tipo_cita', 'Tipo Cita:') !!}
    <p>{{ $citas->tipo_cita }}</p>
</div>

<!-- Descrip Cita Field -->
<div class="col-sm-12">
    {!! Form::label('descrip_cita', 'Descrip Cita:') !!}
    <p>{{ $citas->descrip_cita }}</p>
</div>

<!-- Fecha Cita Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_cita', 'Fecha Cita:') !!}
    <p>{{ $citas->fecha_cita }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $citas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $citas->updated_at }}</p>
</div>

