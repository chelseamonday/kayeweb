<?php

	function classLoader( $className ) {
		require_once 'lib/classes/' . $className . '.class.php';
	}

	spl_autoload_register( 'classLoader' );

?>