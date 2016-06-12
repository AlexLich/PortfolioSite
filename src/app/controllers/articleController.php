<?php
namespace App\Controller;

use App\Core\Controller;
use App\Service\ArticleService;
use App\Service\AuthService;
use App\Model\Article;

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
        $articles = $this->articleService->getAll();

        $data = array('isAuth' => $isAuth, 'articles' => $articles);

        $this->view->render('articles.html.twig', $data);
    }

    public function getForm()
    {
        $this->view->render('article.form.html.twig');
    }

    public function add()
    {
        $name = $_POST['name'];
        $content = $_POST['content'];

        $article = new Article();

        $article->name = $name;
        $article->content = $content;

        $this->articleService->add($article);
        header("Location: /articles");
    }

    public function delete($id)
    {
        $this->articleService->delete($id);
        header("Location: /articles");
    }
}
