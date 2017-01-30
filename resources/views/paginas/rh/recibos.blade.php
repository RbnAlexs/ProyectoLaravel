@extends('layouts.master')
@section('content')
    <style type="text/css">
        iframe{overflow-x: scroll; overflow-y: scroll }
    </style>
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Recursos Humanos</a>
                </li>
                <li>Recibos</li>
            </ul>

        </div>
        <section class="section1">
            <div class="container clearfix">
                <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
                    <div class="divider"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <ul class="nav nav-tabs nav-stacked">
                            <li class="active">
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
                    <div class="container">
                        <h1>Recibos</h1>
                        <iframe src="http://apps.rfacil.com/CONSULTANOMINA_FRANSLUX/Public/IniciaAutoFacturacion.aspx?ReturnUrl=%2fCONSULTANOMINA_FRANSLUX" width="100%" height="600" id="frameDemo"></iframe>
                    <!-- <table class="table table-responsive table-hover">
                    <thead>
                        <th class="table-text text-center">ID</th>
                        <th class="table-text text-center">Fecha del Recibo</th>
                        <th class="table-text text-center">Observaciones</th>
                        <th class="table-text text-center">Archivo(s)</th>
                        <th class="table-text text-center">Fecha de Carga</th>
                    </thead>
                    <tbody>
                    @foreach ($recibos as $recibo)
                        <tr>
                            <td class="table-text text-center">{{ $recibo->id }}</td>
                            <td class="table-text text-center">{{ $recibo->fechaRecibo }}</td>
                            <td class="table-text text-center">{{ $recibo->observacion }}</td>
                            <td class="table-text text-center">
                                @foreach($recibo->documentos as $documento)
                            <a href="{{ asset('archivos/recibos/'.$documento->ruta) }}" target="_blank" download>{{ $documento->ruta }}</a>
                                    </br>
                                @endforeach
                                </td>
                                <td class="table-text text-center">{{ $recibo->created_at }}</td>
                        </tr>

                    @endforeach
                            </tbody>
                        </table>-->
                    </div>

                    <div class="clearfix"></div>
                    <div class="divider"></div>
                </div><!-- end content -->
            </div><!-- end container -->
        </section>
    </div>
@endsection