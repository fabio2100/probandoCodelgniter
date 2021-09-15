<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class ComentariosModel extends Model{
        protected $table = 'comentarios';
        protected $allowedFields = ['informacion','fecha'];


        public function getComentarios(){
            return $this -> orderby('fecha DESC') -> findAll();
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
            } catch (Exception $e) {
                echo $e->getMessage();
            }                    
        }

        public function borrarComentario($id){
            try {
                $db = \Config\Database::connect();
                $builder = $db -> table('comentarios');
                $builder -> delete(['id'=>$id]);
                return true;                
            }catch (Exception $e) {
                return $e -> getMessage();
            }
        }

        public function editarComentario($id,$informacion){
            try {
                $db = \Config\Database::connect();
                $builder = $db -> table('comentarios');
                $fecha = time();
                $fechaFormatoSQL = date('Y-m-d H:i:s');
                $data=[
                    'id'=>$id,
                    'informacion'=>$informacion,
                    'fecha'=>$fechaFormatoSQL
                ];
                $builder -> replace($data);
                return true;
            } catch (Exception $e) {
                $e -> getMessage();
                return false;
            }
        }

    }




?>
