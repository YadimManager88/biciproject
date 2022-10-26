@extends('layouts.app')
@section('content')
<meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap4-toggle/3.6.1/bootstrap4-toggle.min.css"
          integrity="sha512-EzrsULyNzUc4xnMaqTrB4EpGvudqpetxG/WNjCpG6ZyyAGxeB6OBF9o246+mwx3l/9Cn838iLIcrxpPHTiygAA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css"
          integrity="sha512-mxrUXSjrxl8vm5GwafxcqTrEwO1/oBNU25l20GODsysHReZo4uhVISzAKzaABH6/tTfAxZrY2FprmeAP5UZY8A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
          integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
          crossorigin="anonymous"/>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
          integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
          crossorigin="anonymous"/>

<head>
    <title>Ventas 1-BICI</title>
</head>



<body>
    <div class="container">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-white bg-success">{{ __('Sistema 1-BICI') }}</div>

                    <div class="card-body">
                        <h1>VENTA DE PRODUCTOS</h1>
                    </div>

                </div>

            </div>
        </div>

        <!--FORMULARIO VENDER PRODUCTO-->
        <form action="" id="formulario_vender_produc">

            <!--NOMBRE, NIT CLIENTE & FECHA-->
            <br>
            <div class="input-group">

                <span class="input-group-text text-white bg-primary">Nombre</span>
                <input type="text" class="form-control" name="nom_cliente" id="nom_cliente" aria-describedby="helpId" placeholder="Nombre del Cliente">
                &nbsp;&nbsp;&nbsp;

                <span class="input-group-text text-white bg-primary">Nit</span>
                <input type="text" class="form-control" name="nit_cliente" id="nit_cliente" aria-describedby="helpId" placeholder="Nit Cliente">
                &nbsp;&nbsp;&nbsp;

                <span class="input-group-text text-white bg-primary">Fecha</span>
                <input type="text" class="form-control" name="fecha_venta" id="fecha_venta" aria-describedby="helpId" placeholder="dd/mm/aaaa">

            </div>

            <!--DIRECCION CLIENTE-->
            <br>
            <div class="input-group ">
                <span class="input-group-text text-white bg-primary">Dirección</span>
                <input type="text" class="form-control" name="direcc_cliente" id="direcc_cliente" aria-describedby="helpId" placeholder="Direccion del Cliente">
            </div>


            <!--TABLA PRODUCTOS VENTAS-->
            <br>
            <table class="table table-bordered" id="tbl_productos" >
                <thead>
                    <tr class="bg-primary text-white">
                        <th scope="col">Cant.</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Valor Q.</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <th scope="row">15</th>
                        <th scope="row">Rayos de 18"</th>
                        <th scope="row">135</th>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <th scope="row">Cadena para bicicleta de cambios</th>
                        <th scope="row">65</th>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <th scope="row">Llanta 18"</th>
                        <th scope="row">180</th>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <th scope="row">Tubos de 18"</th>
                        <th scope="row">80</th>
                    </tr>

                </tbody>

            </table>


            <!-- MODAL -->
            <div class="modal fade" id="formulario_modal_agg" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Stock de Prudctos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <!--FORMULARIO AGREGAR-->
                            <form action="" id="formulario_agg_poducto" method="POST">

                                <!--NOMBRE DEL PRODUCTO-->
                                <div>
                                    <label for="title">Nombre del Producto</label>
                                    <div class="input-group">
                                        <form class="form-inline">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Nombre del Producto" aria-label="Search">
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="button">Buscar</button>
                                        </form>
                                    </div>
                                    <br>
                                </div>

                                <!--TABLA CONSULTA PRODUCTO-->
                                <table class="table table-bordered table-hover" id="tbl_consult_productos">
                                    <thead>
                                        <tr class="bg-primary text-white">
                                            <th scope="col">Codigo</th>
                                            <th scope="col">Cant.</th>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Q. Precio c/u</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <th scope="row">12345</th>
                                            <th scope="row">300</th>
                                            <th scope="row">Rayos de 16"</th>
                                            <th scope="row">10</th>
                                        </tr>

                                        <tr>
                                            <th scope="row">45678</th>
                                            <th scope="row">500</th>
                                            <th scope="row">Rayos 10"</th>
                                            <th scope="row">5</th>
                                        </tr>

                                    </tbody>

                                </table>

                                <br>
                                <div class="input-group">
                                    <span class="input-group-text text-white bg-primary">Cantidad</span>
                                    <input type="text" class="form-control" name="cant_pduct_vender" id="cant_pduct_vender" aria-describedby="helpId" placeholder="Cantidad del Proudcto a Vender">
                                </div>

                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

                            <button type="submit" class="btn btn-success" id="btnAgregar">Agregar</button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Confirm-->
            <div class="modal fade" id="modal_confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header  bg-success text-white">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmación de Venta</h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ¿Desea confirmar la venta?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
                            <button type="submit" class="btn btn-success" data-dismiss="modal">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--ULTIMOS BOTONES AGG & VENDER-->
            <br>
            <div>
                <center>
                    <button type="button" class="btn btn-primary text-white" id="btnAggProduc">Agregar</button>
                    &nbsp;&nbsp;&nbsp;

                    <button type="submit" class="btn btn-success" id="btn_reg_produc">Vender</button>
                </center>
            </div>

        </form>
    </div>
</body>
<script src="{{ asset('js/aggproducto.js') }}" defer></script>
@endsection
