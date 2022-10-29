@extends('layouts.app')

@section('content')
<div class="container" >
          <div class="carousel-caption">

          <div class="card">
                   

         <div class="p-0 mb-0  text-dark">

         <h5 class="card-header">#1BICIPOWER</h5>
            <h1 >Bienvenido
            {{ Auth::user()->name }}

            </h1>
              <p >Del lado izquierdo encontraras el menu de opciones  </p>
          
          </div>
        </div>
                </div>
                </div>

          
         
      </div>

@endsection
