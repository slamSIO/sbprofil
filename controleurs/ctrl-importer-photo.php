<?php

	
	if( ! isset( $_FILES[ 'photo' ] ) ){
		header( "Location: /clients/profil/photo/selection" ) ;
	}

	$dossier = "uploads/" ;
	$nomFichier = basename( $_FILES[ 'photo' ][ 'name' ] ) ;
	$chemin = $dossier . $nomFichier ;
	
	if( move_uploaded_file( $_FILES[ 'photo' ][ 'tmp_name' ] , $chemin ) ){
		echo "Téléversement réussi !";
	} 
	else {
		echo "Erreur lors du téléversement";
	}


?>
