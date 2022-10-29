
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
                    href="{{ route('clientes.create') }}">
                        Añadir Nuevo
                        
                    </a>
                  
                </div>
              
            </div>
    
        </div>
        <form class="form-inline" type="get" action="{{url('/searchventas')}}">
    <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0"   type="submit">Search</button>
</form>

<div class="row">
        <div class="col-12">
       
          
            @include("notificacion")
            <div class="table-responsive">

<div class="card">
<div class="card-body p-0">
<table class="table" id="productos-table">
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
