<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class ComentariosModel extends Model{
        protected $table = 'comentarios';

        public function getComentarios(){
            return $this -> findAll();
        }
    }


?>
