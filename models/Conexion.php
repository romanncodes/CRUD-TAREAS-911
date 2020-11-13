<?php

namespace models;


class Conexion
{
    public static $user = "uvzaszdlvdsqaxjh";
    public static $pass = "ogqTjfLMhWAmdKZNNnvG";
    public static $URL = "mysql:host=bgdiizns1bmlvobhl40p-mysql.services.clever-cloud.com;dbname=bgdiizns1bmlvobhl40p";

    public static function conector()
    {
        try {
            return new \PDO(Conexion::$URL, Conexion::$user, Conexion::$pass);
        } catch (\PDOException $e) {
            return null;
        }
    }
}
