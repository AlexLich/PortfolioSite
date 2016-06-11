<?php
namespace App\Controller;

use App\Core\Controller;
use App\Service\ArticleService;
use App\Service\AuthService;

class ArticleController extends Controller
{
    protected $authService;
    protected $articleService;

    function __construct()
    {
        parent::__construct();
        $this->articleService = new ArticleService();
        $this->authService = new AuthService();
    }

    public function getAll()
    {
        $isAuth = $this->authService->isAuth();
        $data = $this->articleService->getAll();
        $this->view->generate('articlesView.php', $data, $isAuth);
    }

    public function getForm()
    {
        $this->view->generate('articleAddView.php', null, false);
    }

    public function add()
    {
        $name = $_POST['name'];
        $content = $_POST['content'];

        $this->articleService->add($name, $content);
        header("Location: /articles");
    }

    public function delete($id)
    {
        $this->articleService->delete($id);
        header("Location: /articles");
    }
}
