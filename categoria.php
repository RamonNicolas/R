<?php
	include_once './class/conecta.php';
	require_once("lib/raelgc/view/Template.php");
    use raelgc\view\Template;
    include_once 'html/top.html';
	$categoria = new Template("html/categoria.html");

	$projecao = ['_id' => 0];

	$prods = new Conectar();
	$prods->setServidor('localhost');
	$prods->setUserCon('root');
	$prods->setPwdCon('root');
	$prods->setBaseCon('admin');
	$prods->setCon([null], $projecao);
	$prods->setBaseCons('local.produtos');
	$categoria->nome_categoria = "Categoria";

	foreach ($prods->conecta() as $p) {
	    $categoria->numero_produto		= $p->numero_produto;
	    $categoria->nome_produto		= $p->nome_produto;
	    $categoria->valor_produto		= $p->valor_produto;
	    $categoria->descricao_produto	= $p->descricao_produto;
	    $categoria->minidesc_produto	= $p->minidesc_produto;
	    $categoria->link_produto 		= $p->link_produto;
	    $categoria->texto_motivacional	= $p->texto_motivacional;
	    $categoria->block("BLOCK_PRODUTOS");
		$categoria->block("BLOCK_MINIATURAS");
	}


	// $categoria->nome_categoria		= "Smartphones";
	// for($i=0; $i<9; $i++){
	// 	$categoria->numero_produto		= $i;
	// 	$categoria->nome_produto		= "Iphone 7 32GB";
	// 	$categoria->valor_produto		= 'R$2987,52';
	// 	$categoria->descricao_produto 	= "Descrição";
	// 	$categoria->minidesc_produto	= "Mini descrição produto";
	// 	$categoria->link_produto		= "categoria.php";
	// 	$categoria->texto_motivacional	= "texto motivacional";
	// 	$categoria->block("BLOCK_PRODUTOS");
	// 	$categoria->block("BLOCK_MINIATURAS");
	// }
    $categoria->show();
	include_once 'html/footer.html';
?>
