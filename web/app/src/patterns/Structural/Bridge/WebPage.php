<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 05-Sep-18
 * Time: 14:24
 */

namespace Dallask\Patterns\Structural\Bridge;

class WebPage implements WebPageInterface
{
    private $theme;

    public function __construct(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }

    public function getPage()
    {
        return "Web Page in " . $this->theme->getColor() . " color";
    }
}