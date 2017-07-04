<?php

namespace Macklyster\Model;

/**
 * Interface das models
 *
 * @author Macklyster Marteres <macklyster@gmail.com>
 */
interface Model
{
    /**
     * Realiza o insert no banco de dados
     *
     * @return void
     */
    public function save();
}
