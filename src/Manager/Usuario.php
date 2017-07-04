<?php

namespace Macklyster\Manager;

/**
 * Manager de usuario
 *
 * @author Macklyster Marteres <macklyster@gmail.com>
 */
class Usuario implements Manager
{
    /**
     * Model de usuario
     *
     * @var \Macklyster\Model\Usuario
     */
    private $model;

    /**
     * Metodo construtor
     *
     * @param \PDO $conn
     * @param \Macklyster\Entity\Usuario $usuario
     */
    public function __construct(\Macklyster\Model\Usuario $usuario)
    {
        $this->model = $usuario;
    }

    /**
     * Salva o usuario no banco de dados
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
     * Retorna o repositorio de usuarios
     *
     * @return \Macklyster\Model\Usuario
     */
    private function getModel():\Macklyster\Model\Usuario
    {
        return $this->model;
    }
}
