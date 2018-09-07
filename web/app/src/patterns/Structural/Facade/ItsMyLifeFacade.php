<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 07-Sep-18
 * Time: 10:58
 */

namespace Dallask\Patterns\Structural\Facade;

/**
 * Class ItsMyLifeFacade
 *
 * @package Dallask\Patterns\Structural\Facade
 */
class ItsMyLifeFacade
{

    /**
     * @var \Dallask\Patterns\Structural\Facade\ItsMyLife
     */
    private $myLife;

    /**
     * ItsMyLifeFacade constructor.
     *
     * @param \Dallask\Patterns\Structural\Facade\ItsMyLife $myLife
     */
    public function __construct(ItsMyLife $myLife)
    {
        $this->myLife = $myLife;
    }

    /**
     * @return string
     */
    public function itsMyLife()
    {
        $itsMyLife = $this->myLife->stopFightingMe();
        $itsMyLife .= $this->myLife->stopYellingMe();
        $itsMyLife .= $this->myLife->stopTellingMe();
        $itsMyLife .= $this->myLife->stopSeeingMe();
        $itsMyLife .= $this->myLife->itsMyLife();

        return $itsMyLife;
    }
}