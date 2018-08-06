<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 06-Aug-18
 * Time: 16:23
 */


/*
 * Dont forget add www.test131313.com to hosts file
 */
if(isset($_GET['theme'])){
  setcookie("theme", $_GET['theme'], time()+3600);
}

