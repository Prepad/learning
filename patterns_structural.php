<?php

use App\Patterns\Structural\Adapter\Cable;
use App\Patterns\Structural\Adapter\CableAdapter;
use App\Patterns\Structural\Adapter\Device;
use App\Patterns\Structural\Adapter\UsaSocket;
use App\Patterns\Structural\Bridge\Axe;
use App\Patterns\Structural\Bridge\Orc;
use App\Patterns\Structural\Bridge\Human;
use App\Patterns\Structural\Bridge\Sword;

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
