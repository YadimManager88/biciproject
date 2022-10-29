<div class="table-responsive">
    <table class="table" id="citas-table">
        <thead>
        <tr>
            <th>Nombre del Cliente</th>
        <th>Tipo Cita</th>
        <th>Descripción</th>
        <th>Fecha de Cita</th>
            <th colspan="3">Funciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($citas as $citas)
            <tr>
                <td>{{ $citas->nom_cliente }}</td>
            <td>{{ $citas->tipo_cita }}</td>
            <td>{{ $citas->descrip_cita }}</td>
            <td>{{ $citas->fecha_cita }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['citas.destroy', $citas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('citas.show', [$citas->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('citas.edit', [$citas->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
