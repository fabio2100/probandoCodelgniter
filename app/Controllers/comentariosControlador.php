<?php
    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\models\comentariosModel;

    class ComentariosControlador extends Controller{
        public function index(){
            $comentarios = new comentariosModel();
            $data = $comentarios -> getComentarios();
            print_r($data);
            echo view('templates/header');
            echo view('comentariosView');
            echo view('templates/footer');
        }
    }


?>