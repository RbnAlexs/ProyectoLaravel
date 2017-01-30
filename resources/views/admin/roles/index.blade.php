@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Administración</a>
                </li>
                <li>Roles</li>
            </ul>

        </div>
        <div class="col-md-3">
            <div class="panel panel-default sidebar-menu">

                <div class="panel-heading">
                    <h3 class="panel-title">Menu Administración</h3>
                </div>

                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="{{ url('/admin/usuarios') }}">Usuarios</a>
                        </li>
                        <li class="active">
                            <a href="{{ url('/admin/roles') }}">Roles</a>
                        </li>
                        <!--<li>
                            <a href="{{ url('/admin/recibos') }}">Recibos</a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9" data-animate="fadeInDown">
            <div class="box" id="contact">
                @if (Session::has('message'))
                    <div class="alert alert-{{ Session::get('message')[0] }} alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ Session::get('message')[1] }}
                    </div>
                @endif
                <h1>Administración de Roles</h1>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Fecha Registro</th>
                        <th class="text-center">Fecha Actualización</th>
                        <th class="text-center">Estatus</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($roles as $rol)
                        <tr>
                            <td class="table-text text-center">{{ $rol->name }}</td>
                            <td class="table-text text-center">{{ $rol->created_at }}</td>
                            <td class="table-text text-center">{{ $rol->updated_at }}</td>
                            @if ($rol->estatus == 1)
                                <td class="table-text text-center">
                                    <span class="text-success">Activo</span>
                                </td>
                            @else
                                <td class="table-text text-center">
                                    <span class="text-danger">Inactivo</span>
                                </td>
                            @endif
                            <td class="table-text text-center">
                                <a class="glyphicon glyphicon-pencil" href="{{ url('/admin/roles/'.$rol->id.'/edit') }}" aria-hidden="true">Editar</a>
                                <a class="glyphicon glyphicon-remove" href="{{ url('/admin/roles/logicaldelete/'.$rol->id) }}" aria-hidden="true">Eliminar</a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination">
                        @if ($roles->previousPageUrl())
                            <li class="page-item">
                                <a class="page-link" href="{{ $roles->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                        @endif
                        @for ($i = 1; $i <= $roles->lastPage(); $i++)
                            @if ($roles->currentPage() == $i )
                                <li class="page-item active">
                                    <a class="page-link" href="#">{{ $roles->currentPage() }}
                                    </a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $roles->url($i) }}">
                                        {{ $i }}
                                    </a>
                                </li>
                            @endif
                        @endfor
                        @if ($roles->nextPageUrl())
                            <li class="page-item">
                                <a class="page-link" href="{{ $roles->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
                <hr>
                <div class="text-center">
                    <p><a class="btn btn-block btn-success" href="{{ url('/admin/roles/create') }}">Agregar Nuevo Rol</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection