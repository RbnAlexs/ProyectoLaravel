@extends('layouts.master')
@section('content')
    <style type="text/css">
        iframe{overflow-x: scroll; overflow-y: scroll }
    </style>
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Sistemas</a>
                </li>
                <li>HelpDesk</li>
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
                            <li class="active">
                                <a href="{{ url('/sistemas/helpdesk') }}">Help Desk</a>
                            </li>
                        </ul>
                    </div>
                    <div class="container">
                        <h1>HelpDesk</h1>
                        <iframe src="http://helpdeskfranslux.ddns.net/phd_2_12/user_request.php" width="100%" height="600" id="frameDemo"></iframe>
                    </div>

                    <div class="clearfix"></div>
                    <div class="divider"></div>
                </div><!-- end content -->
            </div><!-- end container -->
        </section>
    </div>
@endsection