<?php

	if (isset($_POST['formconnect'])) {

		$username=htmlspecialchars($_POST['username']);

		$mdp=md5($_POST['mdp']);

		if (!empty($username) AND !empty($mdp)) {

			// Vérification si l'utilisateur existe vraiment
			$requiser=$pdo->prepare("SELECT * FROM admin WHERE username=? AND password=?");
			$requiser->execute(array($username,$mdp));
			// rowCount permet de compter le nombre saisie par le user
			$userexist=$requiser->rowCount();
			if ($userexist==1) {
				$userinfo=$requiser->fetch();
				$_SESSION['id_user']=$userinfo['id'];
				$_SESSION['nom']=$userinfo['username'];
				$_SESSION['password']=$userinfo['password'];
				
				header("Location: profile.php");		
			}
			else
			{
				$erreur="Mauvais Pseudo ou mauvais mot de passe! ";
			}
			
		}
		else
		{
			$erreur="Tous les champs doivent etre completés";
		}

	}