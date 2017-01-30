@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Administración</a>
                </li>
                <li><a href="{{ url('/admin/roles') }}">Roles</a>
                </li>
                <li>Alta Rol
                </li>
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
                        <li>
                            <a href="{{ url('/admin/recibos') }}">Recibos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9" data-animate="fadeInDown">
            <div class="box">
                <h1>Edición de {{ $rol->name }}</h1>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ url('/admin/roles/'.$rol->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $rol->name }}">
                    </div>
                    <div class="form-group">
                        <label for="estatus">Estatus</label>
                        @if ($rol->estatus == 0)
                            <select class="form-control" name="estatus" id="estatus">
                                <option value="0" selected>Inactivo</option>
                                <option value="1">Activo</option>
                            </select>
                        @else
                            <select class="form-control" name="estatus" id="estatus">
                                <option value="0">Inactivo</option>
                                <option value="1" selected>Activo</option>
                            </select>
                        @endif
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">
                            Editar Rol
                        </button>
                    </div>
                </form>
            </div>
        </div>
@endsection