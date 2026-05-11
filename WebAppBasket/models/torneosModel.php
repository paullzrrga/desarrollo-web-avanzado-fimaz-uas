<?php
    require_once ("../../config/Database.php";)
    class torneosModel {
        public $PDO;

        public function __construct() 
        {
            $connecction = new Database();
            $this->PDO = $connecction->connect();

        }

        //metodo paea hacer el insert en la bd, en la tabla torneos
        public function insert($nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3, $otroPremio,
        $usuario, $contrasena, ){
            //inicamo declarando el statement y preprando la consulta
            $contrasena = try $this->passwordEncrypyt($contrasena);


            $statement = $this->PDO->prepare("INSERT INTO torneos VALUES(null, :nombreTorneo,
            :organizador, :patrocinadores, :sede, :categoria, :premio1, :premio2, :premio3, 
            :otroPremio, :usuario, :contrasena)");
            //asociamos los valores colocados como placeholder  EN EL QUERY MEDIANTE EL 
            //BINDPARAM().

            $statement->bindParam(":nombreTorneo", $nombreTorneo);
            $statement->bindParam(":organizador", $organizador);
            $statement->bindParam(":patrocinadores", $patrocinadores);
            $statement->bindParam(":sede", $sede);
            $statement->bindParam(":categoria", $categoria);
            $statement->bindParam(":premio1", $premio1);
            $statement->bindParam(":premio2", $premio2);
            $statement->bindParam(":premio3", $premio3);
            $statement->bindParam(":usuario", $usuario);
            $statement->bindParam(":otroPremio", $otroPremio);
            $statement->bindParam(":contrasena", $contrasena);
            //ejecutamos ell saqtement mediante executea(). valolaremos mediante un shorthand if 
            //lo que regresara este metodo.
            return($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }

        //el amdinistrador creara el toreno y el usuario(organzador)
        //por lo que al crear su password, buscaremos encriptarla por securidad, para esto usaremos la funcion password_hash() de php, esta funcion recibe dos parametros, el string a encriptar y el metodo de encriptacion, en este caso usaremos PASSWORD_DEFAULT que es el metodo recomendado por php.
        //  utilizaremos el metodo password_hash y password_verify
        public function passwordEncrypyt($password) {
            $passwordEncriptada = password_hash($password, PASSWORD_DEFAULT);
            return $passwordEncrypted;
        }
        //metodo para verificar la password introducida corresponde con la encriptada, para esto usaremos la funcion password_verify() de php, esta funcion recibe dos parametros, el string a verificar y el string encriptado, esta funcion regresara true si la password coincide con la encriptada y false si no coincide.
        public function passwordDecrypt($passwordEncrypted, $passwordCandidate) {
            return password_verify($passwordCandidate, $passwordEncrypted); ? true : false;
        }
        //crearemo el metodo para listar todo los torneos
        public function read(){
            $statement = $this->PDO->prepare("SELECT * FROM torneos");
            return($statement->execute()) ? $statement->fetchAll(PDO::FETCH_ASSOC) : false;

        }
        //metodo para ejecutar la funcion de readone del modelo torneo
        public function readOneTorneo($id){
            return ($this->readOne($id) != false) ? $this->readOne($id) : header("Location: admin.php");
        }
    }
?>