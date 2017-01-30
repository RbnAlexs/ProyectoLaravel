@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Administración</a>
                </li>
                <li><a href="{{ url('/admin/recibos') }}">Recibos</a>
                </li>
                <li>Carga de Recibos
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
                        <li>
                            <a href="{{ url('/admin/usuarios') }}">Usuarios</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/roles') }}">Roles</a>
                        </li>
                        <li class="active">
                            <a href="{{ url('/admin/recibos') }}">Recibos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9" data-animate="fadeInDown">
            <div class="box">
                <h1>Carga de Recibos</h1>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ url('/admin/recibos') }}" id="form" enctype="multipart/form-data" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                        <h4>Detalle Factura</h4>
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <select class="usuarios form-control" name="usuario" id="usuario">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fechaRecibo">Fecha Recibo</label>
                            <input type="text" class="form-control calendario" name="fechaRecibo" id="fechaRecibo" value="<?php echo date("d/m/Y"); ?>">
                        </div>
                        <div class="form-group">
                            <label for="razon">Nota / Observación</label>
                            <input type="text" class="form-control" name="observacion" id="observacion">
                        </div>
                        <div class="form-group">
                            <label for="btn">&nbsp;</label>
                            <button type="button" name="btn" class="btn-md btn-success form-control" onclick="agregar()">Agregar</button>
                        </div>
                        <table class="table table-hover table-strip" id="tbl-documentos">
                            <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Fecha Recibo</th>
                                <th>Nota / Observación</th>
                                <th>Subir Documentos</th>
                                <th>Eliminar</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <hr>
                        <button type="submit" class="btn btn-success">Agregar Recibos</button>
                </form>
            </div>
        </div>
    </div>
    @section('javascript')
        <script type="text/javascript">
            function agregar(){
                var usuario = $("#usuario").val();
                var dataUsuario = $(".usuarios").select2('data');
                var idUsuario = dataUsuario[0].id;
                var textUsuario = dataUsuario[0].text;
                var fechaRecibo = $("#fechaRecibo").val();
                var observacion = $("#observacion").val();
                if(usuario == ''){
                    swal("Error", "El campo Usuario no debe ir vacio.", "error");
                    return false;
                }
                if(fechaRecibo == ''){
                    swal("Error", "El campo Fecha no debe ir vacio.", "error");
                    return false;
                }
                var html = '';
                html += '<tr>';
                html += '<td>'+textUsuario+'</td>';
                html += '<td>'+fechaRecibo+'</td>';
                html += '<td>'+observacion+'</td>';
                html += '<td style="display: none;">';
                html +='<input type="text" name="usuarios[]" value="'+idUsuario+'">';
                html +='<input type="text" name="fechasRecibo[]" value="'+fechaRecibo+'">';
                html +='<input type="text" name="observaciones[]" value="'+observacion+'">';
                html += '<td><input type="file" name="files_'+usuario+'[]" multiple></td>';
                html +='</td>';
                html += '<td><i class="material-icons text-danger" style="cursor: pointer;" onclick="eliminar(this);">Borrar</i></td>';
                html += '</tr>';
                $("#tbl-documentos > tbody").append(html);
                $("#observacion").val('');
            }
            function eliminar (a){
                $(a).closest("tr").remove();
            }
            $('.usuarios').select2({
                language: "es",
                tags: true,
                placeholder: "Buscar Usuario ...",
                ajax: {
                    url: "{{ url('/usuarios/combo') }}",
                    type: 'POST',
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            accion: 'codigo',
                            term: params.term
                        };
                    },
                    processResults: function (data, params) {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            })
                        };
                    },
                },
                escapeMarkup: function (markup) { return markup; }
            });
            document.querySelector('#form').addEventListener('submit', function(e) {
                var form = this;
                var countTblDocumentos = $("#tbl-documentos tbody tr").length;
                var htmlMsj = '';
                var banderaMsj = 0;
                e.preventDefault();
                if(countTblDocumentos > 0){
                    $("input[type=file]").each(function(obj) {
                        if($(this).val() == ''){
                            console.log(countTblDocumentos);
                            htmlMsj += "El registro en la posición No."+(obj+1)+" debe incluir documentos. \n";
                            banderaMsj = 1;
                        }
                    });
                }
                if(banderaMsj == 1){
                    swal("Cancelado", htmlMsj, "error");
                    return false;
                }
                swal({
                    title: "Estas Seguro?",
                    text: "Debes asegurarte que la información captura es la correcta.",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Continuar!',
                    cancelButtonText: "Cancelar!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        form.submit();
                    } else {
                        swal("Cancelado", "Verifica la información :D", "error");
                    }
                });
            });
        </script>
    @endsection
@endsection