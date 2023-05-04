<?php
    require('../conn.php');
    
    $nome_prod = $_POST['nome_prod'];
    $qtd_prod = $_POST['qtd_prod'];
    $valor_prod = $_POST['valor_prod'];
    $cat_prod = $_POST['cat_prod'];
    
    if(empty($nome_prod) || empty($qtd_prod) || empty($valor_prod) || empty($cat_prod)){
        echo "Você precisa preencher todos os campos";
    }else{
        $cad_produto = $pdo->prepare("INSERT INTO produtos (nome_produto, qtd_produto, valor_produto, 
        cat_produto) VALUES (:nome_prod, :qtd_prod, :valor_prod, :cat_prod)
        ");
        $cad_produto->execute(array(
            ':nome_prod' => $nome_prod,
            ':qtd_prod' => $qtd_prod,
            ':valor_prod' => $valor_prod,
            ':cat_prod' => $cat_prod
        ));
    }
?>