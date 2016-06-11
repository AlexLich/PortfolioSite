<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\NewsModel;

class delNewsController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new NewsModel();
    }

    public function index()
    {
        $data = $this->model->getData();
        $this->view->generate('delnewsView.php', $data);
    }

    public function getNews()
    {
        $data = $this->model->get_News();
        $this->view->generate('delnewsView.php', $data);
    }

    public function deleteNew($id) {
        $count = $this->model->deleteNew($id);

        //Todo: Нужен редирект или сообщение об успешном удалении записи.
        if ($count > 0) {
            header("Location: /delnews");
        }
        $this->getNews();
    }
}
