<?php
namespace App\Patterns\Structural\Adapter;

use App\Patterns\Structural\Adapter\Interfaces\Socket;

class UsaSocket implements Socket
{
    function putIn(): void
    {
        echo 'its work';
    }
}