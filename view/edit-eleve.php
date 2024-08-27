<?php
	session_start();
	// Connection datatabase
	require_once '../bdd/connexion.php';
	require_once '../model/edit-eleve.php';
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width-device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.css">
	<style type="text/css">
		.spacer{
				margin-top: 10px;
			}
			.space{
				margin-top: 70px;
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
	<!-- Navigation -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!--cette class utilisé c pour avoir une barre de navigation horizontal -->
			<?php require_once('menu.php'); ?>
		</div>
	<!-- navigation end -->
<div class="contenair space col-md-6 col-xd-12 col-md-offset-3">
	<!-- panel default ce n'est que la couleur qui va changer -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="a">EDITION ELEVE </h3>
		</div>
		<div class="panel-body">
			<form method="post" action="" enctype="multipart/form-data">
			  <div class="form-group">
					<label class="control-label">
						NOM COMPLET:
					</label>
					<input type="text" name="nom_complet" required="required" class="form-control" value="<?= $userinfo['nom_complet'] ?>">
			  </div>
			  <div class="form-group">
					<label class="control-label">
						SEXE:
					</label>
					<select name="sexe" class="form-control" autocomplete="off" required="required">
						<option value="M">
							M
						</option>
						<option value="F">
							F
						</option>
					</select>
			  </div>
			  <div class="form-group">
					<label class="control-label">
						NIVEAU:
					</label>
					<select name="niveau" class="form-control" autocomplete="off" required="required">
						<option value="Secondaire">
							Secondaire
						</option>
						<option value="Humanité">
							Humanité
						</option>
					</select>
			  </div>
			   <div class="form-group">
					<label class="control-label">
						Option:
					</label>
					<select name="option" class="form-control" autocomplete="off" required="required">
					<option value="Aucune">
						Aucune
						</option>	
					<option value="Scientifique-Math-Physique">
						Scientifique-Math-Physique
						</option>
						<option value="Commerciale-Gestion">
						Commerciale-Gestion
						</option>
					
					<option value="Scientifique-Biochimie">
						Scientifique-Biochimie
						</option>
						<option value="Litteraire-LatinPhilo">
						Litteraire-LatinPhilo
						</option>
					</select>
			  </div>
			  <div class="form-group">
					<label class="control-label">
						Classe:
					</label>
					<select name="classe" class="form-control" autocomplete="off" required="required">
					<option value="7ème">
						7ème
						</option>	
					<option value="8ème">
						8ème
						</option>
						<option value="1ère">
						1ère
						</option>
					
					<option value="2ème">
						2ème
					</option>
					<option value="3ème">
						3ème
					</option>
					<option value="4ème">
						4ème
					</option>
					</select>
			  </div>
			  <div class="form-group">
					<label class="control-label">
						Année Scolaire:
					</label>
					<select name="annee" class="form-control" autocomplete="off" required="required">
					<option value="2024-2025">
						2024-2025
						</option>	
						<option value="2025-2026">
							2025-2026
						</option>
						<option value="2026-2027">
						2026-2027
						</option>
					</select>
			  </div>
				<div class="control-label a">
					<button type="submit" class="btn btn-primary" name="formconnect">Edition</button>
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
