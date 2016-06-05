<?php
namespace App\Controller;

use App\Core\Controller;

class ResumeController extends Controller
{
    public function index()
    {
        $this->view->generate('resumeView.php');
    }
}