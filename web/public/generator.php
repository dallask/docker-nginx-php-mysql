<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 29-May-18
 * Time: 12:24
 */
function xrange($start, $limit, $step = 1) {
  if ($start < $limit) {
    if ($step <= 0) {
      throw new LogicException('Шаг должен быть положительным');
    }

    for ($i = $start; $i <= $limit; $i += $step) {
      yield $i;
    }
  } else {
    if ($step >= 0) {
      throw new LogicException('Шаг должен быть отрицательным');
    }

    for ($i = $start; $i >= $limit; $i += $step) {
      yield $i;
    }
  }
}

/* Обратите внимание, что и range() и xrange() дадут один и тот же вывод */

echo 'Нечетные однозначные числа с помощью range():  ';
foreach (range(1, 9, 2) as $number) {
  echo "$number ";
}
echo "\n";

echo 'Нечетные однозначные числа с помощью xrange(): ';
foreach (xrange(1, 9, 2) as $number) {
  echo "$number ";
}
