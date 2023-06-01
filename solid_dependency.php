<?php
require_once 'autoloader.php';

use App\Solid\DependencyInversion\BadIdea\Beer;
use App\Solid\DependencyInversion\BadIdea\Dude;

use App\Solid\DependencyInversion\GoodIdea\Esthete;
use App\Solid\DependencyInversion\GoodIdea\Whiskey;
use App\Solid\DependencyInversion\GoodIdea\Wine;

$someBeer = new Beer();
$someDude = new Dude($someBeer);

$someDude->drink();
echo '<br>';
$someWine = new Wine();
$oneEsthete = new Esthete($someWine);

$someWhiskey = new Whiskey();
$anotherAesthete = new Esthete($someWhiskey);

$oneEsthete->drink();
echo '<br>';
$anotherAesthete->drink();
echo '<br>';