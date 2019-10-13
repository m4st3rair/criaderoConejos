<?php

    include_once 'consultas.php';
    include_once '../sesiones.php';
    $usrS = new UserSession();


    if(isset($_POST)){
      nuevo_Conejo($_POST["nombre"],  $_POST["sexo"], $usrS->getidUsr(), $_POST["precio"]);        
    }
    include_once 'soloTabla.php';