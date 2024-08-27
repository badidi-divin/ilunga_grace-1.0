<?php
	session_start();
	// Connection datatabase
	require_once '../bdd/connexion.php';
	require_once '../model/ajout-point.php';
	
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
			<h3 class="a">AJOUT POURCENTAGE </h3>
		</div>
		<div class="panel-body">
			<form method="post" action="" enctype="multipart/form-data">
			  <div class="form-group">
					<label class="control-label">
						CODE ELEVE:
					</label>
					<select name="code_eleve" class="form-control">
							<?php
								$ps=$pdo->prepare("SELECT * FROM user");
								$ps->execute();
								?>
								<option disabled="disabled">
									Choisissez une rubrique
								</option>
								<?php
									while ($s=$ps->fetch(PDO::FETCH_OBJ)) {
								?>
								<option value="<?php echo $s->code_eleve; ?>">
									<?php echo $s->code_eleve."-Nom complet:".$s->nom_complet; ?>
								</option>
									<?php
									}
								?>
						</select>
			  </div>
			  <div class="form-group">
					<label class="control-label">
						DESIGNATION:
					</label>
					<select name="periode" class="form-control" autocomplete="off" required="required">
						<option value="1ère Période">
							1ère Période
						</option>
						<option value="1er Semestre">
                            1er Semestre
						</option>
                        <option value="2ème Période">
                            2ème Période
						</option>
                        <option value="2ème Semestre">
                            2ème Semestre
						</option>
					</select>
			  </div>
			  <div class="form-group">
					<label class="control-label">
						POINT(%):
					</label>
					<input type="number" name="point" required="required" class="form-control">
			  </div>
              <div class="form-group">
					<label class="control-label">
						OBSERVATION:
					</label>
					<input type="text" name="obs" required="required" class="form-control">
			  </div>
				<div class="control-label a">
					<button type="submit" class="btn btn-primary" name="formconnect">Enregistrer</button>
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
