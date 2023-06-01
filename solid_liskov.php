<?php
require_once 'autoloader.php';

use App\Solid\Liskov\Awl;
use App\Solid\Liskov\Soap;

function work(string $stuff): void   
{
    echo $stuff . '<br>';
}

$awl = new Awl();
$soap = new Soap();

work($awl->doStuff());
work($soap->doStuff());