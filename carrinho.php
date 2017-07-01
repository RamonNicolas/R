<?php
	require_once("lib/raelgc/view/Template.php");
    use raelgc\view\Template;
    include_once 'html/top.html';
	$carrinho = new Template("html/carrinho.html");
    $carrinho->show();
    
	include_once 'html/footer.html';
?>
