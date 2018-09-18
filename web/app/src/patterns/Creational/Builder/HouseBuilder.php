<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-Aug-18
 * Time: 16:47
 */

namespace Dallask\Patterns\Creational\Builder;

class HouseBuilder extends AbstractBuilder
{
    public function buildBase(string $base)
    {
        return $base;
    }

    public function buildWall(string $wall)
    {
        return $wall;
    }

    public function buildRoof(string $roof)
    {
        return $roof;
    }
}