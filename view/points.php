<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title> 
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.css">
</head>
	<style type="text/css">
		/** Pour creer un decallage **/
			.spacer{
				margin-top: 10px;
			}
			.divin{
				margin-top: 60px;
			}
			.spac{
				margin-top: 80px;
			}
			.a{
				text-align:center;
				text-decoration: blink;
			}
	</style>
	<body>
		<!-- Navigation -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!--cette class utilisé c pour avoir une barre de navigation horizontal -->
			<?php 	require_once('menu.php'); ?>
		</div>
	<!-- navigation end -->
<!-- navigation end -->
	<?php 
	    require_once("../bdd/connexion.php");
		require_once('../model/selection_point.php');
	?>
			<div class="contenair col-lg-12 col-md-6 divin">
		<div class="panel panel-primary ">
				<div class="panel-heading">
					Rechercher
				</div>
				<div class="panel-body">
			<form method="get" action="" class="form-inline">
						<div class="form-group">
							<label for="propri">Recherche:</label>
							<input type="text" name="motcle" class="form-control" placeholder="Mettez le mot clé..." value="<?php echo $mc ?>">
						</div>
						<button type="submit" class="btn btn-success">
						Rechercher</button>
						&nbsp;&nbsp;
						<a href="ajout-point.php" class="btn btn-primary">Ajouter</a>
						&nbsp;&nbsp;
					</form>
		</div>
			</div>
		<div align="center">

			<h1 style="font-size: 45px;">
				LISTE DES POINTS DES ELEVES
			</h1>
		</div>

			<div class="col-md-12 col-xs-12">
				<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
				<div class="panel panel-info spacer">
					<!-- titre dans bootstrap -->
					<div class="panel-heading">
						
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<div class="table-responsive table--no-card m-b-30">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>CODE</th><th>PERIODE</th><th>POINT</th><th>OBSERVATION</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($et=$resultat->fetch()){?>
								<tr>
								<td><?php  echo($et['code_eleve'])?></td>
								<td><?php  echo($et['periode'])?></td>
								<td><?php  echo($et['point'])?></td>
								<td><?php  echo($et['obs'])?></td>
								<!--liens -->
								<td><a onclick="return confirm('Etes-vous sûre...?');" href="../model/supprimer-point.php?id=<?php echo($et['id'])?>" class="btn btn-danger">Supprimer</a></td>
								<td></td>
											</tr>	
									<?php } ?>	
							</tbody>
						</table>
					</div>
					</div>
				</div>	
			</div>
	<!-- Circulation de la page -->
	</body>
</html>