<?php

namespace Macklyster\Entity;

/**
 * Entidade de produto
 *
 * @author Macklyster Marteres <macklyster@gmail.com>
 */
class Produto
{
    /**
     * Identificacao do produto
     *
     * @var int
     */
    public $id;

    /**
     * Nome
     *
     * @var string
     */
    public $nome;

    /**
     * Valor
     *
     * @var float
     */
    public $valor;
}
