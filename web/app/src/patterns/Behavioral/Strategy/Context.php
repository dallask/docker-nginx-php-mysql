<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 14-Sep-18
 * Time: 07:47
 */

namespace Dallask\Patterns\Behavioral\Strategy;

/**
 * Class Context
 *
 * @package Dallask\Patterns\Behavioral\Strategy
 */
class Context
{

    /**
     * @var ComparatorInterface
     */
    private $comparator;

    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $elements): array
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}