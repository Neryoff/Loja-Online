<?php
class Pedido {
    private $cliente;
    private $produtos;

    public function __construct($cliente, $produtos) {
        $this->cliente = $cliente;
        $this->produtos = $produtos;
    }

    // Getters e Setters
    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function getProdutos() {
        return $this->produtos;
    }

    public function setProdutos($produtos) {
        $this->produtos = $produtos;
    }
}
?>
