@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Sistemas</a>
                </li>
                <li>Manuales</li>
            </ul>

        </div>
        <section class="section1">
            <div class="container clearfix">
                <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
                    <div class="divider"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <ul class="nav nav-tabs nav-stacked">
                            <li class="active">
                                <a href="{{ url('/sistemas/manuales') }}">Manuales</a>
                            </li>
                            <li>
                                <a href="{{ url('/sistemas/helpdesk') }}">Help Desk</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="col-md-9 text-center">
                            <h2 class="big-title">Manuales de Sistemas</h2>
                        </div>
                        <div class="col-md-9">
                            <li><p class="text-muted text-left">ACCESO A VPN DE USUARIOS <a href="{{ asset('archivos/manuales/Acceso a VPN para usuarios.docx') }}" download>Descargar</a>.</p></li>
                            <li><p class="text-muted text-left">CORREO FRANSLUX <a href="{{ asset('archivos/manuales/Correo Franslux.com.docx') }}" download>Descargar</a>.</p></li>
                            <li><p class="text-muted text-left">HELP DESK <a href="{{ asset('archivos/manuales/HelpDesk.pdf') }}" download>Descargar</a>.</p></li>
                            <li><p class="text-muted text-left">Comprobante de Entrega <a href="{{ asset('archivos/manuales/R-SI63-005 Rev. 01 Comprobante de Entrega.docx') }}" download>Descargar</a>.</p></li>
                            <li><p class="text-muted text-left">Entrega de equipo <a href="{{ asset('archivos/manuales/R-SI63-006 Rev 01 Entrega de equipo.xlsx') }}" download>Descargar</a>.</p></li>
                            <li><p class="text-muted text-left">Carta Responsiva Equipos <a href="{{ asset('archivos/manuales/R-SI63-007 Rev 01 Carta Responsiva Equipos.docx') }}" download>Descargar</a>.</p></li>
                            <li><p class="text-muted text-left">SALIDA DEL EQUIPO <a href="{{ asset('archivos/manuales/R-SI63-008 Rev. 01 SALIDA DEL EQUIPO.docx') }}" download>Descargar</a>.</p></li>
                            <li><p class="text-muted text-left">CARTA RESPONSIVA CELULAR <a href="{{ asset('archivos/manuales/R-SI63-011-Rev. 01 CARTA RESPONSIVA CELULAR.docx') }}" download>Descargar</a>.</p></li>
                            <li><p class="text-muted text-left">SOLICITUD DE EQUIPO <a href="{{ asset('archivos/manuales/Solicitud de Equipo.pdf') }}" download>Descargar</a>.</p></li>
                        </div>
                        <div class="col-md-9">
                            <img src="{{ asset('images/corporativo-ws.jpg') }}" alt="" class="img-responsive">
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="divider"></div>
                </div><!-- end content -->
            </div><!-- end container -->
        </section>
    </div>

    <!--<section class="section2">
        <div class="message text-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-md-12">
                    <h2 class="big-title">Manuales de Sistemas</h2>
                </div>
                <div class="col-md-offset-2 col-md-4">
                    <li><p class="text-muted text-left">ACCESO A VPN DE USUARIOS <a href="{{ asset('archivos/manuales/Acceso a VPN para usuarios.docx') }}" download>Descargar</a>.</p></li>
                    <li><p class="text-muted text-left">CORREO FRANSLUX <a href="{{ asset('archivos/manuales/Correo Franslux.com.docx') }}" download>Descargar</a>.</p></li>
                    <li><p class="text-muted text-left">HELP DESK <a href="{{ asset('archivos/manuales/HelpDesk.pdf') }}" download>Descargar</a>.</p></li>
                    <li><p class="text-muted text-left">R-SI63-005 Rev. 01 Comprobante de Entrega <a href="{{ asset('archivos/manuales/R-SI63-005 Rev. 01 Comprobante de Entrega.docx') }}" download>Descargar</a>.</p></li>
                    <li><p class="text-muted text-left">R-SI63-006 Rev 01 Entrega de equipo <a href="{{ asset('archivos/manuales/R-SI63-006 Rev 01 Entrega de equipo.xlsx') }}" download>Descargar</a>.</p></li>
                    <li><p class="text-muted text-left">R-SI63-007 Rev 01 Carta Responsiva Equipos <a href="{{ asset('archivos/manuales/R-SI63-007 Rev 01 Carta Responsiva Equipos.docx') }}" download>Descargar</a>.</p></li>
                    <li><p class="text-muted text-left">R-SI63-008 Rev. 01 SALIDA DEL EQUIPO <a href="{{ asset('archivos/manuales/R-SI63-008 Rev. 01 SALIDA DEL EQUIPO.docx') }}" download>Descargar</a>.</p></li>
                    <li><p class="text-muted text-left">R-SI63-011-Rev. 01 CARTA RESPONSIVA CELULAR <a href="{{ asset('archivos/manuales/R-SI63-011-Rev. 01 CARTA RESPONSIVA CELULAR.docx') }}" download>Descargar</a>.</p></li>
                    <li><p class="text-muted text-left">SOLICITUD DE EQUIPO <a href="{{ asset('archivos/manuales/Solicitud de Equipo.pdf') }}" download>Descargar</a>.</p></li>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/corporativo-ws.jpg') }}" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    <section class="transparent clearfix">
        <div class="transparent-wrap">
            <h1>HELP DESK</h1>
            <iframe src="http://helpdeskfranslux.ddns.net/phd_2_12/user_request.php" width="100%" height="600" id="frameDemo"></iframe>
        </div>
    </section>-->
@endsection