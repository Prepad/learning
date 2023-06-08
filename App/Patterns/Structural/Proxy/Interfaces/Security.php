<?php
namespace App\Patterns\Structural\Proxy\Interfaces;

interface Security
{
    function faceCheck(int $age): bool;
}