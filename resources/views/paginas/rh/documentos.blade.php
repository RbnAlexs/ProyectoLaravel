@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Recursos Humanos</a>
                </li>
                <li>@yield('seccion')</li>
            </ul>

        </div>
        <section class="section1">
            <div class="container clearfix">
                <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
                    <div class="divider"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <ul class="nav nav-tabs nav-stacked">
                            <li>
                                <a href="{{ url('/recursoshumanos/recibos') }}">Recibos</a>
                            </li>
                            <li>
                                <a href="{{ url('/recursoshumanos/documentos') }}">Documentos de Interés</a>
                            </li>
                        <!--<li>
                        <a href="{{ url('/recursoshumanos/vacaciones') }}">Vacaciones</a>
                    </li>-->
                        </ul>
                    </div>
                    <h1>Documentos de Interés</h1>
                    <hr>
                    <div class="container col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p class="text-muted text-left">Descripción de Puestos <a href="{{ asset('archivos/empresa/DESCRIPCION DE PUESTOS.doc') }}" download>Descargar</a>.</p>
                        <p class="text-muted text-left">Formato de Aceptación SGMM <a href="{{ asset('archivos/empresa/FORMATO ACEPTACION SGMM.doc') }}" download>Descargar</a>.</p>
                        <p class="text-muted text-left">Formatos RRHH <a href="{{ asset('archivos/empresa/FORMATOS RRHH.xlsm') }}" download>Descargar</a>.</p>
                        <p class="text-muted text-left">Seguro de Vida <a href="{{ asset('archivos/empresa/SEGURO DE VIDA.pdf') }}" download>Descargar</a>.</p>
                    </div>
                    <div class="container col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <img src="{{ asset('images/oficina_corporativa.jpg') }}" alt="" class="img-responsive">
                    </div>

                    <div class="clearfix"></div>
                    <div class="divider"></div>
                </div><!-- end content -->
            </div><!-- end container -->
        </section>
    </div>
@endsection