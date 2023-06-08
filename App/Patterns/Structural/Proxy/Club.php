<?php
namespace App\Patterns\Structural\Proxy;

use App\Patterns\Structural\Proxy\ClubBouncer;

class Club
{
    protected ClubBouncer $clubBouncer;

    public function __construct(ClubBouncer $clubBouncer)
    {
        $this->clubBouncer = $clubBouncer;
    }

    function attemptToEnter(int $age)
    {
        if ($this->clubBouncer->faceCheck($age)) {
            echo 'проходи <br>';
        } else {
            echo 'проваливай <br>';
        }
    }
}