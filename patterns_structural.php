<?php

use App\Patterns\Structural\Adapter\Cable;
use App\Patterns\Structural\Adapter\CableAdapter;
use App\Patterns\Structural\Adapter\Device;
use App\Patterns\Structural\Adapter\UsaSocket;
use App\Patterns\Structural\Bridge\Axe;
use App\Patterns\Structural\Bridge\Orc;
use App\Patterns\Structural\Bridge\Human;
use App\Patterns\Structural\Bridge\Sword;
use App\Patterns\Structural\Flyweight\Post;
use App\Patterns\Structural\Flyweight\Postman;
use App\Patterns\Structural\Proxy\Club;
use App\Patterns\Structural\Proxy\ClubBouncer;

require_once 'autoloader.php';

$cable = new Cable();
$adapter = new CableAdapter($cable);

$socket = new UsaSocket();

$device = new Device();
$device->getElectrecity($adapter);
echo '<br>';
$sword = new Sword();
$axe = new Axe();

$orc = new Orc($axe);
$human = new Human($sword);

$human->attack();
echo '<br>';
$orc->attack();
echo '<br>';

$post = new Post(new Postman());
$post->takePackage('игрушка', 'хуево-кукуево');
$post->takePackage('торт', 'хуево-кукуево');
$post->takePackage('подарок', 'хуево-кукуево');
$post->takePackage('пиво', 'кукуево-хуево');
$post->takePackage('пицца', 'кукуево-хуево');
$post->deliver();

$club = new Club(new ClubBouncer());
$club->attemptToEnter(15);
$club->attemptToEnter(20);
$club->attemptToEnter(35);
$club->attemptToEnter(17);
