@can('Vistaproducto')
 
<li class="nav-item">
    <a href="{{ route('productos.index') }}" class="nav-link {{ Request::is('productos*') ? 'active' : '' }}">
       <div class=" " style="max-width: 440px;">
            <div class="row g-4" width="50" height="50">
                <div class="">
                       <img src="https://cdn-icons-png.flaticon.com/512/2250/2250401.png" class="img-fluid rounded-start" alt="logo" width="50" height="50">
                </div>
                <div class="col-md-8">
                            <div class="card-body">
                            <p style="color:#FFFFFF";>Productos</p>

                             </div>
                </div>
            </div>

        </div>
    </a>
</li>
@endcan


@can('Vistausuario')
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
       <div class=" " style="max-width: 440px;">
            <div class="row g-4" width="50" height="50">
                <div class="">
                       <img src="https://cdn-icons-png.flaticon.com/512/921/921347.png" class="img-fluid rounded-start" alt="logo" width="50" height="50">
                </div>
                <div class="col-md-8">
                            <div class="card-body">
                            <p style="color:#FFFFFF";>Usuarios</p>

                             </div>
                </div>
            </div>

        </div>
    


    </a>
</li>
@endcan

@can('Vistarole')
<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">

       <div class=" " style="max-width: 440px;">
            <div class="row g-4" width="50" height="50">
                <div class="">
                       <img src="https://cdn-icons-png.flaticon.com/512/7179/7179293.png" class="img-fluid rounded-start" alt="logo" width="50" height="50">
                </div>
                <div class="col-md-8">
                            <div class="card-body">
                            <p style="color:#FFFFFF";>Roles</p>

                             </div>
                </div>
            </div>

        </div>
        
    </a>
</li>
@endcan

@can('Vistasucursal')
<li class="nav-item">
    <a href="{{ route('sucursals.index') }}"
       class="nav-link {{ Request::is('sucursals*') ? 'active' : '' }}">

       <div class=" " style="max-width: 440px;">
            <div class="row g-4" width="50" height="50">
                <div class="">
                       <img src="https://cdn-icons-png.flaticon.com/512/746/746900.png" class="img-fluid rounded-start" alt="logo" width="50" height="50">
                </div>
                <div class="col-md-8">
                            <div class="card-body">
                            <p style="color:#FFFFFF";>Sucursales</p>

                             </div>
                </div>
            </div>

        </div>
       
    </a>
</li>
@endcan
@can('Efectuarventa')
<li class="nav-item">
    <a href="{{ route('vender.index') }}"
       class="nav-link {{ Request::is('vender*') ? 'active' : '' }}">
       <div class=" " style="max-width: 440px;">
            <div class="row g-4" width="50" height="50">
                <div class="">
                       <img src="https://cdn-icons-png.flaticon.com/512/1069/1069102.png" class="img-fluid rounded-start" alt="logo" width="50" height="50">
                </div>
                <div class="col-md-8">
                            <div class="card-body">
                            <p style="color:#FFFFFF";>Efectuar Venta</p>

                             </div>
                </div>
            </div>

        </div>

    </a>
</li>
@endcan

@can('Vistaventas')
<li class="nav-item">
    <a href="{{ route('ventas.index') }}"
       class="nav-link {{ Request::is('ventas*') ? 'active' : '' }}">

       <div class=" " style="max-width: 440px;">
            <div class="row g-4" width="50" height="50">
                <div class="">
                       <img src="https://cdn-icons-png.flaticon.com/512/858/858699.png" class="img-fluid rounded-start" alt="logo" width="50" height="50">
                </div>
                <div class="col-md-8">
                            <div class="card-body">
                            <p style="color:#FFFFFF";>Ventas</p>

                             </div>
                </div>
            </div>

        </div>
       



    </a>
</li>
@endcan



@can('Vistacliente')
<li class="nav-item">
    <a href="{{ route('clientes.index') }}"
       class="nav-link {{ Request::is('clientes*') ? 'active' : '' }}">
    

        <div class=" " style="max-width: 440px;">
            <div class="row g-4" width="50" height="50">
                <div class="">
                       <img src="https://cdn-icons-png.flaticon.com/512/1605/1605350.png" class="img-fluid rounded-start" alt="logo" width="50" height="50">
                </div>
                <div class="col-md-8">
                            <div class="card-body">
                            <p style="color:#FFFFFF";>Clientes</p>

                             </div>
                </div>
            </div>

        </div>
    </a>
</li>
@endcan