<?php
    include_once 'consultas.php';
    include_once '../sesiones.php';
    $usrS = new UserSession();

    $conejos=getCicloCrianza($usrS->getidUsr());

    

    $date1 = new DateTime("2015-02-14");
    $date2 = new DateTime("2015-04-16");
    $diff = $date1->diff($date2);
    // will output 2 days
    echo $diff->days . ' days';


    //`idCiclo`, 
    //`estadoConeja`, 
    //`iniEstado_finCiclo`, 
    //`iniCiclo`,
    //conejos.nombreCONEJO
    //conejos.camadasCONEJO


?>


<div class="card-group">
          <div class="card" style="background-color: #26896D;">
            <div class="card-header">
              NOMBRE DE LA CONEJA
            </div>
            <div class="card-body">
              <p class="card-text">Numero de Camadas: </p>
              <p class="card-text">Ultima Cria: </p>
              <p class="card-text">Progreso: </p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%; background-color: #00A6FB;" >
                  40%
                </div>
              </div>

            </div>
            <div class="card-footer text-center">
              <button class="btn" style="background-color: #00A6FB;"> <i class="fas fa-times fa-fw"></i> Cancelar Ciclo</button>
            </div>
          </div>


          <div class="card" style="background-color: #003554;" >
            <div class="card-header">
              Conejo
            </div>
            <div class="card-body text-center">

              <p class="card-text">Some text inside the second card</p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%; background-color: #0582CA;" >
                  40%
                </div>
              </div>

            </div>
            <div class="card-footer">
              <button class="btn" style="background-color: #00A6FB;"> <i class="fas fa-question-circle fa-fw"></i>Ayuda</button>
            </div>
          </div>
          


          <div class="card" style="background-color: #003554;">
            <div class="card-header">
              Gestacion
            </div>
            <div class="card-body text-center">
              <p class="card-text">Some text inside the third card</p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%; background-color: #0582CA;" >
                  40%
                </div>
              </div>
            </div>
            <div class="card-footer">

              <button class="btn" style="background-color: #00A6FB;"><i class="fas fa-fw fa-question-circle"></i>Ayuda</button>
              <button class="btn" style="background-color: #00A6FB;"><i class="fas fa-fw fa-baby-carriage"></i>Ya crio?</button>
            
            </div>
          </div>


          <div class="card" style="background-color: #003554;">
            <div class="card-header">
              Amamantando
            </div>
            <div class="card-body text-center">
              <p class="card-text">Some text inside the fourth card</p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%; background-color: #0582CA;" >
                  40%
                </div>
              </div>
            </div>
            <div class="card-footer">

            </div>
          </div>


        </div>