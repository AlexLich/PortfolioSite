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

    public function paginate($number)
    {
        //Количетсво строк на странице
        $limit = 5;
        $total = $this->articleService->getCount();
        $numbers = (int) ($total / $limit) + 1;

        if ($number <= 1) {
            $number = 1;
        }

        //1 > 4, то установить 4
        if ($number > $numbers) {
            $number = $numbers;
        }

        //4 - 1 = 3
        $start = $number - 1;
        $start = $start * $limit;
        print_r($start);
        $articles = $this->articleService->getSegment($start, $limit);

        $data = array(
                    'articles' => $articles,
                    'numbers' => $numbers,
                    'prev' => $number - 1,
                    'next' => $number + 1
                );


        // print_r($data);
        $this->view->render('articles.html.twig', $data);
    }
}
