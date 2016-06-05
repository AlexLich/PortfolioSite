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

    public function getData()
    {
        return array(
                array(
                    'Name' => 'Акаманах',
                    'Description' => 'Проклятые дули'),
                array(
                    'Name' => 'Зарич',
                    'Description' => 'Проклятый двуручный меч')
                );
    }
    
    public function get_News()
    {
        $data = null;
//        echo 'porno';
        $sql="SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM msgs ORDER BY id DESC";
//        $sql = "select * from msgs";
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//            $st->execute();
//            $data = $st->fetchAll(PDO::FETCH_ASSOC);
            $pdo = null;
        }
        
        return $data;
    }
}