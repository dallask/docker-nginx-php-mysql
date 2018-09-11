<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 11-Sep-18
 * Time: 10:57
 */

namespace Dallask\Patterns\Behavioral\Iterator;

/**
 * Class RadioStation
 *
 * @package Dallask\Patterns\Behavioral\Iterator
 */
class RadioStation
{

    /**
     * @var float
     */
    protected $frequency;

    /**
     * RadioStation constructor.
     *
     * @param float $frequency
     */
    public function __construct(float $frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * @return float
     */
    public function getFrequency(): float
    {
        return $this->frequency;
    }
}