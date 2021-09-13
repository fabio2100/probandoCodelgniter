<?php
    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\models\comentariosModel;

    class ComentariosControlador extends Controller{
        public function index(){
            $comentarios = new comentariosModel();
            $data= ['comentarios' => $comentarios -> getComentarios(),
            'titulo'=>"Sección comentarios"];
            echo view('templates/header',$data);
            echo view('comentariosView',$data);
            echo view('templates/footer');
        }


        public function crearComentario(){
            $comentarios = new comentariosModel();
            
            echo view('templates/header',['titulo'=>'Crear comentarios']);
            echo view('crearComentario.php');
            echo view('templates/footer');
            if($this -> request -> getMethod()==='post'){
                $comentarios -> nuevoComentario($this->request->getPost('comentario'));
            }else
                echo "estas ingresando desde get";
        }
    }


?>