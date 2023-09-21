<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Departamentos</title>
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
                        <h2>departamentos</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('departamentos.crear') }}"> Registrar
                            departamentos</a>

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
                    <th>Nombre</th>
                    <th></th>
                    <th width="280px">Acción</th>
                </tr>
                @foreach ($departamentos as $departamento)
                    <tr>
                        <tbody>
                            <td>{{ $departamento->id }}</td>
                            <td>{{ $departamento->nombre }}</td>

                        </tbody>
                        <form action="{{ route('departamentos.eliminar', $departamento->id) }}" method="Post">
                            <a class="btn btn-primary"
                                href="{{ route('departamentos.editar', $departamento->id) }}">Editar</a>

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
