<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <table>
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Peso</th>
                    <th>Tipo</th>
                    <th>Valor flete</th>
                    <th>Valor Seguro</th>
                </thead>
                <tbody>
                    <td>{{tipo_cargas->id}}</td>
                    <td>{{tipo_cargas->nombre}}</td>
                    <td>{{tipo_cargas->peso}}</td>
                    <td>{{tipo_cargas->tipo}}</td>
                    <td>{{tipo_cargas->valor_flete}}</td>
                    <td>{{tipo_cargas->valor_seguro}}</td>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>