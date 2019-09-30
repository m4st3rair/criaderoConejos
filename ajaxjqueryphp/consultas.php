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
    function getResTab(){
        include_once 'conectDB.php';
        $conexion = conectarDB();
        
        $consulta = "SELECT * FROM nombres ORDER BY nombreNombre;";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        $res = array();
        while ($columna = mysqli_fetch_array( $resultado )){
            $nomb = array();
            array_push($nomb, $columna['idNombre'], $columna['nombreNombre']);
            array_push($res, $nomb);
        }
        mysqli_close( $conexion );
        return $res;
    }
  



    
    function nuevo_Usuario($nombre){
        include_once 'conectDB.php';
        $conexion = conectarDB();
        $sql = "INSERT INTO nombres (nombreNombre) VALUES ('$nombre')";
        if ($conexion->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
        mysqli_close( $conexion );
    }
    

    

?>
