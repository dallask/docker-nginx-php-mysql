<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 22-Jun-18
 * Time: 11:43
 */

$string = <<<XML
<a>
 <b>
  <c>текст</c>
  <c>вещь</c>
 </b>
 <d>
  <c>код</c>
 </d>
</a>
XML;

$xml = new SimpleXMLElement($string);

/* Поиск <a><b><c> */
$result = $xml->xpath('/a/b/c');

while(list( , $node) = each($result)) {
    echo '/a/b/c: ',$node,"<br />\n";
}

/* Относительные пути также работают... */
$result = $xml->xpath('b/c');

while(list( , $node) = each($result)) {
    echo 'b/c: ',$node,"<br />\n";
}