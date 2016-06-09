<?php
namespace App\Controller;

use App\Core\Controller;
use App\Service\AuthService;

class AuthController extends Controller
{
    protected $authService;

    public function __construct()
    {
        parent::__construct();
        $this->authService = new AuthService;
    }

    public function index()
    {
        $this->view->generate('loginView.php');
    }

    public function login()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $isAuth = $this->authService->login($username, $password);
        
        var_dump($isAuth);

        if ($isAuth) {
            // header("Location: $ref");
        }
    }

    public function logout()
    {

    }
}
