@extends('layouts.app3')


@section('content')

<body style="background-image: url('https://bloximages.newyork1.vip.townnews.com/dailyastorian.com/content/tncms/assets/v3/editorial/4/7f/47f41772-f54d-11eb-9068-d331ec305bea/610ad4f467315.hires.jpg');
         background-repeat: no-repeat;
            background-size: cover; ">

@include('layouts.navbar')

<br></br>
<br></br>
<br></br>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
            <div class="card-header text-center pt-4">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ url('/') }}">
                    <img src="https://cdn-icons-png.flaticon.com/512/3200/3200751.png" alt="Logo" width="150" height="125" class="d-inline-block align-text-top">
                            
                                </a>
                            <h5>Registrate</h5>
                        </div>
                

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Nombre es requerido</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Correo Electronico</label>
                         
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>El correo ya se encuentra registrado</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>La contraseña debe ser mayor a 8 caracteres</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                         
                       


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Registrarme
                                </button>
                            </div>
                        </div>

                        <div class="text-center">
                                   
                                </div>
                                <p class="text-sm mt-3 mb-0">Ya tienes una cuenta? <a href="{{ route('login') }}"
                                        class="text-dark font-weight-bolder">Iniciar Sesion</a></p>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
@endsection