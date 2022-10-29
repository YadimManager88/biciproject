@extends('layouts.app')


@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Productos</h1>
                </div>
         


                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('productos.create') }}">
                        Añadir nuevo
                        
                    </a>
                  
                </div>
              
            </div>
    
        </div>
        <form class="form-inline" type="get" action="{{url('/search')}}">
    <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0"   type="submit">Search</button>
</form>

    </section>
    <nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand"></a>
  
</nav>





    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix">

           
        </div>


        <div class="card">
            <div class="card-body p-0">
                @include('productos.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection




