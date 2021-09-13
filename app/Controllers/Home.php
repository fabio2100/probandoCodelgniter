<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('templates/header.php');
        echo view('comentariosView.php');
        echo view('templates/footer.php');
    }
}
