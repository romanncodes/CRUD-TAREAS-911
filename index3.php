<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div id="main">
        <h1>{{titulo}}</h1>
        <button @click="saludar">Hola</button>
        <hr>
        <form @submit.prevent="guardar">
            <input id="a" v-model="nombre">
            <br>
            <input id="b" v-model="descripcion">
            <br>
            <button>Guardar</button>
            <br><br>
            El nombre es : {{nombre.length}}<br>
            La descripcion es: {{descripcion}}
        </form>

        <table border="1">
            <tr>
                <th>Nombre</th>
                <th></th>
            </tr>
            <tr v-for="t in tareas">
                <td>{{t.nombre}}</td>
                <td>
                    <button @click="detalle(t)">detalle</button>
                </td>
            </tr>

        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="js/tareas_vue.js"></script>
</body>

</html>