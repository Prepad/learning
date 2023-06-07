<?php
namespace App\Patterns\Structural\Adapter;

class Cable
{
    function touch(): void
    {
        echo 'Ouch';
    }
}