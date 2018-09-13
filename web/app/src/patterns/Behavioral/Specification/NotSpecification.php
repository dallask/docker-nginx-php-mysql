<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 13-Sep-18
 * Time: 09:22
 */

namespace Dallask\Patterns\Behavioral\Specification;

/**
 * Class NotSpecification
 *
 * @package Dallask\Patterns\Behavioral\Specification
 */
class NotSpecification implements SpecificationInterface
{

    /**
     * @var SpecificationInterface
     */
    private $specification;

    public function __construct(SpecificationInterface $specification)
    {
        $this->specification = $specification;
    }

    public function isSatisfiedBy(Item $item): bool
    {
        return !$this->specification->isSatisfiedBy($item);
    }
}