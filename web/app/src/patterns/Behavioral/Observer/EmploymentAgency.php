<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 13-Sep-18
 * Time: 09:01
 */

namespace Dallask\Patterns\Behavioral\Observer;

/**
 * Class EmploymentAgency
 *
 * @package Dallask\Patterns\Behavioral\Observer
 */
class EmploymentAgency
{

    /**
     * @var array
     */
    protected $observers = [];

    /**
     * @param \Dallask\Patterns\Behavioral\Observer\JobPost $jobPosting
     */
    protected function notify(JobPost $jobPosting)
    {
        foreach ($this->observers as $observer) {
            $observer->onJobPosted($jobPosting);
        }
    }

    /**
     * @param $observer
     */
    public function attach(JobSeeker $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @param \Dallask\Patterns\Behavioral\Observer\JobPost $jobPosting
     */
    public function addJob(JobPost $jobPosting)
    {
        $this->notify($jobPosting);
    }
}