<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>SB - Profil</title>
	</head>
	<body>
		
		<form action="/clients/profil/photo/importer" method="POST" enctype="multipart/form-data">
			
			<label>Choisir un fichier :</label>
			<br/>
			<input type="file" name="photo" required>
			
			<br/><br/>
			<button type="submit">Importer</button>
			
		</form>

		
	</body>
	
</html>
