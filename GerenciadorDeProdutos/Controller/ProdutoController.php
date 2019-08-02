<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../Model/Produto.php';
require '../Model/ProdutoDAO.php';

class ProdutoController {
    var $produto;
    var $produtoDAO;
    
    public function inserirProduto($nome, $descricao, $quantidade, $preco) {
        $this->produto = new Produto($nome, $descricao, $quantidade, $preco);
        $this->produtoDAO = new ProdutoDAO();
        return $this->produtoDAO->inserir($this->produto);
    }
}
$produtoController = new ProdutoController();
if(isset($_POST['nome']) && isset($_POST['descricao']) && isset($_POST['quantidade']) && isset($_POST['preco'])) {
    $result = $produtoController->inserirProduto($_POST['nome'], $_POST['descricao'], $_POST['quantidade'], $_POST['preco']);
}
