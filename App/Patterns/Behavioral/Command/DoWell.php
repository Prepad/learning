<?php
namespace App\Patterns\Behavioral\Command;

use App\Patterns\Behavioral\Command\Interfaces\Command;
use App\Patterns\Behavioral\Command\Programmer;

class DoWell implements Command
{
    protected Programmer $programmer;

    public function __construct(Programmer $programmer)
    {
        $this->programmer = $programmer;
    }

    public function execute()
    {
        $this->programmer->doWell();
    }

    public function undo()
    {
        $this->programmer->doNotBadly();
    }

    public function redo()
    {
        $this->programmer->doWell();
    }
}