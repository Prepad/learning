<?php

use App\Patterns\Structural\Adapter\Cable;
use App\Patterns\Structural\Adapter\CableAdapter;
use App\Patterns\Structural\Adapter\Device;
use App\Patterns\Structural\Adapter\UsaSocket;

require_once 'autoloader.php';

$cable = new Cable();
$adapter = new CableAdapter($cable);

$socket = new UsaSocket();

$device = new Device();
$device->getElectrecity($adapter);
echo '<br>';