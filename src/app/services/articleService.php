<?php
namespace App\Service;

use App\Config\Connect;
use App\Model;
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

    public function add($article)
    {
        $count = 0;
        $sql = "INSERT INTO articles (name, content) VALUES ('$article->name', '$article->content')";
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $count = $pdo->exec($sql);
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
        }
        return $count;
    }
}
