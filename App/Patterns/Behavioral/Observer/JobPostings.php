<?php
namespace App\Patterns\Behavioral\Observer;

use App\Patterns\Behavioral\Observer\JobSeeker;

class JobPostings
{
    /** @var JobSeeker[] $seekers */
    protected $seekers = [];

    protected function notify(JobPost $jobPosting)
    {
        foreach ($this->seekers as $jobSeeker) {
            $jobSeeker->onJobPosted($jobPosting);
        }
    }

    public function attach(JobSeeker $jobSeeker)
    {
        $this->seekers[] = $jobSeeker;
    }

    public function addJob(JobPost $jobPosting)
    {
        $this->notify($jobPosting);
    }
}