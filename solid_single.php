<?php
require_once 'autoloader.php';

use App\Solid\Single\BadIdea\OrchestraMan;
use App\Solid\Single\GoodIdea\Harvester;
use App\Solid\Single\GoodIdea\Sewer;
use App\Solid\Single\GoodIdea\TrumpetPlayer;

$badIdea = new OrchestraMan();
$badIdea->harvest();
$badIdea->sewing();
$badIdea->trumpetPlaying();
echo '<br>';
$harvester = new Harvester();
$sewer = new Sewer();
$trumpetPlayer = new TrumpetPlayer();
$harvester->doWork();
echo '<br>';
$sewer->doWork();
echo '<br>';
$trumpetPlayer->doWork();