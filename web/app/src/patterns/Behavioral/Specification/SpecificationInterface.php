<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 13-Sep-18
 * Time: 09:19
 */

namespace Dallask\Patterns\Behavioral\Specification;

/**
 * Interface SpecificationInterface
 *
 * @package Dallask\Patterns\Behavioral\Specification
 */
interface SpecificationInterface
{
    public function isSatisfiedBy(Item $item): bool;
}