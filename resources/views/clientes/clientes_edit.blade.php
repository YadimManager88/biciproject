
@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Editar cliente</h1>
            <form method="POST" action="{{route("clientes.update", [$cliente])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required value="{{$cliente->nombre}}" autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Ingrese un nombre">
                </div>
                <div class="form-group">
                    <label class="label">Nit</label>
                    <input required value="{{$cliente->nit}}" autocomplete="off" name="nit"
                           class="form-control"
                           type="text" placeholder="Ingrese un nit">
                </div>

                <div class="form-group">
                    <label class="label">Direccion</label>
                    <input required value="{{$cliente->direccion}}" autocomplete="off" name="direccion"
                           class="form-control"
                           type="text" placeholder="Ingrese una direccion">
                </div>



                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("clientes.index")}}">Volver</a>
            </form>
        </div>
    </div>
@endsection
