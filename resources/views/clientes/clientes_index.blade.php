
@extends('layouts.app')


@section('content')
    

<div class="row">
        <div class="col-12">
       
            <h1>Clientes <i class="fa fa-users"></i></h1>
            @can('crearcliente')
            <a href="{{route("clientes.create")}}" class="btn btn-success mb-2">Agregar</a>
            @endcan
            @include("notificacion")
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Nit</th>

                        <th>Direccion</th>
                       @can('editarcliente')
                        <th>Editar</th>
                        @endcan
                        @can('eliminarcliente')
                        <th>Eliminar</th>
                       @endcan
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->nombre}}</td>
                            <td>{{$cliente->nit}}</td>
                            <td>{{$cliente->direccion}}</td>
                       
                            @can('editarcliente')
                            <td>
                           
                                <a class="btn btn-warning" href="{{route("clientes.edit",[$cliente])}}">
                                    <i class="fa fa-edit"></i>
                                </a>

                            </td>
                              @endcan   
                              @can('eliminarcliente') 
                            <td>
                                <form action="{{route("clientes.destroy", [$cliente])}}" method="post">
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
