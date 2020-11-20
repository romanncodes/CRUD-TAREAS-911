<?php

use models\TareaModel as TareaModel;

require_once("../models/TareaModel.php");

class Tareas
{

    public function getTareas()
    {
        $model = new TareaModel();
        echo json_encode($model->getAllTareas());
    }
}

$obj = new Tareas();
$obj->getTareas();
