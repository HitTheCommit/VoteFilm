<!DOCTYPE html>
<?php
	include('contadorVotos.php');
	
	include('conexion.php');
	session_start();
	$porCientos = contarVotos($host, $user, $pw, $db);
	

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="charset=UTF-8" />
	
		<!--jQuery-->
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<style>
			.messages { list-style-type: none; margin: 0; padding: 0; }
			.messages li { padding: 5px 10px; }
			.messages li:nth-child(odd) { background: #eee; }
			#resultados{
				margin-top: -1%;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row" style="margin-bottom:40px; margin-top:40px;">
				<div class="col-md-5">
					<h1>Votefilm <small>developer by <strong><a href="https://github.com/HitTheCommit">HitTheCommit</a></strong></small></h1>
				</div>
				<div class="col-md-6 col-md-offset-1">
				<?php 
					if(!isset($_SESSION['nombre'])){
				?>
						<form class="navbar-form navbar-left" action="form.php" method="post" name="frm">
								<input type="text" name="nombre" id="nombre" class="form-control" placeholder="User name">
								<input type="password" name="pwd" id="pwd" class="form-control" placeholder="password"><br>
								<input class="btn btn-info" type="submit" name ="entrar" value="Entrar">
								<input class="btn btn-info" type="submit" name="registrarse" value="Registrarse">
						</form>
				<?php
					}
					else
					{
						echo "<h3><small>Sesión iniciada como:</small> ".$_SESSION['nombre']."</h3>";
					}
				?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4" style="margin:0px;">
					<div class="panel panel-default">
						<div class="panel-heading align-center" style="text-align:center;">The revenant</div>
						<div class="panel-body">
							<div class="thumbnail">
								<img src="the-revenant.png" alt="The revenant" style="height:200px;">
								<div class="caption">
									<h3>Ficha:</h3>
									<p>...</p>
									<form  method="post" action="votoControl.php">
										<input class="btn btn-info" type="submit" name ="votTheRevenant" value="Votar">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4" style="margin:0px;">
					<div class="panel panel-default">
						<div class="panel-heading" style="text-align:center;">Brooklyn</div>
						<div class="panel-body">
							<div class="thumbnail">
								<img src="brooklyn.png" alt="Broklyn" style="height:200px;">
								<div class="caption">
									<h3>Ficha:</h3>
									<p>...</p>
									<form  method="post" action="votoControl.php">
										<input class="btn btn-info" type="submit" name ="votBrooklyn" value="Votar">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			
				<div id ="resultados"class="col-md-4"style="left:64%; position:fixed; width:29%;">
					<h4>Resultados de la votación:</h4>
					<h5>The Revenant</h5>
					<div class="progress">
						<div class="progress-bar" role="progressbar" <?php echo "aria-valuenow=" . $porCientos['0'] . "%;'"; ?> aria-valuemin="0" aria-valuemax="100" <?php echo "style='width:" . $porCientos['0'] . "%;'"; ?>>
							<?php echo $porCientos['0'] . '%'; ?>
						</div>
					</div>
					<h5>Brooklyn</h5>
					<div class="progress">
						<div class="progress-bar" role="progressbar" <?php echo "aria-valuenow=" . $porCientos['1'] . "%;'"; ?> aria-valuemin="0" aria-valuemax="100" <?php echo "style='width:" . $porCientos['1'] . "%;'"; ?>>
							<?php echo $porCientos['1'] . '%'; ?>
						</div>
					</div>
					<h5>El puente de los espías</h5>
					<div class="progress">
						<div class="progress-bar" role="progressbar" <?php echo "aria-valuenow=" . $porCientos['2'] . "%;'"; ?> aria-valuemin="0" aria-valuemax="100" <?php echo "style='width:" . $porCientos['2'] . "%;'"; ?>>
							<?php echo $porCientos['2'] . '%'; ?>
						</div>
					</div>
					<h5>Spotlight</h5>
					<div class="progress">
						<div class="progress-bar" role="progressbar" <?php echo "aria-valuenow=" . $porCientos['3'] . "%;'"; ?> aria-valuemin="0" aria-valuemax="100" <?php echo "style='width:" . $porCientos['3'] . "%;'"; ?>>
							<?php echo $porCientos['3'] . '%'; ?>
						</div>
					</div>
					<h5>The Big Short</h5>
					<div class="progress">
						<div class="progress-bar" role="progressbar" <?php echo "aria-valuenow=" . $porCientos['4'] . "%;'"; ?> aria-valuemin="0" aria-valuemax="100" <?php echo "style='width:" . $porCientos['4'] . "%;'"; ?>>
							<?php echo $porCientos['4'] . '%'; ?>
						</div>
					</div>
					<h5>Mad Max: Fury on Road</h5>
					<div class="progress">
						<div class="progress-bar" role="progressbar" <?php echo "aria-valuenow=" . $porCientos['6'] . "%;'"; ?> aria-valuemin="0" aria-valuemax="100" <?php echo "style='width:" . $porCientos['6'] . "%;'"; ?>>
							<?php echo $porCientos['6'] . '%'; ?>
						</div>
					</div>
					<h5>The Martian</h5>
					<div class="progress">
						<div class="progress-bar" role="progressbar" <?php echo "aria-valuenow=" . $porCientos['5'] . "%;'"; ?> aria-valuemin="0" aria-valuemax="100" <?php echo "style='width:" . $porCientos['5'] . "%;'"; ?>>
							<?php echo $porCientos['5'] . '%'; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="col-md-6" style="margin:0px;">
						<div class="panel panel-default">
							<div class="panel-heading" style="text-align:center;">El puente de los espías</div>
							<div class="panel-body">
								<div class="thumbnail">
									<img src="el-puente-de-los-espias.png" alt="El puente de los espías" style="height:200px;">
									<div class="caption">
										<h3>Ficha:</h3>
										<p>...</p>
										<form  method="post" action="votoControl.php">
											<input class="btn btn-info" type="submit" name ="votElPuenteDeLosEspias" value="Votar">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6" style="margin:0px;">
						<div class="panel panel-default">
							<div class="panel-heading" style="text-align:center;">Spotlight</div>
							<div class="panel-body">
								<div class="thumbnail">
									<img src="spotlight.png" alt="Spotlight" style="height:200px;">
									<div class="caption">
										<h3>Ficha:</h3>
										<p>...</p>
										<form  method="post" action="votoControl.php">
											<input class="btn btn-info" type="submit" name ="votSpotlight" value="Votar">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6" style="margin:0px;">
						<div class="panel panel-default">
							<div class="panel-heading" style="text-align:center;">The Big Short</div>
							<div class="panel-body">
								<div class="thumbnail">
									<img src="the big short.png" alt="The Big Short" style="height:200px;">
									<div class="caption">
										<h3>Ficha:</h3>
										<p>...</p>
										<form  method="post" action="votoControl.php">
											<input class="btn btn-info" type="submit" name ="votTheBigShort" value="Votar">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6" style="margin:0px;">
						<div class="panel panel-default">
							<div class="panel-heading" style="text-align:center;">Mad Max: Fury Road</div>
							<div class="panel-body">
								<div class="thumbnail">
									<img src="mad-max-fury-road.png" alt="Mad Max: Fury Road" style="height:200px;">
									<div class="caption">
										<h3>Ficha:</h3>
										<p>...</p>
										<form  method="post" action="votoControl.php">
											<input class="btn btn-info" type="submit" name ="votMadMax" value="Votar">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6" style="margin:0px;">
						<div class="panel panel-default">
							<div class="panel-heading" style="text-align:center;">The Martian</div>
							<div class="panel-body">
								<div class="thumbnail">
									<img src="martian.png" alt="The Martian" style="height:200px;">
									<div class="caption">
										<h3>Ficha:</h3>
										<p>...</p>
										<form  method="post" action="votoControl.php">
											<input class="btn btn-info" type="submit" name ="votMartian" value="Votar">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>