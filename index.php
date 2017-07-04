<?php

require 'vendor/autoload.php';

$config = json_decode(file_get_contents('config.json'));

$conn = new Macklyster\Connection\Database($config->user, $config->pass, $config->database, $config->host, $config->port);

$produtoModel = new Macklyster\Model\Produto($conn->getConnection(), new Macklyster\Entity\Produto);
$produtoManager = new Macklyster\Manager\Produto($produtoModel);
$produtoManager->hydrate([
    'nome' => 'Cerveja Franziskaner Kristall Klar 500ml',
    'valor' => 17.90
]);

$usuarioModel = new Macklyster\Model\Usuario($conn->getConnection(), new Macklyster\Entity\Usuario);
$usuarioManager = new Macklyster\Manager\Usuario($usuarioModel);
$usuarioManager->hydrate([
    'email' => 'macklyster@gmail.com',
    'usuario' => 'macklyster',
    'senha' => 'pos'
]);

try {
    $conn->getConnection()->beginTransaction();

    $produtoManager->save();
    $usuarioManager->save();

    $conn->getConnection()->commit();

    echo 'Salvo com sucesso';
} catch (Exception $e) {
    $conn->getConnection()->rollBack();

    echo $e->getMessage();
}
