<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 19-Jun-18
 * Time: 12:48
 */

// Отправляет уведомление посредством серверного лога, если мы не можем
// подключиться к базе данных.
error_log("База данных Oracle недоступна!", 0);

// Уведомить администратора по электронной почте, если невозможно выделить ресурсы для FOO
error_log("Большая проблема, мы выпали из FOO!", 1,
    "dallaskassel@gmail.com");

// другой способ вызвать error_log():
error_log("Error!!!\n", 3, "/var/tmp/my-errors.log");
