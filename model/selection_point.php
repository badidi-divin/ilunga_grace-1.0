<?php  
	$mc=isset($_GET['motcle'])?$_GET['motcle']:"";
	$requete="SELECT * FROM pourcentage WHERE code_eleve LIKE '%$mc%'";	
	
	$resultat=$pdo->query($requete);
