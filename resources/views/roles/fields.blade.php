<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Rol:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Permissions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('permissions', 'Permisos:') !!}
    {!! Form::select('permissions', $permissionItems, null, 
        ['multiple' => 'multiple','class' => 'form-control custom-select',
        'name'=> 'permissions[]' ]) !!}
</div>
