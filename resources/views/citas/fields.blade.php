<!-- Descrip Cita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descrip_cita', 'Descripción:') !!}
    {!! Form::text('descrip_cita', null, ['class' => 'form-control']) !!}
</div>

<!-- Select sucursal -->
<div class="form-group col-sm-6">
    {!! Form::label('id_sucursals', 'Sucursal') !!}
    {!! Form::select('id_sucursals',$sucursals, null, ['class' => 'form-control custom-select']) !!}
</div>








