@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Sistemas</a>
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
                                <a href="{{ url('/sistemas/manuales') }}">Manuales</a>
                            </li>
                            <li>
                                <a href="{{ url('/sistemas/helpdesk') }}">Help Desk</a>
                        </ul>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <p>En esta sección podras consultar los manuales asi como el Help Desk</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                        <img src="{{ asset('images/corporativo-ws.jpg') }}" alt="" class="img-responsive">
                    </div>

                    <div class="clearfix"></div>
                    <div class="divider"></div>
                </div><!-- end content -->
            </div><!-- end container -->
        </section>
    </div>
@endsection