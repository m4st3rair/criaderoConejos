<?php
    include_once 'consultas.php';
    include_once '../sesiones.php';
    $usrS = new UserSession();
    if (isset($_POST["idConeja"]) && isset($_POST["idConejo"])) {
        nuevo_ciclo($_POST["idConeja"], $_POST["idConejo"], "CONEJO", "CICLO");
    }



?>