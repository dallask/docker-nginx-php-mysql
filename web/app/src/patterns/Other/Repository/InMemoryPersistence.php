<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Sep-18
 * Time: 11:33
 */

namespace Dallask\Patterns\Other\Repository;

/**
 * Class InMemoryPersistence
 *
 * @package Dallask\Patterns\Other\Repository
 */
class InMemoryPersistence implements Persistence {

  /**
   * @var array
   */
  private $data = [];

  /**
   * @var int
   */
  private $lastId = 0;

  /**
   * @return int
   */
  public function generateId(): int {
    $this->lastId++;

    return $this->lastId;
  }

  /**
   * @param array $data
   */
  public function persist(array $data) {
    $this->data[$this->lastId] = $data;
  }

  /**
   * @param int $id
   *
   * @return array
   */
  public function retrieve(int $id): array {
    if (!isset($this->data[$id])) {
      throw new \OutOfBoundsException(sprintf('No data found for ID %d', $id));
    }

    return $this->data[$id];
  }

  /**
   * @param int $id
   */
  public function delete(int $id) {
    if (!isset($this->data[$id])) {
      throw new \OutOfBoundsException(sprintf('No data found for ID %d', $id));
    }

    unset($this->data[$id]);
  }
}
