<?php
namespace App\Controller;

use App\Core\Controller;
use App\Service\AuthService;

class AdminController extends Controller
{
    protected $authService;
    
    function __construct() {
        parent::__construct();
        $this->authService = new AuthService();
    }
    
    public function index()
    {
        $this->checkAuth();
        
        $this->view->generate('adminView.php');
    }
    
    public function getData() {
        $this->checkAuth();
        
        //Логика
    }
    
    //Проверка статуса авторизации, если не авторизован, то редирект к форме логина.
    private function checkAuth() {
        if(!$this->authService->isAuth()) {
             header("Location: /login");
        }
    }
}