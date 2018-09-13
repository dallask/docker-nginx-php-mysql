<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 13-Sep-18
 * Time: 08:57
 */

namespace Dallask\Patterns\Behavioral\Observer;

/**
 * Class JobSeeker
 *
 * @package Dallask\Patterns\Behavioral\Observer
 */
class JobSeeker
{

    /**
     * @var string
     */
    protected $name;

    /**
     * JobSeeker constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param \Dallask\Patterns\Behavioral\Observer\JobPost $job
     */
    public function onJobPosted(JobPost $job)
    {
        // Do something with the job posting
        echo 'Hi ' . $this->name . '! New job posted: ' . $job->getTitle() . PHP_EOL;
    }
}