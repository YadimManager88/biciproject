<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Login</title>
   


    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css"
          integrity="sha512-mxrUXSjrxl8vm5GwafxcqTrEwO1/oBNU25l20GODsysHReZo4uhVISzAKzaABH6/tTfAxZrY2FprmeAP5UZY8A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="hold-transition login-page" class="bg-image" 
 style="background-image: url('https://images8.alphacoders.com/996/996331.jpg');
         background-repeat: no-repeat;
            background-size: cover; ">



<div class="login-box">
    <div class="login-logo">
    <div>
    <img width="200"
     height="200"src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png ">
   <!-- /.  <a href="{{ url('/home') }}"><b>{{ config('app.name') }}</b></a> -->
    </div>
    </div>
    <!-- /.login-logo -->

    <!-- /.login-box-body -->
    <div class="card">
        <div class="card-body login-card-body">
            <p> 
Verifique su dirección de correo electrónico </p>
<p>Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.</p>
<p>Antes de continuar, verifique su correo electrónico para obtener un enlace de verificación. Si no recibió el correo electrónico, </p>
      <a href="#" onclick="event.preventDefault(); document.getElementById('resend-form').submit();">
                                          haga clic aquí para solicitar otro
                            </a>
                            <form id="resend-form" action="{{ route('verification.resend') }}" method="POST" >
                            @csrf
                        </form>
                        <a href="#" class="btn btn-default btn-flat float-right"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Salir
                        </a>
                       
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">  
                 
                        @csrf
                        </form>

                       
</div>
<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"
        integrity="sha512-AJUWwfMxFuQLv1iPZOTZX0N/jTCIrLxyZjTRKQostNU71MzZTEPHjajSK20Kj1TwJELpP7gl+ShXw5brpnKwEg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>

