
@extends('layouts.app')


@section('content')
<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                 <h1>Detalle de venta #{{$venta->id}} <i class="fa fa-list"></i></h1>
                 <h1>Cliente: <small>{{$venta->cliente->nombre}}</small></h1>
                </div>
         


                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                    href="{{ route('ventas.index') }}">
                        Volver
                        
                    </a>


                </div>
              
            </div>
    
        </div>
      

    </section>
    <nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand"></a>
  
</nav>
    <div class="row">
        <div class="col-12">
          
          
            @include("notificacion")
           
          
            <h2>Producto</h2>
            <div class="card">
            <div class="card-body p-0">
    <table class="table" id="productos-table">
                <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Código de barras</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>
                @foreach($venta->productos as $producto)
                    <tr>
                        <td>{{$producto->nombre_producto}}</td>
                        <td>{{$producto->cod_producto}}</td>
                        <td>Q{{number_format($producto->precio_producto, 2)}}</td>
                        <td>{{$producto->cantidad_producto}}</td>
                        <td>${{number_format($producto->cantidad_producto * $producto->precio_producto, 2)}}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3"></td>
                    <td><strong>Total</strong></td>
                    <td>${{number_format($total, 2)}}</td>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
@endsection
