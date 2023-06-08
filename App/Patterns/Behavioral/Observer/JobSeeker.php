<?php
namespace App\Patterns\Behavioral\Observer;

class JobSeeker
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function onJobPosted(JobPost $job)
    {
        echo 'Привет ' . $this->name . '! Появилась новая работа: '. $job->getTitle();
    }
}