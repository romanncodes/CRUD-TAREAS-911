<?php

namespace controllers;

require_once("../models/TareaModel.php");

use models\TareaModel as TareaModel;

class ControlInsert
{
    public $nombre;
    public $descripcion;

    public function __construct()
    {
        $this->nombre = $_POST['nombre'];
        $this->descripcion = $_POST['descripcion'];
    }

    public function guardarTarea()
    {
        session_start();
        if ($this->nombre == "" || $this->descripcion == "") {
            $_SESSION['respuesta'] = "Campos Vacios";
            header("Location: ../index.php");
            return;
        }

        $model = new TareaModel();
        $data = ["nombre" => $this->nombre, "descripcion" => $this->descripcion];

        $count = $model->insertar($data);
        if ($count == 1) {
            $_SESSION['respuesta'] = "Tarea Creada con exito";
        } else {
            $_SESSION['respuesta'] = "Hubo un error a nivel de base de datos";
        }

        header("Location: ../index.php");
    }
}

$obj = new ControlInsert();
$obj->guardarTarea();
