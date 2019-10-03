<?php


    function validarCuenta($pwd, $email){
        include_once 'conectDB.php';
        $conexion = conectarDB();
        $consulta = "SELECT * FROM usuarios WHERE passUSR = '$pwd' AND correoUSR = '$email' ";
	    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        $res = array();
        while ($columna = mysqli_fetch_array( $resultado )){
            array_push($res, $columna['idUSR'], $columna['nombreUSR'], $columna['correoUSR'], $columna['passUSR'], 'local');
        }
        mysqli_close( $conexion );
        return $res;
    
    }
    
  
    
    function nuevo_Usuario($nombre, $correo, $pass){
        include_once 'conectDB.php';
        $conexion = conectarDB();
        $sql = "INSERT INTO usuarios (nombreUSR, passUSR, correoUSR) VALUES ('$nombre', '$pass', '$correo')";
        if ($conexion->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
        mysqli_close( $conexion );
    }

    function getConejosShort($idUsr){
        include_once 'conectDB.php';
        $conexion = conectarDB();
        $consulta = "SELECT * FROM conejos WHERE idUSR = '$idUsr' ORDER BY nombreCONEJO";

        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        $res = array();
        while ($columna = mysqli_fetch_array( $resultado )){
            array_push($res, $columna);
        }
        mysqli_close( $conexion );
        return $res;
    
    }
    //  T A B L A   C O N E J O S

    //idCONEJO,	
    //nombreCONEJO,
    //sexoCONEJO,
    //camadasCONEJO,
    //idUSR,
    //estadoCONEJO
    //precio
    function nuevo_Conejo($nombreC, $sexoC, $idUsr, $precio){
        include_once 'conectDB.php';
        $conexion = conectarDB();
        $sql = "INSERT INTO conejos (nombreCONEJO, sexoCONEJO, idUSR, estadoCONEJO, precio) VALUES ('$nombreC', '$sexoC', '$idUsr', 'NO', '$precio')";
        if ($conexion->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
        mysqli_close( $conexion );
    }




    

?>
