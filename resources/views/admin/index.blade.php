@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Administración</a>
                </li>
                <li>@yield('seccion')</li>
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
                        <li>
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
                <h1>Administración</h1>
                <p>En este modulo podras realizar acciones de Administración</p>
            </div>
        </div>
@endsection