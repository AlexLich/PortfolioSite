<?php
namespace App\Controller;

use App\Core\Controller;

class PhotoalbumController extends Controller
{
    public function index()
    {
        $this->view->generate('photoalbumView.php');
    }
}