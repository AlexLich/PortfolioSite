<?php

namespace App\Model;

use App\Config\Connect;
use App\Core\Model;
use PDO;

class NewsModel extends Model
{
    protected $connect;


    function __construct()
    {
        $this->connect = new Connect();
    }

    public function get_News()
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

    public function deleteNew($id)
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
