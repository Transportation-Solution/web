<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Registro de viajes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Editar Registro de viajes</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('registro_viajes') }}" enctype="multipart/form-data">
                        Regresar</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('registro_viajes.actualizar', $registro_viajes->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Direccion Registro de viaje:</strong>
                    <input type="text" name="direccion" class="form-control"
                        placeholder="Direccion Registro de viaje">
                    @error('direccion')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha_entrega Registro de viaje:</strong>
                    <input type="date" name="Fecha_entrega" class="form-control"
                        placeholder="Fecha_entrega Registro de viaje">
                    @error('Fecha_entrega')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha_carga Registro de viaje:</strong>
                    <input type="date" name="Fecha_carga" class="form-control"
                        placeholder="Fecha_carga Registro de viaje">
                    @error('Fecha_carga')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary ml-3">Crear</button>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Editar</button>
    </div>
    </form>
    </div>
</body>

</html>
