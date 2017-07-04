<?php

namespace Macklyster\Entity;

/**
 * Entidade de usuário
 *
 * @author Macklyster Marteres <macklyster@gmail.com>
 */
class Usuario
{
    /**
     * Identificacao do usuario
     *
     * @var int
     */
    public $id;

    /**
     * E-mail
     *
     * @var string
     */
    public $email;

    /**
     * Usuario
     *
     * @var string
     */
    public $usuario;

    /**
     * Senha
     *
     * @var string
     */
    public $senha;

}
