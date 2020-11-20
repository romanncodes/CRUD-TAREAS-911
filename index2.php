<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <h4>Capturando peticiones con JS </h4>
    <form id="form">
        <input id="nombre" type="text" name="nombre" placeholder="nombre">
        <input id="descripcion" type="text" name="descripcion" placeholder="descripcion">
        <button id="bt_guardar" class="btn">Guardar</button>
    </form>
    <div id="tareas"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/tareas.js"></script>
</body>


</html>