@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Citas</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($citas, ['route' => ['citas.update', $citas->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    
                    @include('citas.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Modificar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('citas.index') }}" class="btn btn-danger">Cancelar</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
