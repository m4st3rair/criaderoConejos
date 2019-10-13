<?php

    include_once 'consultas.php';
    include_once '../sesiones.php';
    $usrS = new UserSession();


    if(isset($_POST)){

      quitarConejo( $_POST["idCONEJO"], $_POST["RazonDeMuerte"], $_POST["numeroPerdidas"], $_POST["tipoConejo"]);

    }
    include_once 'soloTabla.php';