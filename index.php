<?php
//INSTRUCCIONES PARA MOSTRAR LOS POSIBLES ERRORES EN PHP

use models\TareaModel as TareaModel;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("models/TareaModel.php");

$model = new TareaModel();
$tareas = $model->getAllTareas();
session_start();
//print_r($tareas);
$prueba = $model->buscarTarea(5);
print_r($prueba);

/*
$prueba = $model->buscarTarea(2);

$model->eliminarTarea(1);
$model->editarTarea(3, ['nombre' => 'Tarea #3', 'descripcion' => 'Estudiar Materialize']);

print_r($prueba);
echo count($prueba);
*/
//echo json_encode($tareas);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col l4 m4 s12">
                <?php if (!isset($_SESSION['editar'])) { ?>
                    <h4 class="center">Nueva Tarea</h4>
                    <form action="controllers/ControlInsert.php" method="POST">
                        <div class="input-field">
                            <input id="nombre" type="text" name="nombre" class="validate" required>
                            <label for="nombre">Nombre</label>
                            <span class="helper-text" data-error="wrong" data-success="right"></span>
                        </div>

                        <div class="input-field">
                            <input id="descripcion" type="text" name="descripcion">
                            <label for="descripcion">Descripción</label>
                        </div>

                        <button class="btn">Guardar Tarea</button>
                    </form>

                    <p>
                        <?php

                        if (isset($_SESSION['respuesta'])) {
                            echo $_SESSION['respuesta'];
                            unset($_SESSION['respuesta']);
                        }
                        ?>
                    </p>
                <?php } else { ?>
                    <!-------EDITAR TAREA -------->
                    <h4 class="center">Editar Tarea</h4>
                    <form action="controllers/ControlEdit.php" method="POST">
                        <input type="hidden" name="id" value="<?= $_SESSION['tarea']['id'] ?>">
                        <div class="input-field">
                            <input id="nombre" type="text" name="nombre" value="<?= $_SESSION['tarea']['nombre'] ?>">
                            <label for="nombre">Nombre</label>
                        </div>

                        <div class="input-field">
                            <input id="descripcion" type="text" name="descripcion" value="<?= $_SESSION['tarea']['descripcion'] ?>">
                            <label for="descripcion">Descripción</label>
                        </div>

                        <button class="btn orange">Editar Tarea</button>
                    </form>
                <?php
                    unset($_SESSION['editar']);
                    unset($_SESSION['tarea']);
                }

                ?>



            </div>
            <div class="col l8 m8 s12">
                <h4 class="center">Listado de Tareas</h4>

                <form action="controllers/ControlTabla.php" method="POST">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Tarea</th>
                            <th>Descripcion</th>
                            <th></th>
                        </tr>
                        <?php foreach ($tareas as $item) { ?>
                            <tr>
                                <td> <?= $item["id"] ?> </td>
                                <td> <?= $item["nombre"] ?> </td>
                                <td> <?= $item["descripcion"] ?> </td>
                                <td>
                                    <button name="bt_edit" value="<?= $item["id"] ?>" class="btn-floating orange">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button name="bt_delete" value="<?= $item["id"] ?>" class="btn-floating red">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>

                    </table>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



</body>

</html>