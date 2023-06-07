<?php
namespace App\Patterns\Structural\Adapter;

use App\Patterns\Structural\Adapter\Interfaces\Socket;
use App\Patterns\Structural\Adapter\Cable;

class CableAdapter implements Socket
{
    protected $cable;

    public function __construct(Cable $cable) {
        $this->cable = $cable;
    }

    function putIn(): void
    {
        $this->cable->touch();
    }
}