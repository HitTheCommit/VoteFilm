<?php
	session_start();
	
	include("conexion.php");
	
	
	if(isset($_POST['votTheRevenant']) && isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])){
		$usuario = $_SESSION['nombre'];

		setVoto($usuario, 'The Revenant', $host, $user, $pw, $db);
		
	}
	if(isset($_POST['votBrooklyn']) && isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])){
		$usuario = $_SESSION['nombre'];

		setVoto($usuario, 'Brooklyn', $host, $user, $pw, $db);
		
	}
	if(isset($_POST['votElPuenteDeLosEspias']) && isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])){
		$usuario = $_SESSION['nombre'];

		setVoto($usuario, 'El puente de los espias', $host, $user, $pw, $db);
		
	}
	if(isset($_POST['votSpotlight']) && isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])){
		$usuario = $_SESSION['nombre'];

		setVoto($usuario, 'Spotlight', $host, $user, $pw, $db);
		
	}
	if(isset($_POST['votTheBigShort']) && isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])){
		$usuario = $_SESSION['nombre'];

		setVoto($usuario, 'The Big Short', $host, $user, $pw, $db);
		
	}
	if(isset($_POST['votMadMax']) && isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])){
		$usuario = $_SESSION['nombre'];

		setVoto($usuario, 'Mad Max', $host, $user, $pw, $db);
		
	}
	if(isset($_POST['votMartian']) && isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])){
		$usuario = $_SESSION['nombre'];

		setVoto($usuario, 'The Martian', $host, $user, $pw, $db);
		
	}

	function setVoto($usuario, $pelicula, $host, $user, $pw, $db){
		$con = mysqli_connect($host, $user, $pw)
				or die("problemas al conectar server");

		mysqli_select_db($con, $db)
			or die("problemas al conectar db");

		$situacionVoto=mysqli_query($con,"SELECT vot FROM usuarios WHERE nombre = '$usuario'") 
			or die ("error en busqueda");

		$row = $situacionVoto->fetch_assoc();
 
    	if($row['vot'] == "si"){

			echo "No puedes votar más de una vez";
		
		}elseif($row['vot'] == "no"){
			
			mysqli_query($con,"UPDATE usuarios SET vot = 'si' WHERE nombre = '$usuario'") 
				or die ("error en marcarte votado");
			
			$resultadoSumar=mysqli_query($con,"UPDATE peliculas SET votos=votos+1 WHERE nombre = '$pelicula'") 
				or die ("error en sumar el voto");
			
			echo "Voto realizado con exito";

		}else{

			echo 'error con la base de datos';
		
		}
	}
?>