<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 20-Aug-18
 * Time: 10:33
 */
$client = new SoapClient('http://webservices.amazon.com/AWSECommerceService/AWSECommerceService.wsdl');
var_dump($client->__getFunctions());
?>