<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if(isset($titulo)){
            echo view('templates/header.php');
            echo view('comentariosView.php');
            echo view('templates/footer.php');
        }else{
            return view('welcome_message');
        }
    }
}
