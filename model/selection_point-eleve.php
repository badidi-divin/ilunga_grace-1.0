<?php  
	$mc=isset($_SESSION['code']);
	$requete="SELECT * FROM pourcentage WHERE code_eleve LIKE '%$mc%'";	
	
	$resultat=$pdo->query($requete);
