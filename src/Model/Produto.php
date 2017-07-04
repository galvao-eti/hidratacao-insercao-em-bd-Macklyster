<?php

namespace Macklyster\Model;

/**
 * Model da entidade produto
 *
 * @author Macklyster Marteres <macklyster@gmail.com>
 */
class Produto implements Model
{
    use \Macklyster\Traits\Hydrator;

    /**
     * Conexao PDO
     *
     * @var \PDO
     */
    private $conn;

    /**
     * Entidade de produto
     *
     * @var \Macklyster\Entity\Produto
     */
    private $entity;

    /**
     * Metodo construtor
     *
     * @param \PDO $conn
     * @param \Macklyster\Entity\Produto $produto
     */
    public function __construct(\PDO $conn, \Macklyster\Entity\Produto $produto)
    {
        $this->conn   = $conn;
        $this->entity = $produto;
    }

    /**
     * Salva o produto
     *
     * @return void
     */
    public function save()
    {
        $st = $this->conn->prepare( "INSERT INTO produto ( nome, valor ) VALUES ( :nome, :valor ) ");

        $st->bindParam(':nome', $this->entity->nome);
        $st->bindParam(':valor', $this->entity->valor);

        $st->execute();

        if ($st->errorCode() <> '00000') {
            throw new \Exception($st->errorInfo()[2]);
        }
    }
}
