<?php

	session_start();

	include("conexion.php");
	
	if(isset($_POST['registrarse'])) 
	{ 
		if(isset($_POST['nombre']) && !empty($_POST['nombre']) && 
			isset($_POST['pwd']) && !empty($_POST['pwd']))
		{
			$con = mysqli_connect($host, $user, $pw)
				or die("problemas al conectar server");
			
			mysqli_select_db($con, $db)
				or die("problemas al conectar db");
				
			$resultado=mysqli_query($con,"SELECT nombre FROM usuarios") or die ("error en busqueda");
			
			$i =1;
			while($fila = mysqli_fetch_array($resultado)){
				
				if($fila['nombre']==$_POST['nombre']){
					echo "El nombre de usuario ya existe";
					$i--;
				}
			}
			if($i>0){
				
				mysqli_query($con,"INSERT INTO usuarios (NOMBRE,PWD,VOT) VALUES ('$_POST[nombre]','$_POST[pwd]', 'no')")
						or die("problemas al insertar datos");
				$_SESSION["nombre"] = $_POST['nombre'];
				echo "Gracias por confiar en nosotros ".$_POST['nombre'];
			}
		} 
		else
		{
			echo "Alguno o todos los campos incompletos";
		}
	}
	if(isset($_POST['entrar'])) 
	{ 
		if(isset($_POST['nombre']) && !empty($_POST['nombre']) && 
			isset($_POST['pwd']) && !empty($_POST['pwd']))
		{
			$con = mysqli_connect($host, $user, $pw)
				or die("problemas al conectar server");
			
			mysqli_select_db($con, $db)
				or die("problemas al conectar db");
				
			$resultado=mysqli_query($con,"SELECT nombre,pwd FROM usuarios") or die ("error en busqueda");
			
			$i =1;
			while($fila = mysqli_fetch_array($resultado)){
				
				if($fila['nombre']==$_POST['nombre'] && $fila['pwd']==$_POST['pwd']){
					echo "Bienvenido ".$_POST['nombre'];
					$_SESSION["nombre"] = $_POST['nombre'];
					$i--;
				}
			}
			if($i>0){
				
				echo "Nombre o contraseña incorrectos";
			}
		} else
			{
				echo "Alguno o todos los campos incompletos";
			}
	}
?>
