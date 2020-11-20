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
    public function guardarTarea2()
    {

        if ($this->nombre == "" || $this->descripcion == "") {
            $msg = ["msg" => "Campos Vacios"];
            echo json_encode($msg);
            return;
        }

        $model = new TareaModel();
        $data = ["nombre" => $this->nombre, "descripcion" => $this->descripcion];

        $count = $model->insertar($data);
        if ($count == 1) {
            $msg = ["msg" => "Tarea Creada con Exito"];
        } else {
            $msg = ["msg" => "Hubo un error en la base de datos"];
        }

        echo json_encode($msg);
    }
}

$obj = new ControlInsert();
$obj->guardarTarea2();
