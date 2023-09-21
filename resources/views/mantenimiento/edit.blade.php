<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mantenimientos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme Config Js -->
    <script src="{{ url('js/hyper-config.js') }}"></script>

    <!-- App css -->
    <link href="{{ url('css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ url('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="content-page">
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Editar Mantenimientos</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('mantenimientos') }}" enctype="multipart/form-data">
                            Regresar</a>

                    </div>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}

                </div>
            @endif
            <form action="{{ route('mantenimientos.actualizar', $mantenimiento->id) }}" method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre :</strong>
                            <input type="text" name="nombre" value="{{ $vehiculo->nombre }}" class="form-control"
                                placeholder="Nombre ">

                            @error('nombre')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Referencia :</strong>
                                <input type="text" name="referencia" value="{{ $mantenimiento->referencia }}"
                                    class="form-control" placeholder="referencia ">

                                @error('referencia')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Cantidad:</strong>
                                    <input type="text" name="cantidad" value="{{ $mantenimiento->cantidad }}"
                                        class="form-control" placeholder="cantidad ">

                                    @error('cantidad')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nombre_proveedor :</strong>
                                        <input type="text" name="nombre_proveedor"
                                            value="{{ $mantenimiento->nombre_proveedor }}" class="form-control"
                                            placeholder="nombre_proveedor ">

                                        @error('modelo')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Marca :</strong>
                                            <input type="text" name="marca" value="{{ $mantenimiento->marca }}"
                                                class="form-control" placeholder="marca ">

                                            @error('marca')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary ml-3">Editar</button>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>id_vehiculo :</strong>
                                            <input type="text" name="id_vehiculo"
                                                value="{{ $mantenimiento->id_vehiculo }}" class="form-control"
                                                placeholder="id_vehiculo ">

                                            @error('id_vehiculo')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary ml-3">Editar</button>
                                </div>
            </form>
        </div>
    </div>
    <!-- Vendor js -->
    <script src="{{ url('js/vendor.min.js') }}"></script>

    <!-- Code Highlight js -->
    <script src="{{ 'js/highlight.pack.min.js' }}"></script>
    <script src="{{ url('js/clipboard.min.js') }}"></script>
    <script src="{{ url('js/hyper-syntax.js') }}"></script>

    <!-- App js -->
    <script src="{{ url('js/app.min.js') }}"></script>
</body>

</html>
