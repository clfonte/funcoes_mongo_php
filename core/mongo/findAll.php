<?php

function findAll($collection) {
    require_once __DIR__."/manager.php";

    // se tivesse opção de listar ativos e inativos
    // $db = new \MongoDB\Driver\Query(['ativo'=>true]);
    // para listar todos
    $db = new \MongoDB\Driver\Query([]);

    $cursor = $manager->executeQuery($collection, $db);

    // retorna valores salvos na var cursor 
    return $cursor;
}