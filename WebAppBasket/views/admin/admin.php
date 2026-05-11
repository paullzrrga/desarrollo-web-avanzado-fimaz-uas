<?php 
     require_once("../admin/template/header.php");
?>

<div class="card text-center">
  <div class="card-header">
    MENU
   </div>
   <div class="card-body">
        <h5 class="card-title"><h5>
            <div class="row mb-3">
                <div class="col">
                <div class="card text-center">
                <div class="card-header">
                    Crear torneos
                </div>
                <div class="card-body">

                <a href="frmtorneos.php" class="btn btn-primary">
                     <img src="../img/torneo.avif" alt="Crear torneo." width="180" height="180">
                </a>

                 </div>
                 </div>            
             </div>
                <div class="col">
                <div class="card text-center">
                <div class="card-header">
                    Listado de torneos
                </div>
                <div class="card-body">
                   <a href="readAllTorneos.php" class="btn btn-primary">
                        <img src="../img/torneo.avif" alt="Listar torneos" width="180" height="180">
                    </a>

                </div>
                </div>            
             </div>
          </div>
          <div class="row">
                <div class="col">
                <div class="card text-center">
                <div class="card-header">
                    Estadicticas
                </div>
                <div class="card-body">

                 </div>
                 </div>            
             </div>
                <div class="col">
                <div class="card text-center">
                <div class="card-header">
                    Anuncios
                </div>
                <div class="card-body">

                </div>
                </div>            
             </div>
          </div>
      </div>
    <div class="card-footer text-body-secondary">
          Configuracion de torneos. web App basket-ball  
</div>
        
    


<?php
            require_once("../admin/template/footer.php");
?>