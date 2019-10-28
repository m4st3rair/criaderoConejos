<?php

    include_once 'consultas.php';
    include_once '../sesiones.php';
    $usrS = new UserSession();

    $conejos=getConejosM($usrS->getidUsr());
    $conejas=getConejasH($usrS->getidUsr());

    //  T A B L A   C O N E J O S

    //idCONEJO,	
    //nombreCONEJO,
    //sexoCONEJO,
    //camadasCONEJO,
    //idUSR,
    //estadoCONEJO
    //precio


?>

<table class="table">
    <tr>
        <td style="background-color:#D391DF; color:white;">
            CONEJAS
        </td>
        <td  style="background-color:#91D8DF; color:white;">
            CONEJOS
        </td>
    </tr>

    <tr>
        <td style="background-color:#D391DF; color:white;">
            <Select class="form-control-lg custom-select" size="5" id="selectCONEJAS" name="selectCONEJAS">
                <?php
                    foreach ($conejas as $value) {
                ?>
                    <option value="<?php echo $value["idCONEJO"];?>"><?php echo $value["nombreCONEJO"];?></option>

                <?php
                    }
                ?>
            </Select>
        </td>

        <td  style="background-color:#91D8DF; color:white;">
            <Select class="form-control-lg custom-select" size="5" id="selectCONEJOS" name="selectCONEJOS">
                <?php
                    foreach ($conejos as $value) {
                ?>
                    <option value="<?php echo $value["idCONEJO"];?>"><?php echo $value["nombreCONEJO"];?></option>

                <?php
                    }
                ?>
            </Select>
        </td>
    </tr>

</table>