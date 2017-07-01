<?php
	include_once './class/conecta.php';

	$projecao = ['_id' => 0];

	$login = new Conectar();
	$login->setServidor('localhost');
	$login->setUserCon('root');
	$login->setPwdCon('root');
	$login->setBaseCon('admin');
	$login->setCon([null], $projecao);
	$login->setBaseCons('local.usuarios');



	foreach ($login->conecta() as $user) {

		if($_POST['exampleInputEmail1'] == $user->login) {
			if($_POST['exampleInputPassword1'] == $user->senha) {
				header("location: ./index.php");
				exit;
			}
		}
	}
	header("location: ./login.php");
?>