<div class="table-responsive">
    <table class="table" id="sucursals-table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sucursals as $sucursal)
            <tr>
                <td>{{ $sucursal->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['sucursals.destroy', $sucursal->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sucursals.show', [$sucursal->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('sucursals.edit', [$sucursal->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro de eliminar?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
