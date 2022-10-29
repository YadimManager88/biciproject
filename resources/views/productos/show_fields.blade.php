<!-- Cod Producto Field -->
<div class="col-sm-12">
    {!! Form::label('cod_producto', 'Codigo de Producto:') !!}
    <p>{{ $productos->cod_producto }}</p>
</div>

<!-- Nombre Producto Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_producto', 'Nombre de Producto:') !!}
    <p>{{ $productos->nombre_producto }}</p>
</div>

<!-- Cantidad Producto Field -->
<div class="col-sm-12">
    {!! Form::label('cantidad_producto', 'Cantidad de Producto:') !!}
    <p>{{ $productos->cantidad_producto }}</p>
</div>

<!-- Precio Producto Field -->
<div class="col-sm-12">
    {!! Form::label('precio_producto', 'Precio de Producto:') !!}
    <p>{{ $productos->precio_producto }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('precio_producto', 'Sucursal Asignado:') !!}
    <p>{{ $productos->sucursals->name }}</p>
</div>




<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $productos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Editado el:') !!}
    <p>{{ $productos->updated_at }}</p>
</div>

