<?php

namespace src;

use src\CarrinhoCompra;

class Pedido
{
    private $status;
    private $carrinhoCompra;
    private $valorPedido;

    public function __construct()
    {
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->pedido = 0;
    }

    /**
     * Get the value of carrinhoCompra
     */
    public function getCarrinhoCompra()
    {
        return $this->carrinhoCompra;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    public function confirmar()
    {
        if ($this->carrinhoCompra->validarCarrinho()) {
            $this->setStatus('confirmado');
            return true;
        }

        return false;
    }
}
