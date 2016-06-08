<?php
namespace App\Controller;

use App\Core\Controller;
use App\Services\AuthService;

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
        $user = $_POST["user"];
        $password = $_POST["password"];

        var_dump($user);
        var_dump($password);

        $isAuth = $this->authService->login($user, $password);

        var_dump($isAuth);
    }

    public function logout()
    {

    }
}
