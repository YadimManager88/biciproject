
@extends('layouts.app')


@section('content')
<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>Ventas <i class="fa fa-list"></i></h1>
                </div>
         


                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                    href="{{ route('vender.index') }}">
                        Venta Nueva
                        
                    </a>
                  
                </div>
              
            </div>
    
        </div>
        <form class="form-inline" type="get" action="{{url('/searchventas')}}">
    <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0"   type="submit">Search</button>
</form>

    </section>
    <nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand"></a>
  
</nav>


    <div class="row">
        <div class="col-12">
          
            @include("notificacion")
            <div class="table-responsive">

            <div class="card">
            <div class="card-body p-0">
    <table class="table" id="productos-table">
                    <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Cliente</th>
                        <th>Total</th>
                        <!--  <th>Ticket de venta</th>  -->
                        <th>Detalles</th>
                        @can('eliminarventas')
                        <th>Eliminar</th>
                        @endcan
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ventas as $venta)
                        <tr>
                            <td>{{$venta->created_at}}</td>
                            <td>{{$venta->cliente->nombre}}</td>
                            <td>${{number_format($venta->total, 2)}}</td>
                         <!--   <td>
                                <a class="btn btn-info" href="{{route("ventas.ticket", ["id"=>$venta->id])}}">
                                    <i class="fa fa-print"></i>
                                </a>
                            </td>  -->
                            <td>
                                <a class="btn btn-success" href="{{route("ventas.show", $venta)}}">
                                    <i class="fa fa-info"></i>
                                </a>
                            </td>
                            @can('eliminarventas')
                            <td>
                                <form action="{{route("ventas.destroy", [$venta])}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            @endcan
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
