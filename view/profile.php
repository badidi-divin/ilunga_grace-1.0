<?php
	session_start();
	require_once('../bdd/connexion.php');
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
			.space{
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
		<div align="center" style="	padding-top: 150px;">

			<h1 style="font-size: 45px;">
				Bienvenue  <?php echo $_SESSION['nom']; ?>
			</h1>
		</div>

		<div align="center">
			<h1 style="font-weight:bold;">RAPPORT</h1>

			<h3 style="font-size: 30px;font-weight: bold;">
				 (<?php
                $nblmd=$pdo->prepare('SELECT * FROM user');
                $nblmd->execute();
                $nblmd=$nblmd->fetchAll();
                                    echo count($nblmd);
                                ?>)NBRE ELEVES
             &nbsp;
			 (<?php
                $nblmd=$pdo->prepare('SELECT * FROM pourcentage');
                $nblmd->execute();
                $nblmd=$nblmd->fetchAll();
                                    echo count($nblmd);
                                ?>)POURCENTAGE
            </h3>
		</div>
	<!-- Circulation de la page -->
	</body>
</html>