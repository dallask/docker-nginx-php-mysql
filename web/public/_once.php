<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 23-May-18
 * Time: 14:51
 */
$LIMIT = 1000000;

$start = microtime(TRUE);

for ($i = 0; $i < $LIMIT; $i++) {
  if (!defined('index.php')) {
    require('index.php');
    define('index.php', 1);
  }
}

$mid = microtime(TRUE);

for ($i = 0; $i < $LIMIT; $i++) {
  require_once('index.php');
}

$end = microtime(TRUE);

printf("if defined\t%s\nrequire_once\t%s\n", $mid - $start, $end - $mid);