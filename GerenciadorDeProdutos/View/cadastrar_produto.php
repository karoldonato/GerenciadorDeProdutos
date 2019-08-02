<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../Controller/ProdutoController.php';
?>

<html>
    <body>
        <form action="../Controller/ProdutoController.php" method="post">
            Nome: <input type="text" name="nome">
            <br>
            Descrição: <input type="text" name="descricao">
            <br>
            Quantidade: <input type="number" name="quantidade">
            <br>
            Preço: <input type="number" name="preco">
            <br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>

