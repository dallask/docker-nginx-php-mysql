<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 22-Nov-18
 * Time: 15:27
 */

//fatal error
echo print_r(require_once('index_not_exist.php'));
echo "<br>";

//return 1 and included content
echo print_r(require_once('including.php'));
echo "<br>";

//return 1 without included content
echo print_r(require_once('including.php'));
echo "<br>";