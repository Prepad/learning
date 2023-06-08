<?php
namespace App\Patterns\Behavioral\Iterator;

use Countable;
use Iterator;
use App\Patterns\Behavioral\Iterator\Bed;

class Masha implements Countable, Iterator
{
    /** @var Bed $stations */
    protected $beds = [];

    /** @var int $counter */
    protected $counter;

    public function addStation(Bed $bed)
    {
        $this->beds[] = $bed;
    }

    public function removeStation(Bed $bed)
    {
        $toRemoveSoftness = $bed->getSoftness();
        $this->beds = array_filter($this->beds, function (Bed $bed) use ($toRemoveSoftness) {
            return $bed->getSoftness() !== $toRemoveSoftness;
        });
    }

    public function count(): int
    {
        return count($this->beds);
    }

    public function current(): Bed
    {
        return $this->beds[$this->counter];
    }

    public function key()
    {
        return $this->counter;
    }

    public function next(): void
    {
        $this->counter++;
    }

    public function rewind(): void
    {
        $this->counter = 0;
    }

    public function valid(): bool
    {
        return isset($this->beds[$this->counter]);
    }
}