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
        header("Location: /articles/1");
    }

    public function delete($id)
    {
        $this->articleService->delete($id);
        header("Location: /articles/1");
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
        header("Location: /articles/1");
    }

    public function paginate($number)
    {
        $isAuth = $this->authService->isAuth();

        //Количетсво строк на странице
        $limit = 5;
        $total = $this->articleService->getCount();
        $numbers = (int) ($total / $limit) + 1;

        if ($number <= 1) {
            $number = 1;
        }

        if ($number > $numbers) {
            $number = $numbers;
        }

        $start = $number - 1;
        $start = $start * $limit;

        $articles = $this->articleService->getSegment($start, $limit);

        $this->cutPartContent($articles, 150);

        $data = array(
                    'isAuth' => $isAuth,
                    'articles' => $articles,
                    'numbers' => $numbers,
                    'prev' => $number - 1,
                    'next' => $number + 1
                );

                // print_r($data[articles][0]);

        $this->view->render('articles.html.twig', $data);
    }

    private function cutPartContent($articles, $lenght)
    {
        foreach ($articles as $article) {
            $string = $article->content;

            if (strlen($string) > $lenght) {

                // truncate string
                $stringCut = mb_substr($string, 0, $lenght);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = mb_substr($stringCut, 0, strrpos($stringCut, ' ')).'...';

                $article->content = $string;
            }
        }
    }
}
