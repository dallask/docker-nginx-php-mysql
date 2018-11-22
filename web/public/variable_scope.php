<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 22-Nov-18
 * Time: 15:46
 */

$a = 1;
include 'b.php';
echo '<br>';


//global
function test_global()
{
    global $global, $superglobal;

    $global = 'global' . '<br>';

    $superglobal = $_SERVER;
}

test_global();
//return global
echo $global;
print_r($superglobal);


//static
function test()
{
    $a = 0;
    echo $a . '<br>';
    $a++;
}

test();

function test_static()
{
    static $a = 0;
    echo $a . '<br>';
    $a++;
}

//return 0
test_static();
//return 1
test_static();
//return 2
test_static();