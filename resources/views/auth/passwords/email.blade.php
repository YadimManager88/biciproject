@extends('layouts.app3')
@include('layouts.navbar') 

@section('content')
<body  style="background-image: url('https://trek.scene7.com/is/image/TrekBicycleProducts/UY_October2022DiscountsHomepageMarquee?$responsive-pjpg$&cache=on,on&wid=1920');
         background-repeat: no-repeat;
            background-size: cover; ">
>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
        
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">


    <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="#">
                    <img src="https://cdn-icons-png.flaticon.com/512/3256/3256783.png" alt="Logo" width="150" height="150" class="d-inline-block align-text-top">
                            
                                </a>
                            <h5>Restablecer Contraseña</h5>
                            <p class="mb-0">Ingresa tu datos y espera la confirmacion por via correo electronico</p>
                        </div>
                        <div class="row px-xl-5 px-sm-4 px-3">
                          
                          
                        
                          
                        </div>

                        <div class="card-body">
                        
                        <div class="card card-plain">
                            

                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Correo Electronico" value="{{ old('email') }}" aria-label="Email">
                                            @error('email') <p class="text-danger text-xs pt-1"> El correo es invalido </p>@enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Restablecer</button>
                                        </div>
                                    </form>

                                    </div class="abs-center">
                                <p class="text-sm mt-3 mb-0">Ya tienes una cuenta? <a href="{{ route('login') }}"
                                        class="text-Blue font-weight-bolder">Iniciar Sesion</a></p>
                                </div>
                                <div id="alert">
                                    @include('components.alert')
                                </div>
                            </div>
                        </div>1
                    </div>
                </div>
            </div>




       
</body>

    @endsection 