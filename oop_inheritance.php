<?php
require_once 'autoloader.php';

use App\Oop\Inheritance\Maple;
use App\Oop\Inheritance\Pine;

$maple = new Maple();

$maple->grow();
$maple->winterCome();

$pine = new Pine();
$pine->grow();
$pine->winterCome();