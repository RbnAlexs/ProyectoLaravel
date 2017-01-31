<!DOCTYPE html>
<!-- PLANTILLA GENERAL -->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Franslux">
        <meta name="author" content="Hackdracko">
        <meta name="keywords" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Intranet - Franslux</title>
        <meta name="keywords" content="">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
        <link rel="stylesheet" href="{{ asset('layerslider/css/layerslider.css') }}" type="text/css">
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('switcher/css/dark.css') }}" title="dark" media="all" />
        <script>document.documentElement.className = document.documentElement.className.replace(/(\s|^)no-js(\s|$)/, '$1js$2');</script>
        <script src="{{ asset('js/modernizr.js') }}"></script>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    </head>
    <body>
        <div class="topbar clearfix">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-12 text-left">
                    <div class="social_buttons"></div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 social_buttons text-right">
                    Bienvenido {{ Auth::user()->name }} | {{ Auth::user()->username }}
                </div>
                <div class="col-md-offset-6 col-lg-6 col-md-6 col-sm-12 text-right social_buttons">
                    <div class="col-md-2">
                        <a href="http://cepe.com.mx/franslux/mi-cuenta/" target="_blank">Tienda</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="{{ url('/admin') }}">Administración</a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ url('/logout') }}">Logout</a>
                    </div>
                </div>
            </div><!-- end container -->
        </div>
        <header class="header">
            <div class="container">
                <div class="site-header clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-12 title-area text-right">
                        <div class="site-title" id="title">
                            <a href="/" title="">
                                <img height="65px" src="{{ url('images/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div><!-- title area -->
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse navbar-ex1-collapse container">
                                <ul class="nav navbar-nav">
                                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Identidad Corporativa</a>
                                    </li>
                                    <li class="{{ Request::is('politicas') ? 'active' : '' }}"><a href="/politicas">Politicas y Procedimientos</a>
                                    </li>
                                    <li class="{{ Request::is('recursoshumanos') || Request::is('recursoshumanos/recibos') || Request::is('recursoshumanos/vacaciones') ? 'active' : '' }}"><a href="/recursoshumanos">RH +</a>
                                    </li>
                                    <li class="{{ Request::is('sistemas') ? 'active' : '' }}"><a href="/sistemas">Sistemas</a>
                                    </li>
                                    <li class="{{ Request::is('comunicacion') ? 'active' : '' }}"><a href="/comunicacion">Contáctanos</a>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div><!-- title area -->
                </div><!-- site header -->
            </div><!-- end container -->
        </header>
        <div id="content">
            <!-- YIELD ('CONTENIDO') VA A IR CAMBIANDO CONFORME EL CONTENIDO A MOSTRAR EN CADA SECCIÓN-->
            @yield('content')
                <div class="modal fade" id="comunicado" tabindex="-1" role="dialog" aria-labelledby="comunicadoLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="comunicadoLabel">Comunicado Importante</h4>
                            </div>
                            <div class="modal-body">
                                <b>
                                Este jueves y viernes, recibiremos la visita de Too Faced; por lo
                                que es requerido que los colaboradores de BT 119, vistan de manera
                                formal.
                                    <img src="{{asset('images/Paris Hilton comunicado.jpg')}}">
                                </b>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <footer class="footer">

            <div class="copyrights">
                <div class="container">
                    <div class="col-lg-6 col-md-6 col-sm-12 columns">
                        <p>Copyright © 2016 - All right reserved.
                            <br>
                            Contacto: sistemas@franslux.com info@franslux.com +52 55763200 , Boulevard Toluca No 119 Col San Andrés Atoto, Naucalpan Edo de Mex.
                        </p>
                    </div><!-- end widget -->
                    <div class="col-lg-6 col-md-6 col-sm-12 columns text-right">
                        <div class="footer-menu right">
                            <ul class="menu">
                                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Identidad Coorporativa</a>
                                </li>
                                <li class="{{ Request::is('politicas') ? 'active' : '' }}"><a href="/politicas">Politicas y Procedimientos</a>
                                </li>
                                <li class="{{ Request::is('comunicacion') ? 'active' : '' }}"><a href="/comunicacion">Comunicación a la fuerza de ventas</a>
                                </li>
                                <li class="{{ Request::is('recursoshumanos') || Request::is('recursoshumanos/recibos') || Request::is('recursoshumanos/vacaciones') ? 'active' : '' }}"><a href="/recursoshumanos">RH +</a>
                                </li>
                                <li class="{{ Request::is('sistemas') ? 'active' : '' }}"><a href="/sistemas">Sistemas</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- end large-6 -->
                </div><!-- end container -->
            </div><!-- end copyrights -->
        </footer>
        <div class="dmtop">Scroll to Top</div>
   
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.unveilEffects.js') }}"></script>
        <script src="{{ asset('js/retina-1.1.0.js') }}"></script>
        <script src="{{ asset('js/jquery.hoverdir.js') }}"></script>
        <script src="{{ asset('js/hovermenu.js') }}"></script>
        <script src="{{ asset('js/jquery.hoverex.min.js') }}"></script>
        <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
        <script src="{{ asset('js/jquery.jigowatt.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <!-- LayerSlider script files -->
        <script src="{{ asset('layerslider/js/greensock.js') }}" type="text/javascript"></script>
        <script src="{{ asset('layerslider/js/layerslider.transitions.js') }}" type="text/javascript"></script>
        <script src="{{ asset('layerslider/js/layerslider.kreaturamedia.jquery.js') }}" type="text/javascript"></script>
        <!-- Initializing the slider -->
        <script type="text/javascript">
            jQuery("#layerslider").layerSlider({
                pauseOnHover: false,
                autoPlayVideos: false,
                responsive: false,
                responsiveUnder: 1280,
                layersContainer: 1280,
                skin: 'v5',
                skinsPath: "{{ asset('layerslider/skins/')}}"
            });
        </script>

        <script src="{{ asset('js/jquery.animate-enhanced.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
        <script type="text/javascript">
            $('.chart').easyPieChart({
                easing: 'easeOutBounce',
                size : 200,
                animate : 2000,
                lineWidth : 10,
                lineCap : 'square',
                lineWidth : 19,
                barColor : false,
                trackColor : '#F5F5F5',
                scaleColor : false,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent)+'%');
                }
            });
        </script>

        <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
        <script type="text/javascript">
            (function($) {
                "use strict";
                var $container = $('.portfolio'),
                        $items = $container.find('.portfolio-item'),
                        portfolioLayout = 'fitRows';

                if( $container.hasClass('portfolio-centered') ) {
                    portfolioLayout = 'masonry';
                }

                $container.isotope({
                    filter: '*',
                    animationEngine: 'best-available',
                    layoutMode: portfolioLayout,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    },
                    masonry: {
                    }
                }, refreshWaypoints());

                function refreshWaypoints() {
                    setTimeout(function() {
                    }, 1000);
                }

                $('nav.portfolio-filter ul a').on('click', function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector }, refreshWaypoints());
                    $('nav.portfolio-filter ul a').removeClass('active');
                    $(this).addClass('active');
                    return false;
                });

                function getColumnNumber() {
                    var winWidth = $(window).width(),
                            columnNumber = 1;

                    if (winWidth > 1200) {
                        columnNumber = 5;
                    } else if (winWidth > 950) {
                        columnNumber = 4;
                    } else if (winWidth > 600) {
                        columnNumber = 3;
                    } else if (winWidth > 400) {
                        columnNumber = 2;
                    } else if (winWidth > 250) {
                        columnNumber = 1;
                    }
                    return columnNumber;
                }

                function setColumns() {
                    var winWidth = $(window).width(),
                            columnNumber = getColumnNumber(),
                            itemWidth = Math.floor(winWidth / columnNumber);

                    $container.find('.portfolio-item').each(function() {
                        $(this).css( {
                            width : itemWidth + 'px'
                        });
                    });
                }

                function setPortfolio() {
                    setColumns();
                    $container.isotope('reLayout');
                }

                $container.imagesLoaded(function () {
                    setPortfolio();
                });

                $(window).on('resize', function () {
                    setPortfolio();
                });
            })(jQuery);
        </script>

        <script src="{{ asset('js/jquery.mb.YTPlayer.js') }}"></script>
        <script type="text/javascript">
            $(function(){
                $(".player").mb_YTPlayer();
            });
        </script>

        <!-- Demo Switcher JS -->
        <script type="text/javascript" src="{{ asset('switcher/js/fswit.js') }}"></script>
        <script type="text/javascript" src="{{ asset('switcher/js/jquery.backstretch.js') }}"></script>

        <script src="{{ asset('bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js') }}"></script>
        <!-- SELECT2 PLUGIN -->
        <script src="{{ asset('select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('select2/js/i18n/es.js') }}"></script>
        <!-- SWEETALERT PLUGIN -->
        <script src="{{ asset('bootstrap-sweetalert/js/sweetalert.min.js') }}"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script type="text/javascript">
            $('.calendario').datepicker({
                format: "dd/mm/yyyy",
                language: "es",
                autoclose: true
            });
            var token = $("#_token").val();
        </script>
        @yield('javascript')

    </body>
</html>