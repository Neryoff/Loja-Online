<?php
class Carrinho {
    private $produtos;

    public function __construct() {
        $this->produtos = array();
    }

    public function adicionarProduto($produto) {
        $this->produtos[] = $produto;
    }

    // Getter
    public function getProdutos() {
        return $this->produtos;
    }
}
?>
