<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FuncionarioDAO {

    var $conexao;

    //conexão com o banco
    function FuncionarioDAO() {
        $this->conexao = mysqli_connect("localhost", "root", "", "gerenciador_de_produtos");
    }
    //inserir produto no banco de dados
    function inserir($produto) {
        $sql = "INSERT INTO produto (nome, desc, quantidade, preco) VALUES('$produto->nome', '$produto->descricao', '$produto->quantidade', '$produto->preco')";
        return mysqli_query($this->conexao, $sql);
    }

}
