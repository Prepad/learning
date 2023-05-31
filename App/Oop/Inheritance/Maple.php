<?php
namespace App\Oop\Inheritance;

use App\Oop\Inheritance\Tree;

class Maple extends Tree
{
    protected $leaves = 'Плоские зелёные штуки';

    public function winterCome()
    {
        echo 'Листья опадают <br>';
    }
}


