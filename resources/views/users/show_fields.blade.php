<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Correo:') !!}
    <p>{{ $user->email }}</p>
</div>


<!-- Role Field -->
<div class="col-sm-12">
    {!! Form::label('role', 'Rol:') !!}
    <p>{{implode(" ", $user->getRoleNames()->toArray()) }}</p>
</div>

<!-- Role Field -->
<div class="col-sm-12">
    {!! Form::label('email_verified_at', 'Confirmacion de Correo:') !!}
    <p>{{ $user->email_verified_at }}</p>
</div>


<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $user->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{{ $user->updated_at }}</p>
</div>

