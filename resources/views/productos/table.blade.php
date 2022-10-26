
<div class="table-responsive">

    <table class="table" id="productos-table">
        <thead>
        <tr>
            <th>Codigo de Producto</th>
        <th>Nombre de Producto</th>
        <th>Cantidad de Producto</th>
        <th>Precio de Producto</th>
        <th>Sucursal</th>
            <th colspan="3">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $productos)
            <tr>
                <td>{{ $productos->cod_producto }}</td>
            <td>{{ $productos->nombre_producto }}</td>
            <td>{{ $productos->cantidad_producto }}</td>
            <td>{{ $productos->precio_producto }}</td>
            <td>{{ $productos->sucursals->name}}</td>

                <td width="120">
                    {!! Form::open(['route' => ['productos.destroy', $productos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productos.show', [$productos->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('productos.edit', [$productos->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('estas seguro de eliminar ?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
