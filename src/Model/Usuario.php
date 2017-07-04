<?php

namespace Macklyster\Model;

/**
 * Model da entidade Usuario
 *
 * @author Macklyster Marteres <macklyster@gmail.com>
 */
class Usuario implements Model
{
    use \Macklyster\Traits\Hydrator;

    /**
     * Conexao PDO
     *
     * @var \PDO
     */
    private $conn;

    /**
     * Entidade de usuario
     *
     * @var \Macklyster\Entity\Usuario
     */
    private $entity;

    /**
     * Metodo construtor
     *
     * @param \PDO $conn
     * @param \Macklyster\Entity\Usuario $usuario
     */
    public function __construct(\PDO $conn, \Macklyster\Entity\Usuario $usuario)
    {
        $this->conn   = $conn;
        $this->entity = $usuario;
    }

    /**
     * Salva o usuario
     *
     * @return void
     */
    public function save()
    {
        $st = $this->conn->prepare( "INSERT INTO usuario ( email, usuario, senha ) values ( :email, :usuario, :senha )" );

        $st->bindParam(':email', $this->entity->email);
        $st->bindParam(':usuario', $this->entity->usuario);
        $st->bindParam(':senha', $this->entity->senha);

        $st->execute();

        if ($st->errorCode() <> '00000') {
            throw new \Exception($st->errorInfo()[2]);
        }
    }
}
