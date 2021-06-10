<?php

require "./vendor/autoload.php";

use src\CarrinhoCompra;

echo "<h3>Sem SRP</h3>";

$carrinho1 = new CarrinhoCompra;

// print_r($carrinho1->exibirItens());

$carrinho1->adicionaItem('Bicicleta', 500.00);
$carrinho1->adicionaItem('bola', 20.00);

// print_r($carrinho1->exibirItens());


echo "Valor Total " . $carrinho1->exibirValorTotal() . "<br />";

$carrinho1->confirmarPedido();

echo "Status:" . $carrinho1->exibirStatus();
