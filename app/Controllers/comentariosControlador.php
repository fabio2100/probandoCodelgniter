<?php
    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\models\comentariosModel;

    class ComentariosControlador extends Controller{
        public function index(){
            $comentarios = new comentariosModel();
            $data= [
                'comentarios' => $comentarios -> getComentarios(),
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
                try {
                    $comentarios -> nuevoComentario($this->request->getPost('comentario'));
                    return redirect()->to('ComentariosControlador');
                } catch (Exception $e) {
                    echo $e -> getMessage();
                }
                
            }   
        }

        public function borrarComentario($id){
            $comentarios = new comentariosModel();
            if ($comentarios->borrarComentario($id)){
                echo "se pudo eliminar";
            }else{
                echo "no se pudo eliminar";
            }
            return redirect() -> to('ComentariosControlador'); 
        }

        public function editarComentario($id,$informacion){
            $comentarios = new comentariosModel();
            $comentarios->editarComentario($id,$informacion);
            return redirect() -> to('ComentariosControlador');
        }
    }


?>