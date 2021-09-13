<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class ComentariosModel extends Model{
        protected $table = 'comentarios';
        protected $allowedFields = ['informacion','fecha'];


        public function getComentarios(){
            return $this -> findAll();
        }
        

        public function nuevoComentario($informacion){
            $fecha = time();
            $fechaFormatoSQL = date('Y-m-d H:i:s');
            $data = [
            'informacion'=> $informacion,
            'fecha'=>$fechaFormatoSQL
            ];
            try {
                $db = \Config\Database::connect();
                $builder = $db -> table('comentarios');
                $builder -> insert($data);
                echo($db -> getLastQuery());
            } catch (Exception $e) {
                echo $e->getMessage();
            }                 
            
        }

    }




?>
