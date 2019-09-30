<?php

    include_once 'consultas.php';
    include_once '../sesiones.php';
    $usrS = new UserSession();


    if(isset($_POST)){
        nuevo_Conejo($_POST["nombre"],  $_POST["sexo"], $usrS->getidUsr(), $_POST["precio"]);
        
        $conejos=getConejosShort($usrS->getidUsr());
        foreach ($conejos as $value) {
           echo $value[0]. " ".$value[1]; 
            echo "<br>";
        }
    }

?>

<table class="table table-striped">
            <tr>
              <th style="color:#FFFFFF">
                Nombre
              </th>
              <th style="color:#FFFFFF">
                No.Camadas
              </th>
              <td></td>
              <td></td>
            </tr>

            <tr>
              <td style="color:#FFFFFF">La loca</td>
              <td style="color:#FFFFFF">10</td>
              <td>
                <div class="form-group">
                  <button type="submit" class="btn btn-outline-light btn-block" id="">Murio</button>
                </div>
              </td>

            </tr>
            <tr>
              <td>El garañon</td>
              <td>0</td>
            </tr>

          </table>