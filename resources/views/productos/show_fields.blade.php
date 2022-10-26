<!-- Cod Producto Field -->
<div class="col-sm-12">
    {!! Form::label('cod_producto', 'Cod Producto:') !!}
    <p>{{ $productos->cod_producto }}</p>
</div>

<!-- Nombre Producto Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_producto', 'Nombre Producto:') !!}
    <p>{{ $productos->nombre_producto }}</p>
</div>

<!-- Cantidad Producto Field -->
<div class="col-sm-12">
    {!! Form::label('cantidad_producto', 'Cantidad Producto:') !!}
    <p>{{ $productos->cantidad_producto }}</p>
</div>

<!-- Precio Producto Field -->
<div class="col-sm-12">
    {!! Form::label('precio_producto', 'Precio Producto:') !!}
    <p>{{ $productos->precio_producto }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $productos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $productos->updated_at }}</p>
</div>

