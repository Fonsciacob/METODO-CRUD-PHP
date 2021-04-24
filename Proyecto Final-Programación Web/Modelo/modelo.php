<?php

    class Cursos{

        public $Nombre;
        public $Precio;
        public $Codigo;
        public $Pdo;

        function __construct(){
            $this->Pdo = new PDO("mysql:host=localhost;dbname=sistema","root","");
        }

        public function Vista(){
            $pdo_st=$this->Pdo->prepare("call sp_vista()");
            $pdo_st->execute();
            $lista=$pdo_st->FetchAll(PDO::FETCH_NUM);
            

            $matriz=array();

            $i=0;
      
            foreach ($lista as $Registro) {
              $i++;
              $matriz[$i]=$Registro;
            }
      
            return $matriz;
          }

        public function Actualizar(){
            $pdost=$this->Pdo->prepare("call sp_update(:dato1,:dato2,:dato3)");
            $pdost->bindParam(":dato1",$this->Nombre);
            $pdost->bindParam(":dato2",$this->Precio);
            $pdost->bindParam(":dato3",$this->Codigo);
            $pdost->execute();
        }

        public function Eliminar(){
            $pdostm=$this->Pdo->prepare("call sp_delete(:dato1)");
            $pdostm->bindParam(":dato1",$this->Codigo);
            $pdostm->execute();
        }

        public function Crear(){
            $pdot=$this->Pdo->prepare("call sp_create(:dato1,:dato2,:dato3)");

            $pdot->bindParam(":dato1",$this->Codigo);
            $pdot->bindParam(":dato2",$this->Nombre);
            $pdot->bindParam(":dato3",$this->Precio);
            $pdot->execute();
            

        }
    }
?>
