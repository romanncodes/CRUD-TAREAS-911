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
    <h4>Lo mismo pero con VUEJS</h4>
    <div id="app">
        <form @submit.prevent="guardar">
            <input type="text" v-model="nombre" placeholder="nombre">
            <input type="text" v-model="descripcion" placeholder="descripcion">
            <button class="btn">Guardar</button>
            <br>
            {{nombre}}<br>
            {{descripcion}}
            <bR>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                </tr>
                <tr v-for="tarea in tareas">
                    <td>{{tarea.nombre}}</td>
                    <td>{{tarea.descripcion}}</td>
                </tr>

            </table>


        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="js/tareas_vue.js"></script>
</body>

</html>