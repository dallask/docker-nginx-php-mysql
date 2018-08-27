<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-Aug-18
 * Time: 16:50
 */

namespace Dallask\Patterns\Creational\Builder;

class Director
{
    /**
     * @var Вuilder
     */
    protected $builder;

    public function __construct(AbstractBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function build()
    {
        $this->builder->buildBase('Base');
        $this->builder->buildWall('Wall');
        $this->builder->buildRoof('Roof');

        $return = $this->builder;

        return $return;
    }
}