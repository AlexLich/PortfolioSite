<?php
namespace App\Core;
class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {
    }
}
