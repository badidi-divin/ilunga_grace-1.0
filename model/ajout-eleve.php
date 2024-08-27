<?php
require_once('../bdd/connexion.php');
// Generation Matricule
	$code=strtoupper(substr(md5(uniqid(rand())), 0, 3)).date('d-m-y');;
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
	$ps=$pdo->prepare("INSERT INTO user(code_eleve,nom_complet,sexe,niveau,option,annee_scolaire,classe)VALUES(?,?,?,?,?,?,?)");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($code,$nom_complet,$sexe,$niveau,$option,$annee,$classe);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
						<script type="text/javascript">
							alert('Enregistrement Effectué avec Succès!')
						</script>
						<script>
							window.open('eleve.php','_self')
						</script>
					<?php
					
						exit();

	}
  
	