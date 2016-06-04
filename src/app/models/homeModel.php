<?php
namespace App\Model;

use App\Core\Model;

class HomeModel extends Model
{
    function __construct()
    {

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
}
