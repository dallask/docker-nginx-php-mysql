<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 07-Sep-18
 * Time: 10:51
 */

namespace Dallask\Patterns\Structural\Facade;

/**
 * Class ItsMyLife
 *
 * @package Dallask\Patterns\Structural\Facade
 */
class ItsMyLife
{

    /**
     * @return string
     */
    public function stopFightingMe()
    {
        return 'Stop fighting me ';
    }

    /**
     * @return string
     */
    public function stopYellingMe()
    {
        return 'Stop yelling me ';
    }

    /**
     * @return string
     */
    public function stopTellingMe()
    {
        return 'Stop telling me ';
    }

    /**
     * @return string
     */
    public function stopSeeingMe()
    {
        return 'Stop seeing me ';
    }

    /**
     * @return string
     */
    public function itsMyLife()
    {
        return 'It\'s my life';
    }
}