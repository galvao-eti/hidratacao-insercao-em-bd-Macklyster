<?php

namespace Macklyster\Manager;

/**
 * Manager de produto
 *
 * @author Macklyster Marteres <macklyster@gmail.com>
 */
class Produto implements Manager
{
    /**
     * Model de produto
     *
     * @var \Macklyster\Model\Produto
     */
    private $model;

    /**
     * Metodo construtor
     *
     * @param \PDO $conn
     * @param \Macklyster\Entity\Produto $prod
     */
    public function __construct(\Macklyster\Model\Produto $prod)
    {
        $this->model = $prod;
    }

    /**
     * Salva o produto no banco de dados
     *
     * @return void
     */
    public function save()
    {
        $this->getModel()->save();
    }

    /**
     * Hidrata a entidade
     *
     * @return void
     */
    public function hydrate(array $data)
    {
        $this->getModel()->hydrate($data);
    }

    /**
     * Retorna o repositorio de produtos
     *
     * @return \Macklyster\Model\Produto
     */
    private function getModel():\Macklyster\Model\Produto
    {
        return $this->model;
    }
}
