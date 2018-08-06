<?php
$value = 'что-то откуда-то';

setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);  /* срок действия 1 час */
setcookie("TestCookie", $value, time()+3600, "/~rasmus/", "example.com", 1);

?>
