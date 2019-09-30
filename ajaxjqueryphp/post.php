<?php
    include_once ("consultas.php");
    if (isset($_POST)) {
        //echo $_POST["nombre"];
        
        
        nuevo_Usuario($_POST["nombre"]);
    }
    
    $tabla=getResTab();
?>

<table class="table">
    <tr>
        <th>
            ID
        </th>
        <th>
            Nombre
        </th>    
    </tr>
    <?php
        foreach ($tabla as $val) {
    ?>
    <tr>
        <td>
            <?php
                echo $val[0];                
            ?>    
        </td>
        <td>
            <?php
                echo $val[1];                
            ?>    

        </td>
    
    </tr>
    <?php
        }
    ?>


</table>