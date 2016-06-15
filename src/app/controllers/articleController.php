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

    public function edit($id)
    {
        $article = $this->articleService->getById($id);

        $data = array('article' => $article);

        $this->view->render('article.edit.html.twig', $data);
    }

    public function read($id)
    {
        $article = $this->articleService->getById($id);

        $data = array('article' => $article);

        $this->view->render('article.read.html.twig', $data);
    }

    public function save($id)
    {
        $name = $_POST['name'];
        $content = $_POST['content'];

        $article = new Article();

        $article->id = $id;
        $article->name = $name;
        $article->content = $content;

        $this->articleService->save($article);
        header("Location: /articles");
    }
}
