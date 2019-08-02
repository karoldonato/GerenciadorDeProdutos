<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Produto {
    var $nome;
    var $descricao;
    var $quantidade;
    var $preco;
    
    function Produto($nome, $descricao, $quantidade, $preco) {
        $this->nome = $nome;
        $this->desc = $descricao;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }
    function getNome() {
        return $this->nome;
    }

    function getDesc() {
        return $this->descricao;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getPreco() {
        return $this->preco;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDesc($descricao) {
        $this->desc = $descricao;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }
    
}

