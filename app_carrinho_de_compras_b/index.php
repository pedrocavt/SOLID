<?php

require "./vendor/autoload.php";

use src\CarrinhoCompra;
use src\Item;
use src\Pedido;
use src\Email;
use src\EmailService;

echo "<h3>Com SRP</h3>";

$pedido = new Pedido();
//-----------------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Copo');
$item1->setValor(8.99);

$item2->setDescricao('Prato');
$item2->setValor(10.99);
//-----------------------------------
echo "<h4>Pedido Iniciado</h4>";
echo '<pre>';
print_r($pedido);
echo '</pre>';
//-----------------------------------
$pedido->getCarrinhoCompra()->adicionaItem($item1);
$pedido->getCarrinhoCompra()->adicionaItem($item2);
//-----------------------------------
echo "<h4>Pedido Com Itens</h4>";
echo '<pre>';
print_r($pedido);
echo '</pre>';
//-----------------------------------
echo "<h4>Itens do carrinho</h4>";
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';
//-----------------------------------
echo "<h4>Valor do pedido</h4>";
$total = 0;
foreach ($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
    $total += $item->getValor();
};
echo $total;
//-----------------------------------
echo "<h4>Validar Carrinho</h4>";
echo $pedido->getCarrinhoCompra()->validarCarrinho();
//-----------------------------------
echo "<h4>Confirmar Pedido</h4>";
echo $pedido->confirmar();
//-----------------------------------
echo "<h4>Confirmar Pedido</h4>";
echo $pedido->getStatus();
//-----------------------------------
echo "<h4>E-mail</h4>";
if ($pedido->getStatus() == 'confirmado') {
    echo EmailService::dispararEmail();
}
//-----------------------------------



// $carrinho1 = new CarrinhoCompra;

// // print_r($carrinho1->exibirItens());

// $carrinho1->adicionaItem('Bicicleta', 500.00);
// $carrinho1->adicionaItem('bola', 20.00);

// // print_r($carrinho1->exibirItens());


// echo "Valor Total " . $carrinho1->exibirValorTotal() . "<br />";

// $carrinho1->confirmarPedido();

// echo "Status:" . $carrinho1->exibirStatus();
