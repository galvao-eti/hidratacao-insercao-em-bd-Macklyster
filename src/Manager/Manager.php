<?php

namespace Macklyster\Manager;

/**
 * Interface dos classes Manager
 *
 * @author Macklyster Marteres <macklyster@gmail.com>
 */
interface Manager
{
    /**
     * Metodo para salvar os dados
     *
     * @return void
     */
    public function save();

    /**
     * Hidrata a entidade com um array de valores
     *
     * @param array $data
     * @return void
     */
    public function hydrate(array $data);
}
