@extends('layouts.app3')
@section('content')




@include('layouts.navbar') 

    <body style="background-image: url('https://bloximages.newyork1.vip.townnews.com/dailyastorian.com/content/tncms/assets/v3/editorial/4/7f/47f41772-f54d-11eb-9068-d331ec305bea/610ad4f467315.hires.jpg');
         background-repeat: no-repeat;
            background-size: cover; ">

            

            <body class=""    >

            <div class="col-auto bg-danger p-0" aling="center">
    

            </div>


            </body>
           




          <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
            
</div>
    <main class="main-content  mt-1">
 
        </div>
        <div class="container">
            <div class="row mt-lg-n11 mt-md-n11 mt-n10 justify-content-center">
            
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">

            
                <br>


                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ url('/') }}">
                    <img src="https://cdn-icons-png.flaticon.com/512/272/272456.png" alt="Logo" width="150" height="150" class="d-inline-block align-text-top">
                            
                                </a>
                            <h5>Ingresa tus credenciales</h5>
                        </div>
                        <div class="row px-xl-5 px-sm-4 px-3">
                          
                          
                        
                          
                        </div>

                        <div class="card-body">
                        <form role="form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <h5>Correo Electronico</h5>
                                            <input type="email" name="email" class="form-control form-control-lg" aria-label="Email">
                                            @error('email') <p class="text-danger text-xs pt-1"> Usuario no encontrado</p>@enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <h5>Contraseña</h5>
                                            <input type="password" name="password" class="form-control form-control-lg" aria-label="Password" >
                                            @error('password') <p class="text-danger text-xs pt-1"> Contraseña no valida </p>@enderror
           
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Recuerdame</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Iniciar Sesion</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-1 text-sm mx-auto">
                                        He olvidado mi contraseña? Restablecer
                                        <a href="{{ route('password.request') }}" class="text-primary text-gradient font-weight-bold">Aqui</a>
                                    </p>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        No cuenta con una cuenta ?
                                        <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Registrarme</a>
                                    </p>
                                </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    </body>
   
@endsection