<?php 
     require_once("../admin/template/header.php");
?>

   <div class="card">
        <div class="card-header">
            Capura la informacion del torneo.
        </div>
        <div class="card-body">
            <form action="torneosInsert.php" method="post">
                <div class="mb-3">
                    <label for="nombreaTorneo" class="form-label">Nombre del torneo </label>
                    <input type="text" class="form-control" name="txtNombreTorneo" id="nombreTorneo">
                </div>
                <div class="mb-3">
                    <label for="organizador" class="form-label">Organizador del torneo (nombre completo)</label>
                    <input type="text" name="txtOrganizador" id="organizador" class="form-control"> 
                    
                
                </div>
                <div class="mb-3">
                    <label for="patrocinador" class="form-label">Patrocinador(ES)</label>
                    <textarea name="txtPatrocinadores" id="patrocinador" cols="30" rows="2" class="form-control"></textarea>
                    <span id="pratocinador" class="form-text">
                        Atencion: Se puede separar con "," si hay mas de un patrocinador
                    </span>
                </div>
                <div class="row">
                    <div class="col-mb-3">
                    <div class="mb-3">
                        <label for="sede" class="form-label">Sede (cancha)</label>
                        <input type="text" name="txtSede" id="sede" class="form-control"> 
                    </div>
                </div>
                <div class="col-12">
                     <label for="categoria" class="form-label">Categoria</label>
                     <input list="lstCategoria" name="txtCategoria" id="categoria" 
                     class="form-control">
                     <datalist id="lstCategoria">
                        <option value="1ra. fuerza">    
                        <option value="2da. fuerza">
                        <option value="Veteranos">
                        <option value="Libre">
                        <option value="Jovenil">
                        <option value="Femenil">
                        <option value="Empresarial">
                        <option value="Infantil">
                        <option value="Minibasket">
                    </datalist>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="premio1" class="form-label">Premio 1er. lugar</label>
                        <input type="text" name="txtPremio1" id="premio1" class="form-control"> 
                    </div>
                    <div class="col mb-3">
                        <label for="premio2" class="form-label">Premio 2do. lugar</label>
                        <input type="text" name="txtPremio2" id="premio2" class="form-control"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="premio3" class="form-label">Premio 3er. lugar</label>
                        <input type="text" name="txtPremio3" id="premio3" class="form-control"> 
                    </div>
                    <div class="col mb-3">
                        <label for="OtroPremio" class="form-label">Otro premio (campeon canastero)</label>
                        <input type="text" name="txtOtroPremio" id="OtroPremio" class="form-control"> 
                    </div>
                </div>
                <!--Usuario y contraseña del organizador-->
                <div class="row">
                    <div class="col mb-3">
                        <label for="Usuario" class="form-label">Usuario</label>
                        <input type="text" name="txtUsuario" id="Usuario" class="form-control"> 
                    </div>
                    <div class="col mb-3">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <input type="password" name="txtContrasena" id="Contrasena" class="form-control"> 
                    </div>
                </div>
                <div class="col mb-3">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="adimn.php" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
        <div class="card-footer text-body-secondary">
            Fomulario para crear torneos.
        </div>
    </div>

<?php
            require_once("../admin/template/footer.php");
?>