<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>
</head>
<body>
    <div class="container">
        <div class="div">
            <div class="row">
                <table>
                    @foreach
                    <thead>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Placa</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Color</th>
                    </thead>
                    <tbody>
                        <td>{{cargos->id}}</td>
                        <td>{{cargos->nombre}}</td>
                        <td>{{cargos->placa}}</td>
                        <td>{{cargos->marca}}</td>
                        <td>{{cargos->modelo}}</td>
                        <td>{{cargos->color}}</td>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>