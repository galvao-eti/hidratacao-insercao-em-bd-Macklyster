<?php

namespace Macklyster\Traits;

/**
 * Trait para hidratar as entidades
 *
 * @author Macklyster Marteres <macklyster@gmail.com>
 */
trait Hydrator
{
    /**
     * Hidrata a entidade
     *
     * @param array $data
     * @return void
     */
    public function hydrate(array $data)
    {
        foreach ($data as $col => $val) {
            if (!property_exists($this->entity, $col)) {
                continue;
            }
            $this->entity->$col = $val;
        }
    }
}
