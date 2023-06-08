<?php
require_once 'autoloader.php';

use App\Patterns\Behavioral\Chain\Brantozybra;
use App\Patterns\Behavioral\Chain\HeavyCudgel;
use App\Patterns\Behavioral\Chain\NormalCudgel;
use App\Patterns\Behavioral\Chain\SmallCudgel;
use App\Patterns\Behavioral\Command\DoNotBadly;
use App\Patterns\Behavioral\Command\DoWell;
use App\Patterns\Behavioral\Command\Programmer;
use App\Patterns\Behavioral\Command\ProjectManager;

$brantozyabra = new Brantozybra(500);
$smallCudgel = new SmallCudgel(100);
$normalCudgel = new NormalCudgel(300);
$heavyCudgel = new HeavyCudgel(600);

$smallCudgel->setNext($normalCudgel);
$normalCudgel->setNext($heavyCudgel);

$smallCudgel->knock($brantozyabra);

$programmer = new Programmer();

$doWell = new DoWell($programmer);
$doNotBadly = new DoNotBadly($programmer);
$pm = new ProjectManager();
$pm->workInstruction($doWell);
$pm->workInstruction($doNotBadly);