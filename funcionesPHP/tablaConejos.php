<?php

    include_once 'consultas.php';
    include_once '../sesiones.php';
    $usrS = new UserSession();


    if(isset($_POST)){
        nuevo_Conejo($_POST["nombre"],  $_POST["sexo"], $usrS->getidUsr(), $_POST["precio"]);
        
        $conejos=getConejosShort($usrS->getidUsr());
    }
    //  T A B L A   C O N E J O S

    //idCONEJO,	
    //nombreCONEJO,
    //sexoCONEJO,
    //camadasCONEJO,
    //idUSR,
    //estadoCONEJO
    //precio
?>
<h3>Conejos</h3>
<div style="padding : 4px;
            width : 100%;
            height : 300px;
            overflow : auto; ">
            



<table class="table table-striped">
            <tr>
              <th style="color:#FFFFFF">
                Nombre
              </th>
              <th style="color:#FFFFFF">
                No.Camadas
              </th>
              <td></td>
            </tr>
            <?php
              foreach ($conejos as $value) {
            ?>
            <tr>
              <td style="color:#FFFFFF"><?php echo $value["nombreCONEJO"]; ?></td>
              <td style="color:#FFFFFF"><?php echo $value["camadasCONEJO"]; ?></td>
              <td>
                <div class="form-group">
                  <button type="submit" class="btn btn-outline-light btn-block" id="">Quitar</button>
                </div>
              </td>

            </tr>
            <?php 
              }
            ?>
          </table>
          </div>