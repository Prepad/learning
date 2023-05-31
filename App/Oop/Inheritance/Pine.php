<?
namespace App\Oop\Inheritance;

use App\Oop\Inheritance\Tree;

class Pine extends Tree
{
    protected $leaves = 'Зелёные иголки';

    public function winterCome()
    {
        echo 'Листья не опадают <br>';
    }
}