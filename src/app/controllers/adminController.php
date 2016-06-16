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
        
        $this->view->render('adminView.php');
    }
    
    public function addNew() {
        $this->checkAuth();
        
        //написать логику добавления
    }
    
    public function deleteNew() {
        $this->checkAuth();
        
        //написать логику удаления
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