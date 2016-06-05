<?php
namespace App\Controller;

use App\Core\Controller;

class PortfolioController extends Controller
{
    public function index()
    {
        $this->view->generate('portfolioView.php');
    }
}
