<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 12-Sep-18
 * Time: 13:17
 */

namespace Dallask\Patterns\Behavioral\Observer\Tests;

use Dallask\Patterns\Behavioral\Observer\JobSeeker;
use Dallask\Patterns\Behavioral\Observer\EmploymentAgency;
use Dallask\Patterns\Behavioral\Observer\JobPost;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{

    public function testObserver()
    {
        // Create subscribers
        $johnDoe = new JobSeeker('John Doe');
        $janeDoe = new JobSeeker('Jane Doe');

        // Create publisher and attach subscribers
        $jobPostings = new EmploymentAgency();
        $jobPostings->attach($johnDoe);
        $jobPostings->attach($janeDoe);

        // Add a new job and see if subscribers get notified
        $jobPostings->addJob(new JobPost('Software Engineer'));

        $this->expectOutputString(
            'Hi John Doe! New job posted: Software Engineer' . PHP_EOL
            . 'Hi Jane Doe! New job posted: Software Engineer' . PHP_EOL
        );

        // Output
        // Hi John Doe! New job posted: Software Engineer
        // Hi Jane Doe! New job posted: Software Engineer
    }
}