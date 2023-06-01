<?php
namespace App\Oop;

use App\Oop\Tree;

class Maple extends Tree
{
    protected $leaves = 'Плоские зелёные штуки';

    public function winterCome()
    {
        echo 'Листья опадают <br>';
    }
}


