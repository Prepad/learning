<?php
namespace App\Patterns\Structural\Adapter;

use App\Patterns\Structural\Adapter\Interfaces\Socket;

class Device
{
    function getElectrecity(Socket $socket)
    {
        echo 'Brrrrrrrr';
    }
}