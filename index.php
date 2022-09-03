<?php

include("Fatura.php");

//Objeto $Compra tem as características da classe Invoice
//Os dados são mostrados na ordem: id_produto, descricao, qtdeComprada, precoUnitario
$id = 1;
$desc = "GPU";
$qtde = 3;
$preco = 5000.00;

$Compra = new Fatura($id, $desc, $qtde, $preco);

//$Compra->id_produto = 1;
//$Compra->descricao = "Placa-mãe Asus";
//$Compra->qtdeComprada = 2;
//$Compra->precoUnitario = 10;

// Exibe os produtos:

echo "<p>Produtos:</p>";
echo "<ul>";
  echo "<li>ID do item: ".$Compra->id_produto."</li>";
	echo "<li>Descrição: ".$Compra->descricao."</li>";

//Se a quantidade não for positiva, ela deve ser configurada como 0

	echo "<li>Quantidade comprada: ".$Compra->qtdeComprada."</li>";

//Quando formatar usando o number_format dentro dos parênteses as informações tem que ser assim: ($variavel,quantos digitos são exibidos do lado direito da vírgula,"sinal usado para separar os decimais","sinal usado para separar o milhar")

		echo "<li>Preço Unitário: ".number_format($Compra->precoUnitario,2,",",".")."</li>";

echo "</ul>";

echo "<p>Valor total: " .number_format($Compra->totalFatura(),2,",",".")."</p>";