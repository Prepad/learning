<?php
require_once 'autoloader.php';

use App\Oop\Maple;
use App\Oop\Pine;

$maple = new Maple();

$maple->grow();
$maple->winterCome();

$pine = new Pine();
$pine->grow();
$pine->winterCome();