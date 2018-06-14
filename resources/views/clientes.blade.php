@extends('layout.layout')
@section('title','Clientes')
@section('content')


<br>
    <div class="row">
        <div class="container-fluid col-md-10 col-md-offset-1">
            <!-- Custom Tabs -->
            <div class="card">
                <div class="card-header d-flex p-0">
                    <h3 class="card-title p-3">Clientes</h3>
                    <ul class="nav nav-pills ml-auto p-2">
                        <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Nuevo Cliente</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Clientes Guardados</a></li>

                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">

                            <!-- general form elements -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Información del cliente </h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" placeholder="Introducir nombre.">
                                        </div>
                                            <div class="col-md-6">
                                                <label for="telefono">Telefono</label>
                                                <input type="text" class="form-control" id="telefono" placeholder="Introducir telefono.">
                                            </div>

                                        </div>
                                        <br>


                                        <div class="card bg-light text-dark">
                                            <div class="card-body">
                                                <h4>Dirección</h4>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <label for="Calle">Calle</label>
                                                    <input type="text" class="form-control" id="calle" placeholder="Introducir calle.">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="numero">Número</label>
                                                    <input type="text" class="form-control" id="numero" placeholder="Introducir número.">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="codigo postal">Codigo Postal</label>
                                                    <input type="text" class="form-control" id="cp" placeholder="Introducir C.P.">
                                                </div>
                                                    <div class="col-md-6">
                                                        <label for="colonia">Colonia</label>
                                                        <input type="text" class="form-control" id="colonia" placeholder="Introducir colonia.">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="localidad">Localidad</label>
                                                        <input type="text" class="form-control" id="localidad" placeholder="Introducir localidad.">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="ciudad">Ciudad</label>
                                                        <input type="text" class="form-control" id="ciudad" placeholder="Introducir ciudad.">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="estado">Estado</label>
                                                        <input type="text" class="form-control" id="estado" placeholder="Introducir Estado.">
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <label>Nivel Precio:&nbsp;&nbsp;</label>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                    Nivel
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item">1</a>
                                                    <a class="dropdown-item">2</a>
                                                    <a class="dropdown-item">3</a>
                                                    <a class="dropdown-item">4</a>
                                                    <a class="dropdown-item">5</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info float-right" >Guardar</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <!-- Main content -->
                            <section class="content">
                                <div class="row">
                                    <div class="col-12">


                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Clientes Guardados</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="clientes" class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Rendering engine</th>
                                                        <th>Browser</th>
                                                        <th>Platform(s)</th>
                                                        <th>Engine version</th>
                                                        <th>CSS grade</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>Internet
                                                            Explorer 4.0
                                                        </td>
                                                        <td>Win 95+</td>
                                                        <td> 4</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>Internet
                                                            Explorer 5.0
                                                        </td>
                                                        <td>Win 95+</td>
                                                        <td>5</td>
                                                        <td>C</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>Internet
                                                            Explorer 5.5
                                                        </td>
                                                        <td>Win 95+</td>
                                                        <td>5.5</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>Internet
                                                            Explorer 6
                                                        </td>
                                                        <td>Win 98+</td>
                                                        <td>6</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 7</td>
                                                        <td>Win XP SP2+</td>
                                                        <td>7</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>AOL browser (AOL desktop)</td>
                                                        <td>Win XP</td>
                                                        <td>6</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Firefox 1.0</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Firefox 1.5</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.8</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Firefox 2.0</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.8</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Firefox 3.0</td>
                                                        <td>Win 2k+ / OSX.3+</td>
                                                        <td>1.9</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Camino 1.0</td>
                                                        <td>OSX.2+</td>
                                                        <td>1.8</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Camino 1.5</td>
                                                        <td>OSX.3+</td>
                                                        <td>1.8</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Netscape 7.2</td>
                                                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Netscape Browser 8</td>
                                                        <td>Win 98SE+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Netscape Navigator 9</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.8</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.0</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td>1</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.1</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td>1.1</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.2</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td>1.2</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.3</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td>1.3</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.4</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td>1.4</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.5</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td>1.5</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.6</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td>1.6</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.7</td>
                                                        <td>Win 98+ / OSX.1+</td>
                                                        <td>1.7</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Mozilla 1.8</td>
                                                        <td>Win 98+ / OSX.1+</td>
                                                        <td>1.8</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Seamonkey 1.1</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>1.8</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gecko</td>
                                                        <td>Epiphany 2.20</td>
                                                        <td>Gnome</td>
                                                        <td>1.8</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Webkit</td>
                                                        <td>Safari 1.2</td>
                                                        <td>OSX.3</td>
                                                        <td>125.5</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Webkit</td>
                                                        <td>Safari 1.3</td>
                                                        <td>OSX.3</td>
                                                        <td>312.8</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Webkit</td>
                                                        <td>Safari 2.0</td>
                                                        <td>OSX.4+</td>
                                                        <td>419.3</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Webkit</td>
                                                        <td>Safari 3.0</td>
                                                        <td>OSX.4+</td>
                                                        <td>522.1</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Webkit</td>
                                                        <td>OmniWeb 5.5</td>
                                                        <td>OSX.4+</td>
                                                        <td>420</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Webkit</td>
                                                        <td>iPod Touch / iPhone</td>
                                                        <td>iPod</td>
                                                        <td>420.1</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Webkit</td>
                                                        <td>S60</td>
                                                        <td>S60</td>
                                                        <td>413</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Presto</td>
                                                        <td>Opera 7.0</td>
                                                        <td>Win 95+ / OSX.1+</td>
                                                        <td>-</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Presto</td>
                                                        <td>Opera 7.5</td>
                                                        <td>Win 95+ / OSX.2+</td>
                                                        <td>-</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Presto</td>
                                                        <td>Opera 8.0</td>
                                                        <td>Win 95+ / OSX.2+</td>
                                                        <td>-</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Presto</td>
                                                        <td>Opera 8.5</td>
                                                        <td>Win 95+ / OSX.2+</td>
                                                        <td>-</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Presto</td>
                                                        <td>Opera 9.0</td>
                                                        <td>Win 95+ / OSX.3+</td>
                                                        <td>-</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Presto</td>
                                                        <td>Opera 9.2</td>
                                                        <td>Win 88+ / OSX.3+</td>
                                                        <td>-</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Presto</td>
                                                        <td>Opera 9.5</td>
                                                        <td>Win 88+ / OSX.3+</td>
                                                        <td>-</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Presto</td>
                                                        <td>Opera for Wii</td>
                                                        <td>Wii</td>
                                                        <td>-</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Presto</td>
                                                        <td>Nokia N800</td>
                                                        <td>N800</td>
                                                        <td>-</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Presto</td>
                                                        <td>Nintendo DS browser</td>
                                                        <td>Nintendo DS</td>
                                                        <td>8.5</td>
                                                        <td>C/A<sup>1</sup></td>
                                                    </tr>
                                                    <tr>
                                                        <td>KHTML</td>
                                                        <td>Konqureror 3.1</td>
                                                        <td>KDE 3.1</td>
                                                        <td>3.1</td>
                                                        <td>C</td>
                                                    </tr>
                                                    <tr>
                                                        <td>KHTML</td>
                                                        <td>Konqureror 3.3</td>
                                                        <td>KDE 3.3</td>
                                                        <td>3.3</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>KHTML</td>
                                                        <td>Konqureror 3.5</td>
                                                        <td>KDE 3.5</td>
                                                        <td>3.5</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tasman</td>
                                                        <td>Internet Explorer 4.5</td>
                                                        <td>Mac OS 8-9</td>
                                                        <td>-</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tasman</td>
                                                        <td>Internet Explorer 5.1</td>
                                                        <td>Mac OS 7.6-9</td>
                                                        <td>1</td>
                                                        <td>C</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tasman</td>
                                                        <td>Internet Explorer 5.2</td>
                                                        <td>Mac OS 8-X</td>
                                                        <td>1</td>
                                                        <td>C</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Misc</td>
                                                        <td>NetFront 3.1</td>
                                                        <td>Embedded devices</td>
                                                        <td>-</td>
                                                        <td>C</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Misc</td>
                                                        <td>NetFront 3.4</td>
                                                        <td>Embedded devices</td>
                                                        <td>-</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Misc</td>
                                                        <td>Dillo 0.8</td>
                                                        <td>Embedded devices</td>
                                                        <td>-</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Misc</td>
                                                        <td>Links</td>
                                                        <td>Text only</td>
                                                        <td>-</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Misc</td>
                                                        <td>Lynx</td>
                                                        <td>Text only</td>
                                                        <td>-</td>
                                                        <td>X</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Misc</td>
                                                        <td>IE Mobile</td>
                                                        <td>Windows Mobile 6</td>
                                                        <td>-</td>
                                                        <td>C</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Misc</td>
                                                        <td>PSP browser</td>
                                                        <td>PSP</td>
                                                        <td>-</td>
                                                        <td>C</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Other browsers</td>
                                                        <td>All others</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>U</td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Rendering engine</th>
                                                        <th>Browser</th>
                                                        <th>Platform(s)</th>
                                                        <th>Engine version</th>
                                                        <th>CSS grade</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </section>
                            <!-- /.content -->
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
        </div>
        <!-- /.col -->
    </div>

@endsection
@section('scripts')
    <script>
        $("#clientes").DataTable();
    </script>
@endsection