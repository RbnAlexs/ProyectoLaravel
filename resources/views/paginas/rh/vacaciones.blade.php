@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Recursos Humanos</a>
                </li>
                <li>Vacaciones</li>
            </ul>

        </div>
        <div class="col-md-3">
            <div class="panel panel-default sidebar-menu">

                <div class="panel-heading">
                    <h3 class="panel-title">Menu</h3>
                </div>

                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="/recursoshumanos/recibos">Recibos</a>
                        </li>
                        <li>
                            <a href="/recursoshumanos/vacaciones">Vacaciones</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9" data-animate="fadeInDown">
            <div class="box" id="contact">
                <h1>Vacaciones</h1>
                <table class="table table-responsive table-hover">
                    <thead>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Archivo</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
@endsection