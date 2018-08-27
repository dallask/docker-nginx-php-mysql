<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-Aug-18
 * Time: 16:39
 */

namespace Dallask\Patterns\Creational\Builder;

abstract class AbstractBuilder
{
    public abstract function buildBase(string $base);

    public abstract function buildWall(string $wall);

    public abstract function buildRoof(string $roof);
}