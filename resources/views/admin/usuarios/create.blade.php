@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Administración</a>
                </li>
                <li><a href="{{ url('/admin/usuarios') }}">Usuarios</a>
                </li>
                <li>Alta Usuario
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
                        <li class="active">
                            <a href="{{ url('/admin/usuarios') }}">Usuarios</a>
                        </li>
                        <li>
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
                <h1>Alta Usuario</h1>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ url('/admin/usuarios') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="">
                    </div>
                    <div class="form-group">
                        <label for="username">Usuario</label>
                        <input type="text" class="form-control" name="username" id="username" value="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="">
                    </div>
                    <div class="form-group">
                        <label for="rpassword">Repite el Password</label>
                        <input type="password" class="form-control" name="rpassword" id="rpassword">
                    </div>
                    <hr>
                    <div class="text-center">
                        <h3>Asignación de Roles</h3>
                    </div>
                    <div>
                        <table class="table table-strip table-hover">
                            <thead>
                            <tr>
                                <th>Descripción</th>
                                <th>Asignar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $rol)
                                <tr>
                                    <td style="display: none;">
                                        {{ $rol->id }}
                                        <input type="text" name="roles[{{ $rol->id }}]" id="rol_{{ $rol->id }}" value="0">
                                    </td>
                                    <td>
                                        {{ $rol->name }}
                                    </td>
                                    <td>
                                        <i class="material-icons text-danger agregaRol" style="cursor: pointer;" id="asignarRol_{{ $rol->id }}" data-value="0" onclick="asignarRol({{ $rol->id }});">cancel</i>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">
                            Agregar Usuario
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function asignarBodega(id){
            var valor = $("#asignarBodega_"+id).data("value");
            if (valor == 0){
                $("#asignarBodega_"+id).removeClass("text-danger");
                $("#asignarBodega_"+id).addClass("text-success");
                $("#asignarBodega_"+id).text("check_circle");
                $("#asignarBodega_"+id).data("value", 1);
                $("#bodega_"+id).val(1);
            }else{
                $("#asignarBodega_"+id).removeClass("text-success");
                $("#asignarBodega_"+id).addClass("text-danger");
                $("#asignarBodega_"+id).text("cancel");
                $("#asignarBodega_"+id).data("value", 0);
                $("#bodega_"+id).val(0);
            }
        }
        function asignarRol(id){
            var valor = $("#asignarRol_"+id).data("value");
            if (valor == 0){
                $("#asignarRol_"+id).removeClass("text-danger");
                $("#asignarRol_"+id).addClass("text-success");
                $("#asignarRol_"+id).text("check_circle");
                $("#asignarRol_"+id).data("value", 1);
                $("#rol_"+id).val(1);
            }else{
                $("#asignarRol_"+id).removeClass("text-success");
                $("#asignarRol_"+id).addClass("text-danger");
                $("#asignarRol_"+id).text("cancel");
                $("#asignarRol_"+id).data("value", 0);
                $("#rol_"+id).val(0);
            }
        }
        function asignarPermiso(id){
            var valor = $("#asignarPermiso_"+id).data("value");
            if (valor == 0){
                $("#asignarPermiso_"+id).removeClass("text-danger");
                $("#asignarPermiso_"+id).addClass("text-success");
                $("#asignarPermiso_"+id).text("check_circle");
                $("#asignarPermiso_"+id).data("value", 1);
                $("#permiso_"+id).val(1);
            }else{
                $("#asignarPermiso_"+id).removeClass("text-success");
                $("#asignarPermiso_"+id).addClass("text-danger");
                $("#asignarPermiso_"+id).text("cancel");
                $("#asignarPermiso_"+id).data("value", 0);
                $("#permiso_"+id).val(0);
            }
        }
    </script>
@endsection