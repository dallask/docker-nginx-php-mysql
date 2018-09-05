<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 14:22
 */

namespace Dallask\Patterns\Structural\Bridge;

interface WebPageInterface
{
    public function __construct(ThemeInterface $theme);

    public function getPage();
}