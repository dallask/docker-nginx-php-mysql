<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 19-Jun-18
 * Time: 13:11
 */

function exception_handler($exception) {
    echo "Неперехваченное исключение: " , $exception->getMessage(), "\n";
}

set_exception_handler('exception_handler');

throw new Exception('Неперехваченное исключение');
echo "Не выполнено\n";