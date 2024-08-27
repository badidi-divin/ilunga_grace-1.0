<?php
require_once('../bdd/connexion.php');

if (isset($_POST['formconnect'])) {
    //Lecture des données saisie par le user

    $code_eleve=htmlspecialchars($_POST['code_eleve']);
    $periode=htmlspecialchars($_POST['periode']);
    $point=htmlspecialchars($_POST['point']);
	$obs=htmlspecialchars($_POST['obs']);
    //Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("INSERT INTO pourcentage(periode,point,obs,code_eleve)VALUES(?,?,?,?)");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($periode,$point,$obs,$code_eleve);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
						<script type="text/javascript">
							alert('Enregistrement Effectué avec Succès!')
						</script>
						<script>
							window.open('points.php','_self')
						</script>
					<?php
					
						exit();

	}
  
	