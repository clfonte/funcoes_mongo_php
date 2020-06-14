<?php

require_once __DIR__."/../../core/mongo/insert.php";

$obj =['nome'=>$_POST['nome'],'cpf'=>$_POST['cpf'],'email'=>$_POST['email']];

$collection = 'ecommerce.usuarios';
    
insert($obj, $collection);

echo "<script>location.href='usuarios'</script>";