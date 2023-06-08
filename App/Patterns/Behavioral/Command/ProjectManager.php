<?php
namespace App\Patterns\Behavioral\Command;

use App\Patterns\Behavioral\Command\Interfaces\Command;

class ProjectManager
{
    function workInstruction(Command $command)
    {
        $command->execute();
    }
}