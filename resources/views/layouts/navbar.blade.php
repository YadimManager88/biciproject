





<div class="container position-sticky z-index-sticky top-0" >
    <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            <nav
                class="navbar navbar-expand-lg bg-light blur border-radius-lg top-0 z-index-1 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                <div class="container-fluid">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ url('/') }}">
                    <img src="https://cdn-icons-png.flaticon.com/512/3600/3600996.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                                1BICI
                                </a>

                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                    href="{{ route('home') }}">
                                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                    Tablero
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2 d-flex align-items-center me-2 active" href="{{ route('register') }}">
                                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                    Registrarse
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2 d-flex align-items-center me-2 active" href="{{ route('login') }}">
                                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                    Iniciar Sesion
                                </a>
                            </li>
                        </ul>
                    
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>
