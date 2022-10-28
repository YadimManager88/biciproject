

@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Agregar cliente</h1>
            <form method="POST" action="{{route("clientes.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Ingrese nombre">


                           <div class="form-group">
                    <label class="label">Nit</label>
                    <input required autocomplete="off" name="nit" class="form-control"
                           type="text" placeholder="Ingrese Nit">

                </div>
                <div class="form-group">
                    <label class="label">Direccion</label>
                    <input required autocomplete="off" name="direccion" class="form-control"
                           type="text" placeholder="Ingrese una direccion">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("clientes.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection
