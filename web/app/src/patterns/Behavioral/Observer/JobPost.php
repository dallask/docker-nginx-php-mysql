<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 13-Sep-18
 * Time: 08:54
 */

namespace Dallask\Patterns\Behavioral\Observer;

/**
 * Class JobPost
 *
 * @package Dallask\Patterns\Behavioral\Observer
 */
class JobPost
{

    protected $title;

    /**
     * JobPost constructor.
     *
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @param string $title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}