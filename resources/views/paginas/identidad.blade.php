@extends('layouts.master')
    @section('content')
        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Identidad Coorporativa</a>
                </li>
                <li>Misión/Visión</li>
            </ul>

        </div>
        <section class="slideshow-wrapper">
            <div id="slider-wrapper">
                <div id="layerslider" style="width:100%;height:580px;">
                    <div class="ls-slide" data-ls="slidedelay:8000;transition2d:75,79;">
                        <img src="demos/mbg1.jpg" class="ls-bg" alt="Slide background"/>

                    </div><!-- end first slide -->
                </div><!-- layer slider -->
            </div><!-- slider wrapper -->
        </section><!-- end slideshow-wrapper -->

        <section class="section2">
            <div class="message text-center">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <img src="{{ asset('images/ventas1.jpg') }}" alt="" class="img-responsive">
                </div><!-- large-3 -->
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <h2 class="big-title">Nuestra Misión</h2>
                    <p class="small-title">Proveer marcas que generen valor para la vida de los consumidores. Ellos nos recompensan con liderazgo en ventas y utilidades, llevando con esto a que nuestra gente, y comunidades prosperen.</p>
                </div>
            </div><!-- end message -->
        </section><!-- end section2 -->
        <section class="transparent clearfix">
            <div class="transparent-wrap text-center">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <h2 class="big-title" style="color: white">Nuestra Visión</h2>
                    <p class="small-title" style="color: white">Ser creadores de marcas innovadoras, y un sinónimo en la industria de elegancia y responsabilidad ética</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <img src="{{ asset('images/vision.jpg') }}" alt="" class="img-responsive">
                </div><!-- large-3 -->
            </div><!-- end message -->
        </section><!-- end section2 -->
        <section class="section2">
            <div class="message text-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="big-title">Código de Conducta Ética</h2>
                    <p class="small-title">Nuestro Código de Conducta Ética, busca dar lineamiento a los miembros del Consejo de Administración, los
                        directivos, colaboradores y personal que desempeña algún cargo dentro de FRANSLUX, para que cumplan de
                        manera obligatoria con todas las leyes aplicables, reglas y reglamentos así como con las políticas y estándares de
                        calidad de FRANSLUX. La observancia de éste Código de Conducta Ética es también obligatoria para las empresas
                        que prestan servicios a FRANSLUX, así como a proveedores.
                    <!--<p class="text-muted text-center">Política de Autos Utilitarios <a href="{{ asset('archivos/empresa/POLITICA DE AUTOS UTILITARIOS.pdf') }}" download>Descargar</a>.</p>
                    <p class="text-muted text-center">Política de Código de Conducta Ética <a href="{{ asset('archivos/empresa/PoliticadeCodigodeConductaEtica.pdf') }}" download>Descargar</a>.</p>-->

                <!-- <embed src="{{ asset('archivos/empresa/PoliticadeCodigodeConductaEtica.pdf') }}" width="800px" height="800px" /> -->
                    </p>
                    <p>Si deseas enviar una denuncia al código de ética, envía un formulario <a href="/comunicacion">Contáctanos</a></p>
                </div>
            </div><!-- end message -->
        </section><!-- end section2 -->
        <!-- <section class="transparent clearfix">
            <div class="transparent-wrap">
                <div class="container">
                    <h1>Denuncias al código de ética</h1>

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstname">Nombre del empleado</label>
                                    <input type="text" class="form-control" id="firstname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname">Email</label>
                                    <input type="text" class="form-control" id="lastname">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="subject">Asunto</label>
                                    <input type="text" class="form-control" id="subject">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message">Mensaje</label>
                                    <textarea id="message" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar Mensaje</button>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>-->
    @endsection
    @section('javascript')
        <script type="text/javascript">
            $(window).load(function(){
                $('#comunicado').modal('show');
            });
        </script>
    @endsection