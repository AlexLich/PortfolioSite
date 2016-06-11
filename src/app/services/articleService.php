<?php
namespace App\Service;

class ArticleService
{
    protected $connect;

    function __construct()
    {
        $this->connect = new Connect();
    }

    public function getArticles()
    {
        $data = null;
        $sql="SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM msgs ORDER BY id DESC";
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            $pdo = null;
        }

        return $data;
    }

    public function addArticle($value='')
    {
        # code...
    }

    public function deleteArticle($id)
    {
        $count = 0;
        $sql = "DELETE FROM msgs WHERE id = $id";
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $count = $pdo->exec($sql);
        }
        echo $count;
        return $count;
    }
}
