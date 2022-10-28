<!-- Cod Producto Field -->



<div class="form-group col-sm-6">
    {!! Form::label('cod_producto', 'Codigo de producto:') !!}
    {!! Form::text('cod_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_producto', 'Nombre de producto:') !!}
    {!! Form::text('nombre_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad_producto', 'Cantidad de producto:') !!}
    {!! Form::text('cantidad_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_producto', 'Precio de producto:') !!}
    {!! Form::text('precio_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Select sucursal -->
<div class="form-group col-sm-6">
    {!! Form::label('id_sucursals', 'Sucursal') !!}
    {!! Form::select('id_sucursals', $sucursals, ['class' => 'form-control', 'disabled'=>"true"]) !!}
</div>

