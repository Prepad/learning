<?php
require_once 'autoloader.php';

use App\Solid\OpenClosed\BadIdea\TrickyClass;
use App\Solid\OpenClosed\GoodIdea\EatFish;
use App\Solid\OpenClosed\GoodIdea\SitOnDick;

$soTricky = new TrickyClass();
$soTricky->takeAdvantage();
echo '<br>';
$eatFish = new EatFish();
$sitOnDick = new SitOnDick();
echo $eatFish->doTheTrick() . '<br>';
echo $sitOnDick->doTheTrick() . '<br>';