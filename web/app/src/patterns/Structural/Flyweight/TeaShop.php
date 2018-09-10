<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 10-Sep-18
 * Time: 11:11
 */

namespace Dallask\Patterns\Structural\Flyweight;

/**
 * Class TeaShop
 *
 * @package Dallask\Patterns\Structural\Flyweight
 */
class TeaShop
{

    /**
     * @var \Dallask\Patterns\Structural\Flyweight\TeaMaker
     */
    protected $teaMaker;

    /**
     * @var array
     */
    protected $orders = [];

    /**
     * TeaShop constructor.
     *
     * @param \Dallask\Patterns\Structural\Flyweight\TeaMaker $teaMaker
     */
    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    /**
     * @param string $type
     * @param int    $table
     */
    public function takeOrder(string $type, int $table)
    {
        $this->orders[$table] = $this->teaMaker->make($type);
    }

    /**
     * @return string
     */
    public function serve()
    {
        $result = '';
        foreach ($this->orders as $table => $order) {
            $result .= "Serving tea to table# " . $table . '; ';
        }
        return $result;
    }
}