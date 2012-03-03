<?php

	require_once( 'lib/smarty/Smarty.class.php' );
	$smarty = new Smarty();

	$smarty->setTemplateDir( 'tpl' );
	$smarty->setCompileDir( 'lib/smarty/templates_c' );
	$smarty->setConfigDir( 'lib/smarty/configs' );
	$smarty->setCacheDir( 'lib/smarty/cache' );
?>