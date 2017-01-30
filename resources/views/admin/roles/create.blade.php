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
                <h1>Alta Rol</h1>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ url('/admin/roles') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">
                            Agregar Rol
                        </button>
                    </div>

                </form>
            </div>
        </div>
@endsection