<?php
// Generation Matricule
    require_once('../bdd/connexion.php');
    $requser=$pdo->prepare("SELECT * FROM user WHERE code_eleve=?");
    $requser->execute(array($_GET['id']));
    $userinfo=$requser->fetch();

	// End Generation
if (isset($_POST['formconnect'])) {
    //Lecture des données saisie par le user

	$nom_complet=htmlspecialchars($_POST['nom_complet']);
    $sexe=htmlspecialchars($_POST['sexe']);
    $niveau=htmlspecialchars($_POST['niveau']);
	$classe=htmlspecialchars($_POST['classe']);
	$option=htmlspecialchars($_POST['option']);
	$annee=htmlspecialchars($_POST['annee']);
    //Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("UPDATE user SET nom_complet=?,sexe=?,niveau=?,option=?,annee_scolaire=?,classe=? WHERE code_eleve=?");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($nom_complet,$sexe,$niveau,$option,$annee,$classe,$_GET['id']);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
						<script type="text/javascript">
							alert('Edition Effectué avec Succès!')
						</script>
						<script>
							window.open('eleve.php','_self')
						</script>
					<?php
					
						exit();

	}
  
	