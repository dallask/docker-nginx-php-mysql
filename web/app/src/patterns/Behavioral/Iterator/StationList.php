<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 11-Sep-18
 * Time: 10:59
 */

namespace Dallask\Patterns\Behavioral\Iterator;

/**
 * Class StationList
 *
 * @package Dallask\Patterns\Behavioral\Iterator
 */
class StationList implements \Iterator, \Countable
{

    /**
     * @var array
     */
    private $stations = [];

    /**
     * @var
     */
    private $counter;

    /**
     * @param \Dallask\Patterns\Behavioral\Iterator\RadioStation $station
     */
    public function addStation(RadioStation $station)
    {
        $this->stations[] = $station;
    }

    /**
     * @param \Dallask\Patterns\Behavioral\Iterator\RadioStation $toRemove
     */
    public function removeStation(RadioStation $toRemove)
    {
        $toRemoveFrequency = $toRemove->getFrequency();
        $this->stations = array_filter(
            $this->stations,
            function (RadioStation $station) use ($toRemoveFrequency) {
                return $station->getFrequency() !== $toRemoveFrequency;
            }
        );
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->counter;
    }

    /**
     * @return \Dallask\Patterns\Behavioral\Iterator\RadioStation
     */
    public function current(): RadioStation
    {
        return $this->stations[$this->counter];
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->stations);
    }

    public function next()
    {
        $this->counter++;
    }

    public function rewind()
    {
        $this->counter = 0;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->stations[$this->counter]);
    }
}