<?php
namespace App\Service;

use App\Config\Connect;
use App\Model\Article;
use PDO;

class ArticleService
{
    protected $connect;

    function __construct()
    {
        $this->connect = new Connect();
    }

    public function getAll()
    {
        $data = null;
        $sql="SELECT id, name, content, UNIX_TIMESTAMP(datetime) as dt FROM articles ORDER BY id DESC";
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $data = $pdo->query($sql)->fetchAll(PDO::FETCH_CLASS, "App\\Model\\Article");
            $pdo = null;
        }

        return $data;
    }

    public function getById($id)
    {
        $data = null;
        $sql="SELECT id, name, content, UNIX_TIMESTAMP(datetime) as dt FROM articles where id='$id'";

        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $data = $pdo->query($sql)->fetch();
            $pdo = null;
        }

        $article = new Article();

        $article->id = $data["id"];
        $article->name = $data["name"];
        $article->content = $data["content"];

        return $article;
    }

    public function add($article)
    {
        $count = 0;
        $sql = "INSERT INTO articles (name, content) VALUES ('$article->name', '$article->content')";
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $count = $pdo->exec($sql);
            $pdo = null;
        }
        return $count;
    }

    public function delete($id)
    {
        $count = 0;
        $sql = "DELETE FROM articles WHERE id = $id";
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $count = $pdo->exec($sql);
            $pdo = null;
        }
        return $count;
    }

    public function save($article)
    {
        $count = 0;

        $sql ="UPDATE articles set name='$article->name', content='$article->content' where id='$article->id'";

        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $count = $pdo->exec($sql);
            $pdo = null;
        }
        return $count;
    }

    public function getCount()
    {
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $count = $pdo->query('SELECT count(*) FROM articles')->fetchColumn();
            $pdo = null;
        }
        return (int) $count;
    }

    public function getSegment($start, $limit)
    {
        $data = null;
        $sql="SELECT id, name, content, UNIX_TIMESTAMP(datetime) as dt FROM articles LIMIT $start, $limit";
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $data = $pdo->query($sql)->fetchAll(PDO::FETCH_CLASS, "App\\Model\\Article");
            $pdo = null;
        }

        return $data;
    }
}
