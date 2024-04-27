<?php
session_start();

//require_once 'clases/Database.php';

if (!empty($_POST["btningresar"])) {

    if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];

        $database = new Database();

        $alumnoData = $database->getAllData();

        foreach ($alumnoData as $alumno) {
            if ($alumno["usuario"] == $usuario && $alumno["clave"] == $password) {
                $_SESSION["id"] = $alumno["id"];
                $_SESSION["nombre"] = $alumno["nombres"];
                $_SESSION["apellido"] = $alumno["apellidos"];
                header("Location: inicio.php");
                exit;
            }
        }

        echo "<div class='alert alert-danger'>Acceso denegado</div>";

        $database->closeConnection();

    } else {
        echo "Campos vacíos";
    }
}
?>


