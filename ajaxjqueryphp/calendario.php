<?php
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $dias=array("Domingo","Lunes","Martes","Miercoles","jueves","Viernes","Sabado");
    $days=array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    echo date('l \t\h\e jS') . "<br>";
    echo date("D M j G:i:s T Y")."<br>"; 
    
    echo date("l");
    $anio=date("Y");
    $mes= date("m");
    echo $mes;
    //$mesn=$meses[$mes-1];
    echo $mesn;
    $dias=0;
switch ($mes) {
    case '1':
        $dias=31;
        break;
    case '2':
        if ( ($anio % 4 == 0) &&  (($anio % 100 != 0) || ($anio % 400 == 0)) ){
            $dias=29;
        }else {
            $dias=28;
        }
        break;
    case '3':
        $dias=31;
        break;
    case '4':
        $dias=30;
        break;
    case '5':
        $dias=31;
        break;
    case '6':
        $dias=30;
        break;
    case '7':
        $dias=31;
        break;
    case '8':
        $dias=31;
        break;
    case '9':
        $dias=30;
        break;
    case '10':
        $dias=31;
        break;
    case '11':
        $dias=30;
        break;
    case '12':
        $dias=31;
        break;
                
    default:
        
        break;
}
    
    
    
    echo $anio;
?>