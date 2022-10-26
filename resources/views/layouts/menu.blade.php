@can('Vistaproducto')
 
<li class="nav-item">
    <a href="{{ route('productos.index') }}"
       class="nav-link {{ Request::is('productos*') ? 'active' : '' }}">
        <p>Productos</p>
    </a>
</li>
@endcan


@can('Vistausuario')
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Usuarios</p>
    </a>
</li>
@endcan

@can('Vistarole')
<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>
@endcan

@can('Vistasucursal')
<li class="nav-item">
    <a href="{{ route('sucursals.index') }}"
       class="nav-link {{ Request::is('sucursals*') ? 'active' : '' }}">
        <p>Sucursales</p>
    </a>
</li>
@endcan

<li class="nav-item">
    <a href="{{ route('efectuarventa') }}"
       class="nav-link {{ Request::is('efectuarventa*') ? 'active' : '' }}">
        <p>Ventas</p>
    </a>
</li>