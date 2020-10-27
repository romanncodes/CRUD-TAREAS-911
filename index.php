<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col l4 m4 s12">
                <h4>Crud Tareas</h4>
                <form action="controllers/ControlInsert.php" method="POST">
                    <input type="text" name="nombre" placeholder="Nombre de la tarea">
                    <br>
                    <input type="text" name="descripcion" placeholder="Descripcion de la tarea">
                    <br><br>
                    <button class="btn">Guardar Tarea</button>
                </form>

                <p>
                    <?php
                    session_start();
                    if (isset($_SESSION['respuesta'])) {
                        echo $_SESSION['respuesta'];
                        unset($_SESSION['respuesta']);
                    }
                    ?>
                </p>
            </div>
            <div class="col l8 m8 s12">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eum dolore fuga eius in architecto, aperiam perspiciatis, eos asperiores delectus ipsa fugiat! Molestiae, consequatur omnis qui blanditiis aperiam quod enim!
                </p>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>