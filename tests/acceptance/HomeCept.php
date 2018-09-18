<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Проверить работу главной страницы.');

$I->amOnPage('/');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->see('no such file or directory'); // Фраза или ее часть с главной страницы
