<?
namespace App\Oop;

use App\Oop\Tree;

class Pine extends Tree
{
    protected $leaves = 'Зелёные иголки';

    public function winterCome()
    {
        echo 'Листья не опадают <br>';
    }
}