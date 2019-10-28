<?php

    include_once 'consultas.php';
    //include_once '../sesiones.php';
    //$usrS = new UserSession();
    $conejos=getConejosShort($usrS->getidUsr());

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
                  <button class="btn btn-outline-light btn-block" id="" data-toggle="modal" data-target="#modal<?php echo $value["idCONEJO"];?>">Quitar</button>

                

<!--  M O D A L  -->
<div class="portfolio-modal modal fade" id="modal<?php echo $value["idCONEJO"];?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">El conejo <?php echo $value["nombreCONEJO"] . "..."; ?></h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image
                <img class="img-fluid rounded mb-5" src="img/portfolio/cabin.png" alt="">
                 -->
                <!-- Portfolio Modal - Text -->


        <select class="form-control" name="muertePor" id="death<?php echo $value["idCONEJO"];?>">
            <OPtion value="ENFERMO">Se Murio Por Enfermedad</OPtion>
            <OPtion value="VIEJO">Se murio Por Viejo</OPtion>
            <OPtion value="CLIMA">Se Murio a Causa del Clima</OPtion>
            <OPtion value="PERDIDO">Se Perdio</OPtion>
            <OPtion value="REGALO">Se Regalo</OPtion>
            <OPtion value="VENDIDO">Se Vendio</OPtion>

        </select>

                <div id="SpaceEspesificaciones">


                </div>


                <p class="mb-5"> Siempre se agradecera la información.</p>

                
                <button class="btn btn-primary" href="#" data-dismiss="modal" onclick='muerteConejo(muerto=<?php echo $value["idCONEJO"];?> )' >
                  Enviar</button>
                
                <button class="btn btn-primary" href="#" data-dismiss="modal" >
                 Cancelar</button>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  M O D A L  -->



                </div>
              </td>

            </tr>
            <?php 
              }
            ?>
          </table>
          </div>
