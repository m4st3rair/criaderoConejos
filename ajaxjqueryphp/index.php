<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Document</title>

    <style>
    .bs-example{
    	margin: 20px;
        position: relative;
    }
</style>
<script>
    $(document).ready(function(){
        $(".show-toast").click(function(){
            $("#myToast").toast('show');
        });
    });
</script>


</head>
<body>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre">
                <button class="form-control btn" onclick="enviar()">Enviar</button>
            </div>
            <div class="bs-example">
	<button type="button" class="btn btn-primary show-toast">Show Toast</button>
    <div class="toast" id="myToast" style="position: absolute; top: 0; right: 0;">
        <div class="toast-header">
            <strong class="mr-auto"><i class="fa fa-grav"></i> We miss you!</strong>
            <small>11 mins ago</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            <div>It's been a long time since you visited us. We've something special for you. <a href="#">Click here!</a></div>
        </div>
    </div>
</div>




        </div>



        <div class="col-sm-6">
            <div id="tablita">

<?php
    include_once ("consultas.php");
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
            </div>
        </div>
    </div>
    <script>
        function enviar() {
            var nombr = document.getElementById("nombre").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    document.getElementById("tablita").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("POST", "post.php", true);
            xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.send("nombre="+nombr+"");//Si se quisiera agregar mas solo se pone "&email="+emali+"&lol="+leageoflegends+""
            alert("nuevo conejito agregado !!");
            
        }

    </script>







</body>





</html>