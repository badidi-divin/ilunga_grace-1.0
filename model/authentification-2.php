<?php

	if (isset($_POST['formconnect'])) {

		$code=htmlspecialchars($_POST['code']);


			// Vérification si l'utilisateur existe vraiment
			$requiser=$pdo->prepare("SELECT * FROM user WHERE code_eleve=?");
			$requiser->execute(array($code));
			// rowCount permet de compter le nombre saisie par le user
			$userexist=$requiser->rowCount();
			if ($userexist==1) {
				$userinfo=$requiser->fetch();
				$_SESSION['code']=$userinfo['code_eleve'];
				
				header("Location: profile-2.php");		
			}
			else
			{
				$erreur="Mauvais Pseudo ou mauvais mot de passe! ";
			}
			
		}
