<?php

require_once 'vendor/autoload.php';  

$produto = new \App\Model\Produto();
$produto->setId(1);
$produto->setNome("mouse gamer");
$produto->setDescricao("R$40");

$produtoDao = new \App\Model\ProdutoDao();
//$produtoDao->create($produto); 
//$produtoDao->update($produto);
//$produtoDao->delete(1);
$produtoDao->read();

foreach($produtoDao->read() as $produto):
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;

