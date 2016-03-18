<?php

	include '../includes/inti.inc';
	require '../libs/Smarty.class.php';
	
	inti("polkadot");

	$smarty = new Smarty;
	$smarty->display('templates/index.tpl');

?>