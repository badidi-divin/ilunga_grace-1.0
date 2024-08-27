<?php
	session_start();
	// Connection datatabase
	require_once '../bdd/connexion.php';
	require_once '../model/authentification.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width-device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.css">
	<style type="text/css">
		.space{
				margin-top: 50px;
			}
			.spac{
				margin-top: 80px;
			}
			.a{
				text-align:center;
				text-decoration: blink;
			}
	</style>
</head>
<body>
<div class="contenair space col-md-6 col-xd-12 col-md-offset-3">
	<!-- panel default ce n'est que la couleur qui va changer -->
	<div align="center">
			<h2>Bienvenue dans notre plateforme de publication de points des Elèves</h2>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="a" style="font-weight:bold; font-size: 40px;" style="backgroun-color:blue;color:white">AUTHENTIFICATION</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="">
				<div class="form-group">
					<label class="control-label">
						Nom d'utilisateur:
					</label>
					<input type="text" name="username" required="required" class="form-control">
				</div>
                <div class="form-group">
					<label class="control-label">
						Mot de passe:
					</label>
					<input type="password" name="mdp" required="required" class="form-control">
				</div>
				<div class="control-label a">
					<button type="submit" class="btn btn-danger" name="formconnect">Se Connecter</button>
				</div>
			</form>
			<?php
			if (isset($erreur)) {
				echo "<font color='red'>".$erreur."</font>";
			}
		?>
		</div>
	</div>
</div>
</body>
</html>
