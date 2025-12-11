<?php
	
	$route = parse_url( $_SERVER[ 'REQUEST_URI' ] , PHP_URL_PATH ) ;

	if( $route == '/' ){
		header( "Location: /clients/profil/photo/selection" ) ;
	}
	elseif( $route == '/clients/profil/photo/selection' ){
		require "vues/vue-selection-photo.php" ;
	}
	elseif( $route == '/clients/profil/photo/importer' ){
		require "controleurs/ctrl-importer-photo.php" ;
	}
	else {
		require substr( $route , 1 ) ;
	}
?>
