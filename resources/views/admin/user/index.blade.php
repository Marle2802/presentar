@extends('layouts.app')
@section('aside_menu')
@include('layouts.aside')
@endsection
@section('titulo_ventana', 'Usuarios')

@section('Contenido_app')


<div class="col-12 d-flex justify-content-end mb-4">
    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalUsuario"> Nuevo Usuario </button>
</div>

<div class="card shadow mb-4 col-12">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered dt-responsive nowrap" id="dataTable" width="100%"
                cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Estado</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Estado</th>
                        <th>Rol</th>
                        <th>Acciones</th>

                    </tr>
                </tfoot>
                <tbody>
                    
                   @foreach ($users as $user )
                   <tr>
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->document }} </td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->lastName }} </td>
                    <td> {{ $user->address }} </td>
                    <td> {{ $user->phone }} </td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->status ? 'Activo' : 'Inactivo' }} </td>
                    <td> {{ $user->getRoleNames()->first() ? $user->getRoleNames()->first() : 'No asignado' }}</td>
                    <td> 
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalUsuario"> Editar </button>
                          
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalUsuario"> Eliminar</button> 
                    </td>
                   </tr>
                       
                   @endforeach



                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="modalUsuario" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form action="{{ route('user.store', $user) }}" method="POST">
                @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Documento</label>
                <input type="number" class="form-control" id="exampleFormControlInput1"name="document">
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Apellido</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="lastName">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Direccion</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="address">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Telefono</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="phone">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Correo</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Contraseña</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Estado</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="status">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Rol</label>
                    <select name="role" id="">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

@endsection