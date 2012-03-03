<?php

/*
  Configuration Settings

  This file will load all configuration files in the cfg/ folder.  Configuration
  file priority is determined by the prepended two-digit number (lower number is
  higher preference).
*/

	define ( 'CFG_ROOT', 'cfg/' );

	foreach( glob( CFG_ROOT . '*.php' ) as $filename ) {
		$filename = str_replace( CFG_ROOT, '', $filename );
		if( $filename != 'all.php' ) {
			require_once( $filename );
		}
	}

?>