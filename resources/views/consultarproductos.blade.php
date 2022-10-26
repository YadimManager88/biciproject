@extends('layouts.index')

<head>
    <title>Productos 1-BICI</title>
</head>

@section('content')

<body>
    <div class="container">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-white bg-success">{{ __('Sistema 1-BICI') }}</div>

                    <div class="card-body">
                        <h1>CONSULTAR PRODUCTOS</h1>
                        <br>
                        <span class="input-group-text text-white bg-primary">Ingrese el Codigo del producto para consultar existencia</span>
                        
                        <!--FORMULARIO CONSULTAR-->
                        <form action="" id="formulario_con_citas">

                            <div>
                                <!--CONSULTA DE PRODUCTO-->

                                <div class="input-group">
                                    <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Codigo del producto">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary" id="btn_consultar">Consultar</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection