@extends('layouts.app')


@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    


    <div class="row">
        <div class="col-12">
            <h1>Nueva venta <i class="fa fa-cart-plus"></i></h1>
            @include("notificacion")
            <div class="row">
                <div class="col-12 col-md-6">
                    <form action="{{route('terminarOCancelarVenta')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="id_cliente">Cliente</label>
                            <select required class="form-control" name="id_cliente" id="id_cliente">

                                @foreach($clientes as $cliente)
                                
                                    <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                @endforeach
                            </select>

                          

                        </div>
                        @if(session("productos") !== null)
                            <div class="form-group">
                                <button name="accion" value="terminar" type="submit" class="btn btn-success">Terminar
                                    venta
                                </button>
                                <button name="accion" value="cancelar" type="submit" class="btn btn-danger">Cancelar
                                    venta
                                </button>
                            </div>
                        @endif
                    </form>
                </div>
               

             
             

                       <div class="col-12 col-md-6">
                       <form action= "{{route('agregarProductoVenta')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="codigo">Código de barras o codigo de producto</label>
                            <input id="codigo" autocomplete="off" required autofocus name="codigo" type="text"
                                   class="form-control"
                                   placeholder="Código de barras">
                        </div>
                    </form>
                </div>
            </div>
            @if(session("productos") !== null)
                <h2>Total: ${{number_format($total, 2)}}</h2>
                <div class="table-responsive">

<div class="card">
<div class="card-body p-0">
<table class="table" id="productos-table">
                        <thead>
                        <tr>
                            <th>Código de barras</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Quitar</th>
                        </tr>
                        </thead>
                        <tbody>
                      
                        @foreach(session("productos") as $producto)
                            <tr>
                                <td>{{$producto->cod_producto}}</td>
                                <td>{{$producto->nombre_producto}}</td>
                                <td>Q{{number_format($producto->precio_producto, 2)}}</td>
                                <td>{{$producto->cantidad}}</td>
                              
                           

                                <td>   
                        
                                    <form action="{{route('quitarProductoDeVenta')}}" method="post">
                                        @method("delete")
                                        @csrf
                                        <input type="hidden" name="indice" value="{{$loop->index}}">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h2>Aquí aparecerán los productos de la venta
                    <br>
                    Escanea el código de barras o escribe y presiona Enter</h2>
            @endif
        </div>
    </div>
@endsection
