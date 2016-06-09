<?php
namespace App\Controller;

use App\Core\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $this->view->generate('loginView.php');
    }
}