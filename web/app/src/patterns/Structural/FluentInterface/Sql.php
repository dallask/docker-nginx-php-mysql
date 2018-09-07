<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 07-Sep-18
 * Time: 11:21
 */

namespace Dallask\Patterns\Structural\FluentInterface;

/**
 * Class Sql
 *
 * @package Dallask\Patterns\Structural\FluentInterface
 */
class Sql
{

    /**
     * @var array
     */
    private $fields = [], $from = [], $where = [];

    /**
     * @param array $fields
     *
     * @return $this
     */
    public function select(array $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @param string $table
     * @param string $alias
     *
     * @return $this
     */
    public function from(string $table, string $alias)
    {
        $this->from[] = $table . ' AS ' . $alias;

        return $this;
    }

    /**
     * @param string $condition
     *
     * @return $this
     */
    public function where(string $condition)
    {
        $this->where[] = $condition;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            join(', ', $this->fields),
            join(', ', $this->from),
            join(' AND ', $this->where)
        );
    }
}
