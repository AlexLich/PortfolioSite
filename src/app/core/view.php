<?php
namespace App\Core;
class View
{
    protected $dirViews;
    protected $templateView;

    public function __construct()
    {
        $this->dirViews = dirname(__DIR__).'\views\\';
        $this->templateView = 'templateView.php';
    }

    function generate($contentView, $data = null)
    {
        include $this->dirViews.$this->templateView;
    }
}
