<?php
	require_once("lib/raelgc/view/Template.php");
    use raelgc\view\Template;
    include_once 'html/top.html';
	$contato = new Template("html/contato.html");
    $contato->show();
    
	include_once 'html/footer.html';
?>
