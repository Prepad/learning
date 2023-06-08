<?php
require_once 'autoloader.php';

use App\Patterns\Behavioral\Chain\Brantozybra;
use App\Patterns\Behavioral\Chain\HeavyCudgel;
use App\Patterns\Behavioral\Chain\NormalCudgel;
use App\Patterns\Behavioral\Chain\SmallCudgel;

$brantozyabra = new Brantozybra(500);
$smallCudgel = new SmallCudgel(100);
$normalCudgel = new NormalCudgel(300);
$heavyCudgel = new HeavyCudgel(600);

$smallCudgel->setNext($normalCudgel);
$normalCudgel->setNext($heavyCudgel);

$smallCudgel->knock($brantozyabra);