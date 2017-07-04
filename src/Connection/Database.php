<?php

namespace Macklyster\Connection;

/**
 * Conexao com banco de dados
 *
 * @author Macklyster Marteres <macklyster@gmail.com>
 */
class Database implements DB
{
    /**
     * Conexao com banco de dados
     *
     * @var \PDO
     */
    private $connection;

    /**
     * Metodo construtor
     *
     * @param string $user
     * @param string $pass
     * @param string $database
     * @param string $host
     * @param int $port
     */
    public function __construct(string $user, string $pass, string $database, string $host, int $port)
    {
        $this->connection = new \PDO("mysql:host=$host;port=$port;dbname=$database;", $user, $pass);
    }

    /**
     * Retorna a conexao
     *
     * @return \PDO
     */
    public function getConnection():\PDO
    {
        return $this->connection;
    }
}
