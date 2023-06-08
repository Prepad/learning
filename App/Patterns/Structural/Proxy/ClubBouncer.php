<?php
namespace App\Patterns\Structural\Proxy;

use App\Patterns\Structural\Proxy\Interfaces\Security;

class ClubBouncer implements Security
{
    public function faceCheck(int $age): bool
    {
        return $age > 18;
    }
}