<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 22-Jun-18
 * Time: 11:34
 */

$xml = new XMLReader();
$xml->open( 'data.xml' );
while( $xml->read() ) {
    if( 'product' === $xml->name ) {
        printf( '<hr>%3$s ist ein %1$s und hat eine Steuer von %2$d<br>', $xml->name, $xml->getAttribute('tax'), $xml->getAttribute('name') );
        $xml->next();
    }
}