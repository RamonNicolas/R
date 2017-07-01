<?php
	require_once("lib/raelgc/view/Template.php");
    use raelgc\view\Template;
    include_once 'html/top.html';
	$index = new Template("html/index.html");
    $index->show();
    
	include_once 'html/footer.html';
?>
