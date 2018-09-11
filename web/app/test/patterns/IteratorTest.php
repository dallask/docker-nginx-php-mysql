<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 11-Sep-18
 * Time: 11:06
 */

namespace Dallask\Patterns\Behavioral\Iterator;

use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{

    public function testRemoveStation()
    {
        $stationList = new StationList();

        $stationList->addStation(new RadioStation(89.0));
        $stationList->addStation(new RadioStation(101.0));
        $stationList->addStation(new RadioStation(102.0));
        $stationList->addStation(new RadioStation(103.2));

        $stationList->removeStation(new RadioStation(101));

        $frequenciesTest = [];

        foreach ($stationList as $station) {
            $this->assertInstanceOf('Dallask\Patterns\Behavioral\Iterator\RadioStation', $station);
            $frequenciesTest[] = $station->getFrequency();
        }

        $this->assertEquals([89.0, 102.0, 103.2], $frequenciesTest);
    }

    public function testAddStation()
    {
        $stationList = new StationList();

        $stationList->addStation(new RadioStation(89));
        $stationList->addStation(new RadioStation(101));
        $stationList->addStation(new RadioStation(102));
        $stationList->addStation(new RadioStation(103.2));

        $frequenciesTest = [];

        foreach ($stationList as $station) {
            $this->assertInstanceOf('Dallask\Patterns\Behavioral\Iterator\RadioStation', $station);
            $frequenciesTest[] = $station->getFrequency();
        }

        $this->assertEquals([89.0, 101.0, 102.0, 103.2], $frequenciesTest);
    }
}
