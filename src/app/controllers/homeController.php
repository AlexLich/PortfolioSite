<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\HomeModel;

class HomeController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new HomeModel();
    }

    public function index()
    {
        $data = $this->model->getData();
        $this->view->generate('homeView.php', $data);
    }
}
