<?php
	include_once '../class/conecta.php';
	require_once("lib/raelgc/view/Template.php");
    use raelgc\view\Template;
    include_once 'html/top.html';
	$login = new Template("html/login.html");
    $login->show();

	include_once 'html/footer.html';
?>
