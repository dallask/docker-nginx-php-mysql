<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Sep-18
 * Time: 11:30
 */

namespace Dallask\Patterns\Other\Repository;

/**
 * Interface Persistence
 *
 * @package Dallask\Patterns\Other\Repository
 */
interface Persistence {

  public function generateId(): int;

  public function persist(array $data);

  public function retrieve(int $id): array;

  public function delete(int $id);
}
