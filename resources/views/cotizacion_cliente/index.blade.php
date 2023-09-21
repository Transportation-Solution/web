<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Cotizacion cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme Config Js -->
    <script src="{{ url('js/hyper-config.js') }}"></script>

    <!-- App css -->
    <link href="{{ url('css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ url('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- ========== Topbar Start ========== -->
    @include('layouts.componets.navbar')
    <!-- ========== Topbar End ========== -->
    <!-- ========== Left Sidebar Start ========== -->
    @include('layouts.componets.sidebar')
    <!-- ========== Left Sidebar End ========== -->
    <br>
    <div class="content-page">
        <div class="container mt-2">
            <div class="row">

                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>cotizacion clientes</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('cotizacion_clientes.crear') }}"> Registrar
                            cotizacion clientes</a>

                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>id</th>
                    <th>valor</th>
                    <th>id_usuario</th>
                    <th>id_tipo_carga</th>
                    <th>id_municipio_destino</th>
                    <th>id_minicipio_origen</th>
                    <th></th>
                    <th width="280px">Acción</th>
                </tr>
                @foreach ($cotizacion_clientes as $cotizacion_cliente)
                    <tr>
                        <tbody>
                            <td>{{ $cotizacion_cliente->id }}</td>
                            <td>{{ $cotizacion_cliente->valor }}</td>
                            <td>{{ $cotizacion_cliente->id_usuario }}</td>
                            <td>{{ $cotizacion_cliente->id_tipo_carga }}</td>
                            <td>{{ $cotizacion_cliente->id_municipio_destino }}</td>
                            <td>{{ $cotizacion_cliente->id_minicipio_origen }}</td>

                        </tbody>
                        <form action="{{ route('cotizacion_clientes.eliminar', $cotizacion_cliente->id) }}"
                            method="Post">
                            <a class="btn btn-primary"
                                href="{{ route('cotizacion_clientes.editar', $cotizacion_cliente->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn

btn-danger">Eliminar</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

</body>
<!-- Vendor js -->
<script src="{{ url('js/vendor.min.js') }}"></script>

<!-- Code Highlight js -->
<script src="{{ 'js/highlight.pack.min.js' }}"></script>
<script src="{{ url('js/clipboard.min.js') }}"></script>
<script src="{{ url('js/hyper-syntax.js') }}"></script>

<!-- App js -->
<script src="{{ url('js/app.min.js') }}"></script>

</html>

</html>
